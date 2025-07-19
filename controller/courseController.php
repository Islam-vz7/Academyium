<?php
require_once __DIR__ . '/../models/DatabaseClass.php';

class CourseController {

    private $db;

    public function __construct() {
        $this->db = new database();
    }

    public function getAllCourses() {
        $sql = "SELECT * FROM courses ORDER BY start_date DESC";
        return $this->db->display($sql);
    }

    public function getCourseById($id) {
        $id = (int)$id;
        $sql = "SELECT * FROM courses WHERE id = $id";
        return $this->db->select($sql);
    }

    public function addCourse($data) {
        $title = $this->db->conn->real_escape_string($data['title']);
        $description = $this->db->conn->real_escape_string($data['description']);
        $price = (float)$data['price'];
        $location = $this->db->conn->real_escape_string($data['location']);
        $start_date = $this->db->conn->real_escape_string($data['start_date']);
        $end_date = $this->db->conn->real_escape_string($data['end_date']);
        $reg_link = $this->db->conn->real_escape_string($data['registration_form_link']);
        $feed_link = $this->db->conn->real_escape_string($data['feedback_form_link']);
        $image_url = $this->db->conn->real_escape_string($data['image_url']);

        $sql = "INSERT INTO courses (title, description, price, location, start_date, end_date, registration_form_link, feedback_form_link, image_url) 
                VALUES ('$title', '$description', $price, '$location', '$start_date', '$end_date', '$reg_link', '$feed_link', '$image_url')";
        
        return $this->db->insert($sql);
    }

    public function updateCourse($data) {
        $id = (int)$data['course_id'];
        $title = $this->db->conn->real_escape_string($data['title']);
        $description = $this->db->conn->real_escape_string($data['description']);
        $price = (float)$data['price'];
        $location = $this->db->conn->real_escape_string($data['location']);
        $start_date = $this->db->conn->real_escape_string($data['start_date']);
        $end_date = $this->db->conn->real_escape_string($data['end_date']);
        $reg_link = $this->db->conn->real_escape_string($data['registration_form_link']);
        $feed_link = $this->db->conn->real_escape_string($data['feedback_form_link']);
        $image_url = $this->db->conn->real_escape_string($data['image_url']);

        $sql = "UPDATE courses SET 
                    title = '$title', 
                    description = '$description', 
                    price = $price, 
                    location = '$location', 
                    start_date = '$start_date', 
                    end_date = '$end_date', 
                    registration_form_link = '$reg_link', 
                    feedback_form_link = '$feed_link', 
                    image_url = '$image_url' 
                WHERE id = $id";

        return $this->db->update($sql);
    }

    public function deleteCourse($id) {
        $id = (int)$id;
        $sql = "DELETE FROM courses WHERE id = $id";
        return $this->db->delete($sql);
    }
}
?>
