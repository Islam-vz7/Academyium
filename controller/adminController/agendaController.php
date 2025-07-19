<?php
require_once __DIR__ . '/../../models/DatabaseClass.php';

class AgendaController {

    private $db;
    private $conn;

    public function __construct() {
        $this->db = new database(); // small 'd' as in your class name
        $this->conn = $this->db->conn; // use the ready-made connection from the singleton
    }

    public function saveAgenda($course_id, $days) {
        if (!$course_id || empty($days)) {
            die("Course ID or agenda data is missing.");
        }

        foreach ($days as $day) {
            $day_title = $this->conn->real_escape_string($day['title']);

            // 1. Insert into days table
            $stmt = $this->conn->prepare("INSERT INTO days (course_id, title) VALUES (?, ?)");
            $stmt->bind_param("is", $course_id, $day_title);
            $stmt->execute();
            $day_id = $stmt->insert_id;
            $stmt->close();

            // 2. Insert related sessions
            if (isset($day['sessions'])) {
                foreach ($day['sessions'] as $session) {
                    $session_title = $this->conn->real_escape_string($session['title']);
                    $description = $this->conn->real_escape_string($session['description']);
                    $start_time = $this->conn->real_escape_string($session['start_time']);
                    $end_time = $this->conn->real_escape_string($session['end_time']);

                    $stmt = $this->conn->prepare("INSERT INTO sessions (day_id, title, description, start_time, end_time) VALUES (?, ?, ?, ?, ?)");
                    $stmt->bind_param("issss", $day_id, $session_title, $description, $start_time, $end_time);
                    $stmt->execute();
                    $stmt->close();
                }
            }
        }

        return true;
    }
}

//////////////////////
// Handle POST request
//////////////////////

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $course_id = $_POST['course_id'] ?? null;
    $days = $_POST['days'] ?? [];

    // Convert JSON-style POST data to array if needed
    if (is_string($days)) {
        $days = json_decode($days, true);
    }

    $controller = new AgendaController();
    $result = $controller->saveAgenda($course_id, $days);

    if ($result) {
        header("Location: ../../../../view/admin/course.php");
        exit();
    } else {
        echo "Failed to save agenda.";
    }
}
?>
