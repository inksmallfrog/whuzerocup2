<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/messageBox.css">
    <script>
        function closethis(){
            window.parent.closeMessageBox();
        }
    </script>
</head>
<body>
    <div class="header">
        <button onclick="closethis()">关闭</button>
    </div>
    <div class="content">
        <?php
            require("../backend/DBConnector.php");
            $message = DBConnector::getInstance()->getUserMessage($_SESSION["userName"], 0);
            $htmlContent = "<ul class=\"messageList\">";
            while($row = mysqli_fetch_array($message)){
                $counter = 0;
                $classType = $counter % 2;
                $type = "";
                switch($row["type"]){
                    case 0:
                        $type = "交往请求";
                        break;
                    default:
                        $type = "bad data";
                        break;
                }
                $htmlContent = $htmlContent."<li class=\"messageContent".$classType."\">
                                                <a href=\"\">".$row["sender"]."</a>发来了一条".$type.
                                                "<button class=\"hide\">隐藏</button></li>";
            }
            echo $htmlContent;
        ?>
    </div>
    <div class="footer">

    </div>
</body>
</html>