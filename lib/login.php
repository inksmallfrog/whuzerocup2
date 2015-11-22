<?php
    session_start();
    if(isset($_POST["user"])){
        $_SESSION["userName"] = $_POST["user"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script>
    </script>
    <?php
    if(isset($_SESSION["userName"])){
        echo "<script>parent.goSecondScreen()</script>";
    }
    ?>
</head>
<body>


</body>
</html>