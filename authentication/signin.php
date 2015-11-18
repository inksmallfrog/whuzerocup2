<?php
    session_start();
    if(isset($_GET["action"])){
        if($_GET["action"] == "close"){
            $close = true;
        }
    }
    if(isset($_POST["userName"])){
        require("../backend/DBConnector.php");
        $authenticateResult = DBConnector::getInstance()->authenticateUser($_POST["userName"], $_POST["password"]);
        if($authenticateResult == "欢迎回家来～"){
            $_SESSION["userName"] = $_POST["userName"];
            $refresh = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/authenticationBox.css">
    <script language="JavaScript">
        function refreshIndex(){
            window.parent.location = window.parent.location;
        }
        function closethis(){
            window.parent.closeAuthentication();
        }
        function onKeyUp(event){
            if(event.keyCode == 27){
                closethis();
            }
        }
    </script>
    <?php
        if(isset($close)){
            echo "<script>closethis()</script>";
        }
        if(isset($refresh)){
            echo "<script>refreshIndex()</script>";
        }
    ?>
</head>
<body onkeyup="onKeyUp(event)">
<div class="authenticateBox" align="center">
    <form method="post">
        <div class="authenticateItem">
            <input type="text" name="userName" placeholder="这里输入用户名">
        </div>
        <div class="authenticateItem">
            <input type="password" name="password" placeholder="密码">
        </div>
        <div class="authenticateItem errorInformation">
            <?php echo $authenticateResult;?>
        </div>

        <div class="authenticateItem">
            <input type="submit" value="提交" class="button">
            <button onclick="closethis()" class="button">取消</button>
        </div>
    </form>
</div>
</body>
</html>