<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {

        $id = trim($_POST['id']);
        $password = trim($_REQUEST['pass']);

        if($id == null || empty($password))
        {
            echo "Null id/password!";
        }

        else if ($_SESSION['user']['ID'] == $id && $_SESSION['user']['password']== $password ) 
        {
            setcookie('status', 'true', time()+3000, '/');

            if ($_SESSION['user']['Role'] == 'user') {
                header("Location: user.php");
            } 
            
            elseif ($_SESSION['user']['Role'] == 'admin') {
                header("Location: admin.php");
            }
    
        }
        
        else
        {
            echo "invalid user!";
        }
    }
    
    else
    {
        header('location: login.html');
    }

?>