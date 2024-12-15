<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        
        $id = trim($_POST['id']);
        $password = trim($_REQUEST['pass']);
        $role = trim($_POST['role']);
        $name = trim($_POST['name']);

        if($id == null || empty($password)){
            echo "Null id/password!";

        }else {
            $user = ['ID'=> $id, 'password'=> $password, 'Role'=>$role, 'Name'=>$name ];
            $_SESSION['user'] = $user;
            header('location: login.html');
        }

    }else{
        header('location: reg.html');
    }

?>