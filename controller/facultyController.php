<?php
require_once __DIR__ . '/../models/DatabaseConnectionsSingleton.php';

class FacultyController {

    private function getDbConnection() {
        return Singleton::getInstance()->getConnection();
    }

    public function getAllFaculty() {
        $conn = $this->getDbConnection();
        $stmt = $conn->query("SELECT * FROM faculty ORDER BY name ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getFacultyById($id) {
        $conn = $this->getDbConnection();
        $stmt = $conn->prepare("SELECT * FROM faculty WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addFaculty($data, $file) {
        $imagePath = $this->uploadImage($file);
        $conn = $this->getDbConnection();
        $sql = "INSERT INTO faculty (name, role, hospital, image, description) VALUES (:name, :role, :hospital, :image, :description)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':name' => $data['name'],
            ':role' => $data['role'],
            ':hospital' => $data['hospital'],
            ':image' => $imagePath,
            ':description' => $data['description']
        ]);
    }

    public function updateFaculty($data, $file) {
        $currentFaculty = $this->getFacultyById($data['faculty_id']);
        $imagePath = $currentFaculty['image'];

        if (isset($file['image']) && $file['image']['error'] == 0) {
            $imagePath = $this->uploadImage($file);
        }

        $conn = $this->getDbConnection();
        $sql = "UPDATE faculty SET name = :name, role = :role, hospital = :hospital, image = :image, description = :description WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':id' => $data['faculty_id'],
            ':name' => $data['name'],
            ':role' => $data['role'],
            ':hospital' => $data['hospital'],
            ':image' => $imagePath,
            ':description' => $data['description']
        ]);
    }

    public function deleteFaculty($id) {
        $conn = $this->getDbConnection();
        $stmt = $conn->prepare("DELETE FROM faculty WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }

    private function uploadImage($file) {
        if (isset($file['image']) && $file['image']['error'] == 0) {
            $targetDir = __DIR__ . "/../include/assets/img/faculty/";
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            $fileName = uniqid() . '-' . basename($file["image"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            
            if (move_uploaded_file($file["image"]["tmp_name"], $targetFilePath)) {
                return "../include/assets/img/faculty/" . $fileName;
            }
        }
        return null;
    }
}
?>
