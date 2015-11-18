<?php

/**
 * Created by IntelliJ IDEA.
 * User: inksmallfrog
 * Date: 11/18/15
 * Time: 7:03 AM
 */
class DBConnector
{
    private static $_instance;
    var $conn;

    private function __construct(){
        $this->createConnection();
    }

    private function createConnection(){
              $this->conn = mysqli_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS, SAE_MYSQL_DB);
        if(!conn){
            echo "连接数据库失败".mysqli_error();
        }
    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            $c = __CLASS__;
            self::$_instance = new $c;
        }
        return self::$_instance;
    }

    public function searchUser($userName){
             $result = mysqli_query($this->conn, $this->conn, "select * from user WHERE userName=\"".$userName."\";");
        return mysqli_fetch_array($result);
    }

    public function getUserNewMessage($userName){
             mysqli_query($this->conn, $this->conn, "create table if not EXISTS message(sender varchar(40), receiver varchar(40),
                     message varchar(1000), message_type tinyint(1), state tinyint(1));");
        $result = mysqli_query($this->conn, "select message from message WHERE receiver=\"".$userName."\" and state=0;");
        return $result;
    }

    public function authenticateUser($userName, $password){
        mysqli_query($this->conn, "create database if not exists LoverSpaceInformation");
        mysqli_select_db(SAE_MYSQL_DB);
        mysqli_query($this->conn, "create table if not EXISTS user(userName varchar(40), password varchar(40),
                     gender tinyint(1), pair VARCHAR(40), pairState tinyint(1));");
        $result = mysqli_query($this->conn, "select password from user WHERE  userName=\"".$userName."\";");
        $user = mysqli_fetch_array($result);
        if(!$user){
            return "用户名不存在";
        }
        else if($user["password"] != $password){
            return "密码错误";
        }
        else{
            return "欢迎回家来～";
        }
    }

    public function signupNewUser($userName, $password, $gender){
        mysqli_query($this->conn, "create database if not exists LoverSpaceInformation");
        mysqli_select_db(SAE_MYSQLI_DB);
        mysqli_query($this->conn, "create table if not EXISTS user(userName varchar(40), password varchar(40),
                     gender tinyint(1), pair VARCHAR(40), pairState tinyint(1));");
        $result = mysqli_query($this->conn, "select * from user WHERE userName=\"".$userName."\";");
        if(mysqli_fetch_array($result)){
            return "用户已存在";
        }
        $result = mysqli_query($this->conn, "insert into user(userName, password, gender)
                               VALUES(\"".$userName."\", \"".$password."\", \"".$gender."\");");
        return "注册成功";
    }

    public function sendPairMessage($sender, $receiver, $message){
        if($sender == $receiver){
            return "祝孤生orz";
        }
        mysqli_select_db(SAE_MYSQLI_DB);
        $result = mysqli_query($this->conn, "select password from user WHERE  userName=\"".$receiver."\";");
        $user = mysqli_fetch_array($result);
        if(!$user){
            return "用户名不存在";
        }
        mysqli_query($this->conn, "create table if not EXISTS message(sender varchar(40), receiver varchar(40),
                     message varchar(1000), message_type tinyint(1), state tinyint(1));");
        mysqli_query($this->conn, "insert into message(sender, receiver, message, message_type, state)
                     VALUES(\"".$sender."\", \"".$receiver."\", \"".$message."\", 0, 0)");
        mysqli_query($this->conn, "update user set pair=\"".$receiver."\", pairState=0 where userName=\"".$sender."\";");
        return "申请成功";
    }
}

$connector = DBConnector::getInstance();
?>