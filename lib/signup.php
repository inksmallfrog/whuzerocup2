<?php
    session_start();
    $signUpFailed = -1;
    require_once("DBConnector.php");
    require_once("utilFunc.php");
    if(isset($_POST["emailLeft"])){
        $oneEmail = htmlspecialchars($_POST["emailLeft"]);
        $theOtherEmail = htmlspecialchars($_POST["emailRight"]);
        $onePassword = htmlspecialchars($_POST["passwordLeft"]);
        $theOtherPassword = htmlspecialchars($_POST["passwordRight"]);
        $onePassword = password_hash($onePassword, PASSWORD_DEFAULT);
        $theOtherPassword = password_hash($theOtherPassword, PASSWORD_DEFAULT);
        $oneSex = $_POST["sexLeft"];
        $theOtherSex = $_POST["sexRight"];

        if(signUp($Conn, $oneEmail, $onePassword, $oneSex)){
            if($oneEmail == $theOtherEmail){
                signUpPair($Conn, $oneEmail, $theOtherEmail);
            }

            else if(signUp($Conn, $theOtherEmail, $theOtherPassword, $theOtherSex)){
                signUpPair($Conn, $oneEmail, $theOtherEmail);
            }
            else{
                $signUpFailed = 1;
            }
        }
        else{
            $signUpFailed = 0;
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
            switch($signUpFailed){
                case 0:
                    echo "parent.showError(parent.document.getElementsByName(\"emailLeft\")[0], \"邮箱已注册\");";
                    break;

                case 1:
                    echo "parent.showError(parent.document.getElementsByName(\"emailRight\")[0], \"邮箱已注册\");";
                    break;

                default:
                    echo "parent.goLogin();";
                    break;
            }
         ?>
    </script>
</head>
<body>

</body>
</html>