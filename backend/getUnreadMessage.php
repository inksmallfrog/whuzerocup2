<?php
/**
 * Created by IntelliJ IDEA.
 * User: inksmallfrog
 * Date: 11/19/15
 * Time: 5:16 PM
 */
session_start();
require("../backend/DBConnector.php");
$message = DBConnector::getInstance()->getUserMessage($_SESSION["userName"], 0);

echo mysqli_num_rows($message);
