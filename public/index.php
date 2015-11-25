<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>情侣空间</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css"/>
    <link rel="stylesheet" type="text/css" href="./css/form.css"/>
    <link rel="stylesheet" type="text/css" href="./css/findPasswordBox.css"/>
    <link rel="stylesheet" type="text/css" href="./css/loginBox.css"/>
    <link rel="stylesheet" type="text/css" href="./css/signupBox.css"/>
    <script src="./js/index.js"></script>
</head>
<body>
    <iframe name="backend" src="" style="display: none"></iframe>
    <div class="firstScreen">
        <div class="flystar"></div>
        <div class="flystar"></div>
        <div class="flystar"></div>
        <div class="flystar"></div>
        <div class="flystar"></div>
        <div class="authenticateBox login">
            <form action="../lib/login.php" target="backend" class="formSingle" method="post" onsubmit="return checkLogin()">
                <input type="text" name="user" placeholder="登录邮箱或用户名" onblur="changeInput(this, '用户', false)">
                <div class="error userError"></div>
                <input type="password" name="password" placeholder="密码" onblur="changeInput(this, '密码', false)">
                <div class="error passwordError"></div>
                <div class="findPasswordButton"><a href="javascript:void(0)" onclick="goFindPassword()">找回密码</a></div>
                <input type="submit" class="left default" value="登录">
                <input type="button" class="right considerable" value="注册新帐号" onclick="goSignup()">
            </form>
        </div>
        <div class="authenticateBox signup">
            <form action="../lib/signup.php" target="backend" class="formDouble" method="post" onsubmit="return checkSignup()">
                <div class="formLeft">
                    <input type="text" name="emailLeft" placeholder="邮箱" onblur="changeInput(this, '邮箱', false)">
                    <div class="error emailLeftError"></div>
                    <input type="password" name="passwordLeft" placeholder="密码" onblur="changeInput(this, '密码', false)">
                    <div class="error passwordLeftError"></div>
                    <div class="checkBox">
                        <input type="checkbox" id="showPwdLeft" onclick="togglePassword(this)">
                        <label for="showPwdLeft">显示密码</label>
                    </div>
                    <div class="radioBox">
                        <input type="radio" name="sexLeft" value="male" id="sexMaleLeft" onclick="changeInput(this, '', true)">
                        <label for="sexMaleLeft">汉子</label>
                        <input type="radio" name="sexLeft" value="female" id="sexFemaleLeft" onclick="changeInput(this, '', true)">
                        <label for="sexFemaleLeft">妹纸</label>
                    </div>
                    <div class="error sexLeftError"></div>
                    <input type="submit" class="left default" value="注册">
                </div>
                <div class="formRight">
                    <input type="text" name="emailRight" placeholder="邮箱" onblur="changeInput(this, '邮箱', false)">
                    <div class="error emailRightError"></div>
                    <input type="password" name="passwordRight" placeholder="密码" onblur="changeInput(this, '密码', false)">
                    <div class="error passwordRightError"></div>
                    <div class="checkBox">
                        <input type="checkbox" id="showPwdRight" onchange="togglePassword(this)">
                        <label for="showPwdRight">显示密码</label>
                    </div>
                    <div class="radioBox">
                        <input type="radio" name="sexRight" value="male" id="sexMaleRight" onclick="changeInput(this, '', true)">
                        <label for="sexMaleRight">汉子</label>
                        <input type="radio" name="sexRight" value="female" id="sexFemaleRight" onclick="changeInput(this, '', true)">
                        <label for="sexFemaleRight">妹纸</label>
                    </div>
                    <div class="error sexRightError"></div>
                    <input type="button" class="right considerable" value="取消" onclick="goLogin('right')">
                </div>
            </form>
        </div>
        <div class="authenticateBox findPassword">
            <form action="../lib/findPassword.php" target="backend" class="formSingle" method="post" onsubmit="return checkFindPassword()">
                <input type="text" name="findPasswordUser" placeholder="注册邮箱或用户名" onblur="changeInput(this, '用户', false)">
                <div class="error findPasswordUserError"></div>
                <input type="submit" class="left default" value="密码找回">
                <input type="button" class="right considerable" value="取消" onclick="goLogin('left')">
            </form>
        </div>
        <div class="navigatorBox">
            <ul>
                <li class="left"><a target="mainPage" href="javascript:void(0)" onclick="goHomePage()">主页</a></li>
                <li class="left"><a href="javascript:void(0)" onclick="goDinaryPage()">日记</a></li>
                <li class="left"><a target="mainPage" href="./page/album.php">相册</a></li>
            </ul>
        </div>
    </div>
    <div class="secondScreen">
        <iframe name="mainPage"></iframe>
    </div>
    <?php
        if(isset($_SESSION["userName"])){
            echo "<script>goSecondScreen()</script>";
        }
    ?>
    <script>
        starFly();
    </script>
</body>
</html>