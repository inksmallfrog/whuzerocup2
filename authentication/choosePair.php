<?php
session_start();
if(isset($_GET["action"])){
    if($_GET["action"] == "close"){
        $close = true;
    }
}
if(isset($_POST["userName"])){
    require("../backend/DBConnector.php");
    $authenticateResult = DBConnector::getInstance()->sendPairMessage(htmlspecialchars($_SESSION["userName"]),
                                                                  htmlspecialchars($_POST["userName"]),
                                                                  htmlspecialchars($_POST["message"]));
    if($authenticateResult == "申请成功"){
        $close = true;
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
            用户名：<input type="text" name="userName" placeholder="用户名千万不要弄错orz">
        </div>
        <div class="authenticateItem">
            <textarea name="message" placeholder="这里送出自己的消息" rows="7" cols="30"></textarea>
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