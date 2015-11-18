<?php
session_start();
if(isset($_GET["action"])){
    if($_GET["action"] == "close"){
        $close = true;
    }
}
if(isset($_POST["userName"])) {
    require("../backend/DBConnector.php");
    if ($_POST["gender"] == "male") {
        $gender = 0;
    } else if ($_POST["gender"] == "female") {
        $gender = 1;
    }
    $authenticateResult = DBConnector::getInstance()->signupNewUser($_POST["userName"], $_POST["password"], $gender);
    if ($authenticateResult == "注册成功") {
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
        function checkInformation(){
            if(document.getElementById("userName").value == ""){
                document.getElementById("errorInformation").innerHTML = "用户名不能为空";
                return false;
            }
            if(document.getElementById("password").value == ""){
                document.getElementById("errorInformation").innerHTML = "密码不能为空";
                return false;
            }
            if(document.getElementById("password").value != document.getElementById("passwordConfirm").value){
                document.getElementById("errorInformation").innerHTML = "两次密码输入不匹配！";
                return false;
            }
            var radios = document.getElementsByName("gender");
            for(var radio in radios){
                if(radios[radio].checked){
                    document.getElementById("errorInformation").innerHTML = "";
                    return true;
                }
            }
            document.getElementById("errorInformation").innerHTML = "性别不能为空";
            return false;
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
    <form action="signup.php" method="post" onsubmit="return checkInformation()">
        <div class="authenticateItem">
            <input type="text" id="userName" name="userName" placeholder="这里输入用户名">
        </div>
        <div class="authenticateItem">
            <input type="password" id="password" name="password" placeholder="密码">
        </div>
        <div class="authenticateItem">
            <input type="password" id="passwordConfirm" placeholder="请确认密码">
        </div>
        <div class="authenticateItem">
            <input type="radio" name="gender" id="male" value="male"><label for="male">汉子</label>
            <input type="radio" name="gender" id="female" value="female"><label for="female">妹纸</label>
        </div>
        <div class="authenticateItem errorInformation" id="errorInformation">
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