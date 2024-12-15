<?php
    session_start();

    $PASS = $_SESSION['user']['password'];

?>

<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <form>
        <fieldset style="width: 15%;">
            <legend>Change Password</legend>
            <table>
                <tr>
                    <td>
                        Current Password <br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="Current" value="" /> <br>
                    </td>
                </tr>

                <tr>
                    <td>
                        New Password <br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="password" name="New_pass" value="" /> <br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Retype New Password <br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="password" name="New_pass" value="" /> <br>
                    </td>
                </tr>


                </tr><td><hr color="black" size="2px"></tr></td>
            
            </table>
            <input type="submit" name="submit" value="change" />

            <?php
            if ($_SESSION['user']['Role'] == 'user')
            {
                echo '<a href="user.php">Home</a>';
            } 
            
            elseif ($_SESSION['user']['Role'] == 'admin') 
            {
                echo '<a href="admin.php">Home</a>';
            }
            ?>

            
            
        </fieldset>
    </form>
</body>
</html>




