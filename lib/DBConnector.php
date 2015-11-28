<?php

/**
 * Created by IntelliJ IDEA.
 * User: inksmallfrog
 * Date: 11/28/15
 * Time: 8:32 AM
 */
class DBConnector
{
    private $conn;

    private static $connector = null;
    public static function getInstance(){
        if(self::$connector == null){
            $class = __CLASS__;
            self::$connector = new $class;
        }
        return self::$connector;
    }

    private function __construct(){
        $this->init();
    }

    public function __get($name){
        return $this->$name;
    }

    private function init(){
        require_once("config.php");
        $this->conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);
        if($this->conn == null){
            echo mysqli_connect_error();
        }

        mysqli_query($this->conn, "CREATE TABLE IF NOT EXISTS
                             user(id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                  email CHAR(60) NOT NULL,
                                  password CHAR(100) NOT NULL,
                                  sex tinyint(1) NOT NULL,
                                  userName CHAR(80) NOT NULL DEFAULT \"设置信息\",
                                  headImg CHAR(80) NOT NULL DEFAULT \"../res/headImg/head.jpg\",
                                  birthday DATE,
                                  introduction CHAR(255),
                                  pairDescribe CHAR(255));");

        mysqli_query($this->conn, "CREATE TABLE IF NOT EXISTS
                             pair(id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                  oneId MEDIUMINT NOT NULL,
                                  theOtherId MEDIUMINT NOT NULL,
                                  togetherDay DATE);");

        mysqli_query($this->conn, "CREATE TABLE IF NOT EXISTS
                             memorialDay(id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                  pairId MEDIUMINT NOT NULL,
                                  theDay DATE NOT NULL,
                                  memorialType TINYINT(1) NOT NULL DEFAULT 0,
                                  content CHAR(255));");

        mysqli_query($this->conn, "CREATE TABLE IF NOT EXISTS
                             dinary(id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                  pairId MEDIUMINT NOT NULL,
                                  dinaryType MEDIUMINT NOT NULL DEFAULT 0,
                                  accessibleType TINYINT(1) NOT NULL DEFAULT 0,
                                  title CHAR(140) NOT NULL,
                                  publishTime DATE NOT NULL,
                                  authorId MEDIUMINT NOT NULL,
                                  content TEXT,
                                  readTime int(10) NOT NULL DEFAULT 0,
                                  comentTime int(10) NOT NULL DEFAULT 0);");

        mysqli_query($this->conn, "CREATE TABLE IF NOT EXISTS
                             comment(id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                  dinaryId MEDIUMINT NOT NULL,
                                  authorId MEDIUMINT NOT NULL,
                                  commentTime DATE,
                                  content CHAR(255) NOT NULL);");

        mysqli_query($this->conn, "CREATE TABLE IF NOT EXISTS
                             photogragh(id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                  pairId MEDIUMINT NOT NULL,
                                  album MEDIUMINT NOT NULL DEFAULT 0,
                                  accessibleType TINYINT(1) NOT NULL DEFAULT 0,
                                  photograghPath char(200) NOT NULL,
                                  publishTime DATE NOT NULL,
                                  authorId MEDIUMINT NOT NULL,
                                  descibe char(255));");

        mysqli_query($this->conn, "CREATE TABLE IF NOT EXISTS
                             dataType(id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                  pairId MEDIUMINT NOT NULL,
                                  typeFor int(1) NOT NULL,
                                  typeId MEDIUMINT NOT NULL,
                                  typeString char(80) NOT NULL);");
    }
}

$Conn = DBConnector::getInstance()->conn;