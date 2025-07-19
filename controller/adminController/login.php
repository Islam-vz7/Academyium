<?php
if (isset($_POST["submit"])) {
    include '../../models/user.php';

    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];

        $user = new users();
        $true = $user->login($name, $password);

        if ($true == true) {
                header("location:../../view/admin/dashboard.php");
        } else {
            header("location: ../../view/admin/login.php");
        }
    } else {
        header("location: ../../view/admin/login.php?error=invalid");
    }
}

?>