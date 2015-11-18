<?php
    session_start();
    if(isset($_GET["action"])){
        if($_GET["action"] == "logout"){
            session_destroy();
            header("Location:index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>情侣空间</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/navigator.css">
    <link rel="stylesheet" type="text/css" href="css/authentication.css">
    <script language="JavaScript">
        function authenticate(){
            document.getElementById("authentication").style.display = "block";
            document.getElementById("authenticationFilter").style.display = "block";
        }
        function closeAuthentication(){
            document.getElementById("authentication").style.display = "none";
            document.getElementById("authenticationFilter").style.display = "none";
        }
        function buttonUp(event){
            if(event.keyCode == 27){
                var authentication = document.getElementById("authentication");
                if(authentication.style.display == "block"){
                    closeAuthentication();
                }
            }
        }
    </script>
</head>
<body onkeyup="buttonUp(event)">
    <!--导航栏-->
    <div class="navigator">
        <a target="mainFrame" href="./page/mainPage.php">
        <span class="navigatorItem nav">
            主页
        </span>
        </a>
        <a target="mainFrame" href="./page/dinaryPage.php">
        <span class="navigatorItem nav">
            日记
        </span>
        </a>
        <a target="mainFrame" href="./page/memorialDayPage.php">
        <span class="navigatorItem nav">
            纪念日
        </span>
        </a>
        <a target="mainFrame" href="./page/explorePage.php">
        <span class="navigatorItem nav">
            探索
        </span>
        </a>
        <?php
            if(!isset($_SESSION["userName"])){
                $infoTip = "\n<a href=\"./authentication/signup.php\" target=\"authentication\" onclick=\"authenticate()\">\n
                <span class=\"navigatorItem infoTip\">\n
                注册\n
                </span>\n
                </a>\n
                <a href=\"./authentication/signin.php\" target=\"authentication\" onclick=\"authenticate()\">\n
                <span class=\"navigatorItem infoTip\">\n
                登录\n
                </span>\n
                </a>\n
                <span class=\"navigatorItem infoTip\">\n
                您还没有登录\n
                </span>\n";
            }
            else {
                require("./backend/DBConnector.php");
                $userInfo = $connector->searchUser($_SESSION["userName"]);
                $messageNumber = mysqli_num_rows($connector->getUserNewMessage($userInfo["userName"]));

                $infoTip = "\n<a href=\"".htmlspecialchars($_SERVER["PHP_SELF"])."?action=logout\">\n
                              <span class=\"navigatorItem infoTip\">\n
                              退出登录\n
                              </span>\n
                              </a>\n";

                if(!isset($userInfo["pairState"])){
                    $infoTip = $infoTip."<a href=\"./authentication/choosePair.php\" target=\"authentication\" onclick=\"authenticate()\">\n
                                         <span class=\"navigatorItem infoTip\">\n
                                         选择情侣\n
                                         </span>\n
                                         </a>
                                        <span class=\"navigatorItem infoTip\">\n
                                         您还没有选择情侣\n
                                         </span>\n
                                         \n";
                }
                else if($userInfo["pairState"] == "Waiting"){
                    $infoTip = $infoTip."<span class=\"avigatorItem infoTip\">\n
                                         等待 ".$userInfo["pair"]." 回应\n
                                         </span>\n";
                }
                else{
                    $infoTip = $infoTip."<span class=\"avigatorItem infoTip\">\n
                                         您的情侣为 ".$userInfo["pair"]." \n
                                         </span>\n";
                }

                $infoTip = $infoTip."<a target=\"mainFrame\" href=\"./src/messagePage\">\n
                                     <span class=\"navigatorItem infoTip\">\n
                                     您有（".$messageNumber."）条新消息\n
                                     </span>\n
                                     </a>\n
                                     <a target=\"mainFrame\" href=\"./src/information\">\n
                                     <span class=\"navigatorItem infoTip\">\n
                                     ".$userInfo["userName"]."\n
                                     </span>\n
                                     </a>\n";
            }
            echo $infoTip;
    ?>
    </div>

    <!--认证框-->
    <iframe name="authentication" id="authentication" src="" frameborder="0"></iframe>
    <div id="authenticationFilter"></div>

    <!--主框架-->
    <iframe name="mainFrame" id="mainFrame" src="./page/mainPage.php" frameborder="0"></iframe>
</body>
</html>