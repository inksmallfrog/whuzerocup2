<?php
/**
 * Created by IntelliJ IDEA.
 * User: inksmallfrog
 * Date: 11/28/15
 * Time: 9:49 AM
 */
function signUp($Conn, $email, $password, $sex){
    $result = mysqli_query($Conn, "SELECT * FROM user WHERE email=\"".$email."\";");
    if(mysqli_fetch_array($result)){
        return false;
    }
    else{
        mysqli_query($Conn, "INSERT INTO user(email, password, sex)
                              VALUES(\"".$email."\", \"".$password."\", ".$sex.");");
    }
    return true;
}

function signUpPair($Conn, $oneEmail, $theOtherEmail){
    $oneId = emailToId($Conn, $oneEmail);
    $theOtherId = emailToId($Conn, $theOtherEmail);
    if($oneId == -1 || $theOtherId == -1){
        return false;
    }
    mysqli_query($Conn, "INSERT INTO pair(oneId, theOtherId)
                              VALUES(".$oneId.", ".$theOtherId.";");
    return true;
}

function emailToId($Conn, $email){
    $result = mysqli_query($Conn, "SELECT id FROM user WHERE email=\"".$email."\";");
    if($row = mysqli_fetch_array($result)){
        return $row["id"];
    }
    return -1;
}

function idToPairId($Conn, $id){
    $result = mysqli_query($Conn, "SELECT id FROM pair WHERE oneId=".$id." OR theOtherId=".$id.";");
    if($row = mysqli_fetch_array($result)){
        return $row["id"];
    }
    return -1;
}

function getMemorialDay($Conn, $pairId){
    $memorialDayData = array();
    $result = mysqli_query($Conn, "SELECT * FROM memorialDay WHERE pairId=".$pairId.";");
    while($row = mysqli_fetch_array($result)){
        $year = date('Y', $row["theDay"]);
        $month = date('m', $row["theDay"]);
        $day = date('d', $row["theDay"]);
        if(!isset($memorialDayData[$year])){
            array_push($memorialDayData, $year);
        }
        if(!isset($memorialDayData[$year][$month])){
            array_push($memorialDayData, $year);
            $memorialDayData[$year][$month]["month"] = $month;
        }
    }
    return $memorialDayData;
}