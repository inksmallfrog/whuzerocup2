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
        $this->conn = mysqli_connect("127.0.0.1", "root", "123456", "LoverSpaceInformation", "3306");
        if(!conn){
            echo "连接数据库失败".mysqli_error();
        }
        mysqli_query($this->conn, "create table if not EXISTS user(userName varchar(40) NOT NULL,
                                   password varchar(40) NOT NULL, gender tinyint(1) NOT NULL,
                                   pair VARCHAR(40), pairState tinyint(1));");
        mysqli_query($this->conn, "create table if not EXISTS message(id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                                   sender varchar(40) NOT NULL, receiver varchar(40) NOT NULL,
                                   message_type tinyint(1) NOT NULL, state tinyint(1) NOT NULL,
                                   sendDate datetime NOT NULL, message varchar(1000))AUTO_INCREMENT=0;");
    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            $c = __CLASS__;
            self::$_instance = new $c;
        }
        return self::$_instance;
    }

    public function searchUser($userName){
        $result = mysqli_query($this->conn, "select * from user WHERE userName=\"".$userName."\";");
        return mysqli_fetch_array($result);
    }

    public function getUserMessage($userName, $state){
        if($state != 2){
            $result = mysqli_query($this->conn, "select * from message WHERE receiver=\"".$userName."\"
                                                and state=".$state." order by sendDate desc;");
        }
        else{
            $result = mysqli_query($this->conn, "select * from message WHERE receiver=\"".$userName."\"
                                                order by sendDate desc;");
        }
        return $result;
    }
    public function readMessage($id){
        mysqli_query($this->conn, "update message set state=1 WHERE id=".$id.";");
    }

    public function authenticateUser($userName, $password){
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
        $result = mysqli_query($this->conn, "select * from user WHERE userName=\"".$userName."\";");
        if(mysqli_fetch_array($result)){
            return "用户已存在";
        }
        mysqli_query($this->conn, "insert into user(userName, password, gender)
                               VALUES(\"".$userName."\", \"".$password."\", \"".$gender."\");");
        return "注册成功";
    }

    public function sendPairMessage($sender, $receiver, $message){
        if($sender == $receiver){
            return "祝孤生orz";
        }
        $result = mysqli_query($this->conn, "select * from user WHERE  userName=\"".$receiver."\";");
        $user = mysqli_fetch_array($result);
        if(!$user){
            return "用户名不存在";
        }
        mysqli_query($this->conn, "insert into message(id, sender, receiver, message_type, state, sendDate, message)
                                   VALUES(null, \"".$sender."\", \"".$receiver."\", 0, 0, now(),\"".$message."\")");
        mysqli_query($this->conn, "update user set pair=\"".$receiver."\", pairState=0 where userName=\"".$sender."\";");
        return "申请成功";
    }
}

$connector = DBConnector::getInstance();
?>