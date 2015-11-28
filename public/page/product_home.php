<?php
    session_start();
    require_once("../../lib/template.php");
    require_once("../../lib/DBConnector.php");
    require_once("../../lib/utilFunc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/timeLine.css">
    <link rel="stylesheet" type="text/css" href="../css/dinary.css">
    <link rel="stylesheet" type="text/css" href="../css/album.css">
    <link rel="stylesheet" type="text/css" href="../css/selfInfo.css">
    <link rel="stylesheet" type="text/css" href="../css/formInPage.css">
    <link rel="stylesheet" type="text/css" href="../css/dataEdit.css">
    <link rel="stylesheet" type="text/css" href="../css/photograghEdit.css">
    <script src="../js/selfInfo.js"></script>
    <script src="../js/home.js"></script>
    <script src="../js/timeLine.js"></script>
    <script src="../js/dinary.js"></script>
    <script src="../js/album.js"></script>
    <script src="../js/dataEdit.js"></script>
</head>
<body>
<?php
    $template_array = array("{user.name}", "{user.headImg}", "{user.introduction}");
    $target_array = array($_SESSION["user"]["userName"], $_SESSION["user"]["headImg"], $_SESSION["user"]["introduction"]);
    echo str_replace($template_array, $target_array, $home_selfInfo);

    $memorialDay = getMemorialDay($Conn, $_SESSION["pairId"]);
    $memorialDay_list = "";
    foreach($year as $memorialDay){
        $month_list = "";
        foreach($month as $year){
            $template_array = array("{year}", "{month}");
            $target_array = array($year["year"], $month["month"]);
            $month_list .= str_replace($template_array, $target_array, $home_timeBar_list_list);
        }
        $template_array = array("{year}", "{list}");
        $target_array = array($year["year"], $month_list);
        $memorialDay_list .= str_replace($template_array, $target_array, $home_timeBar_list);
    }
    echo str_replace("{list}", $memorialDay_list, $home_timeBar);
?>



</body>
</html>