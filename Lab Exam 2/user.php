<?php
    session_start();

    $NAME = $_SESSION['user']['Name'];

?>



<html>
<head>
    <title>User</title>
</head>
<body>
    <form>
        <fieldset style="width: 25%;">
        <h2 align="center">Welcome <?php echo $NAME; ?></h2>
        
        <table align="center">

            <tr>
                <td align="center">
                    <a href="profile.php" > Profile</a>
                    </td>
                </tr>

                <tr>
                    <td align="center">
                        <a href="changepass.php"> Change Password</a>
                        </td>
                    </tr>

                        <tr>
                            <td align="center">
                                <a href="logout.php"> Logout</a>
                                </td>
                            </tr>
    
                        
            

            </table>

    </fieldset>
    </form>

</body>
</html>
