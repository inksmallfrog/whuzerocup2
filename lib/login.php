<?php
    session_start();
    $error = -1;
    require("DBConnector.php");
    require("utilFunc.php");
    if(isset($_POST["user"])){
        $user = htmlspecialchars($_POST["user"]);
        $password = htmlspecialchars($_POST["password"]);
        $result = mysqli_query($Conn, "SELECT * FROM user WHERE email=\"".$user."\"");
        if($row = mysqli_fetch_array($result)){
            if(password_verify($password, $row["password"])){
                $_SESSION["user"] = $row;
                $_SESSION["pairId"] = idToPairId($Conn, $row["id"]);
            }
            else{
                $error = 1;
            }
        }
        else{
            $error = 0;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script>
        <?php
            switch($error){
                case -1:
                    echo "parent.goSecondScreen()";
                    break;

                case 0:
                    echo "parent.showError(parent.document.getElementsByName(\"user\")[0],\"邮箱未注册\")";
                    break;

                case 1:
                    echo "parent.showError(parent.document.getElementsByName(\"password\")[0],\"密码错误\")";
                    break;

                default:
                    break;
            }
        ?>
    </script>
</head>
<body>
</body>
</html>