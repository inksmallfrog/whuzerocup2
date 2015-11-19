<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    if(isset($_SESSION["userName"])){
       $htmlContent = "";
        $htmlContent = $htmlContent."<ul class=\"messageList\">";
        require("../backend/DBConnector.php");
        $rows = DBConnector::getInstance()->getUserMessage($_SESSION["userName"], 2);
        while($row = mysqli_fetch_array($rows)){
            $counter = 0;
            $classType = $counter % 2;
            $type = "";
            $option = "<button class=\"option\">删除</button></li>";
            switch($row["type"]){
                case 0:
                    $type = "交往请求";
                    $option = "<button class=\"option\">接受</button></li><button class=\"option\">拒绝</button></li>";
                    break;
                default:
                    $type = "bad data";
                    break;
            }
            $htmlContent = $htmlContent."<li class=\"messageContent".$classType."\">
                                         <a href=\"\">".$row["sender"]."</a>发来了一条".$type.
                                        "<div class=\"message\">".$row["message"]."</div>".$option;
        }

        echo $htmlContent;
    }
?>
</body>
</html>