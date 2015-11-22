<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>情侣空间</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css"/>
    <link rel="stylesheet" type="text/css" href="./css/form.css"/>
    <script src="./js/index.js"></script>
    <?php
    if(isset($_POST["user"])){
        echo "<script>parent.goNextScreen()</script>";
    }
    ?>
</head>
<body>
    <div class="firstScreen">
        <div class="authenticateBox login">
            <iframe name="authenticator" src="" style="display: none"></iframe>
            <form target="authenticator" class="formSingle" method="post" onsubmit="return checkLogin()">
                <input type="text" name="user" placeholder="登录邮箱或用户名" onblur="changeInput(this, '用户', false)">
                <div class="error userError"></div>
                <input type="password" name="password" placeholder="密码" onblur="changeInput(this, '密码', false)">
                <div class="error passwordError"></div>
                <input type="submit" class="left default" value="登录">
                <input type="button" class="right considerable" value="注册新帐号" onclick="goSignup()">
            </form>
        </div>
        <div class="authenticateBox signup">
            <iframe name="signupNewUser" src="./backend/signup.php" style="display: none"></iframe>
            <form target="signupNewUser" class="formDouble" method="post" onsubmit="goNextScreen()">
                <div class="formLeft">
                    <input type="text" name="emailLeft" placeholder="邮箱">
                    <div class="error emailLeftError"></div>
                    <input type="password" name="passwordLeft" placeholder="密码">
                    <div class="error passwordLeftError"></div>
                    <div class="checkBox">
                        <input type="checkbox" id="showPwdLeft" onclick="togglePassword(this)">
                        <label for="showPwdLeft">显示密码</label>
                    </div>
                    <div class="radioBox">
                        <input type="radio" name="sexLeft" value="male" id="sexMaleLeft">
                        <label for="sexMaleLeft">汉子</label>
                        <input type="radio" name="sexLeft" value="female" id="sexFemaleLeft">
                        <label for="sexFemaleLeft">妹纸</label>
                    </div>
                    <div class="error radioLeftError"></div>
                </div>
                <div class="formRight">
                    <input type="text" name="emailRight" placeholder="邮箱">
                    <div class="error emailRightError"></div>
                    <input type="password" name="passwordRight" placeholder="密码">
                    <div class="error passwordRightError"></div>
                    <div class="checkBox">
                        <input type="checkbox" id="showPwdRight" onchange="togglePassword(this)">
                        <label for="showPwdRight">显示密码</label>
                    </div>
                    <div class="radioBox">
                        <input type="radio" name="sexRight" value="male" id="sexMaleRight">
                        <label for="sexMaleRight">汉子</label>
                        <input type="radio" name="sexRight" value="female" id="sexFemaleRight">
                        <label for="sexFemaleRight">妹纸</label>
                    </div>
                    <div class="error radioRightError"></div>
                </div>
                <input type="submit" class="default" value="注册">
                <input type="button" class="considerable" value="取消" onclick="goLogin()">
            </form>
        </div>
        <div class="navigatorBox hide">

        </div>
    </div>
    <div class="secondScreen">

    </div>
</body>
</html>