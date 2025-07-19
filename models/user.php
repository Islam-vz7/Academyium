<?php


class users
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $db;

    function __construct()
    {
        include_once 'DatabaseClass.php';
        $this->db = new database();
    }


    function login($name, $password)
    {
        $this->name = $name;
        $this->password = $password;

        $sql = "SELECT * FROM users WHERE name='$this->name'";
        $row = $this->db->select($sql);

        if ($row && password_verify($this->password, $row['password'])) {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];

            return true;
        }
        return false;
    }

    function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        session_destroy();
    }

    function getID()
    {
        return $this->id;
    }

    function getname()
    {
        return $this->name;
    }

    function getUsername()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }


    function setID($id)
    {
        $this->id = $id;
    }

    function setname($name)
    {
        $this->name = $name;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }
}















?>