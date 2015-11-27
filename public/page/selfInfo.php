<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/selfInfo.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/formInPage.css">
    <script src="../js/selfInfo.js"></script>
</head>
<body>
    <div class="head">
        <img src="../res/headImg/head.jpg" class="headImg">
            <span class="select">
                <a class="userName" href="javascript:void(0)" onclick="toggleSelectOption()">
                    二娃就是这么任性
                    <img src="../res/icon/select.png" class="selectIcon">
                </a>
            </span>
        <div class="option">
            <ul>
                <li class="selectItem"><a href="javascript:void(0)">个人信息</a></li>
                <li class="selectItem"><a href="javascript:void(0)" onclick="goDinary()">情侣信息</a></li>
                <li class="selectItem"><a href="javascript:void(0)" onclick="logout()">登出</a></li>
            </ul>
        </div>
        <p class="introduction">其实还是很喜欢你的～</p>
    </div>


    <div class="countDown">
        <ul class="countDownList">
            <li class="countDownItem">距离 一起看电影 还有<p id="countDown0"></p></li>
            <li class="countDownItem">距离 一起看吃饭 还有<p id="countDown1"></p></li>
            <li class="countDownItem">距离 一起看逛街 还有<p id="countDown2"></p></li>
        </ul>
    </div>

    <div class="selfInfo right">
        <div class="selfInfoBox">
            <div class="individualInfo up">
                <form class="selfInfoForm">
                <div class="formItem"><p class="label">昵称:</p><input type="text" name="userName"></div>
                <div class="formItem"><p class="label">生日:</p><input type="date" name="birthday"></div>
                <div class="formItem"><p class="label">头像:</p><input type="file" name="headImg"><img src=""></div>
                <div class="formItem"><p class="label">签名:</p><textarea name="introduction"></textarea></div>
                <div class="formItem"><p class="label">我眼中的他/她:</p><textarea name="theOtherInMyEyes"></textarea></div>
                <div class="formItem">
                    <p class="label">&nbsp</p>
                    <input type="submit" value="提交">
                    <input type="reset" value="取消">
                </div>
                </form>
            </div>
            <div class="pairInfo">
                <form class="selfInfoForm">
                <div class="formItem"><p class="label">在一起的日子:</p><input type="date" name="togetherDay"></div>
                <div class="formItem">
                    <p class="label">我们的纪念日:</p>
                    <ul class="memorialDayList">
                        <li>
                            <p class="label">时间: </p><input type="date">
                            <p class="label">内容:</p><input type="text">
                            <img src="..document.getElementsByClassName(currentFormName)[0].style.display = "block";/res/icon/delete.png">
                        </li>
                        <div id="addMemorialDay">
                            <p class="label">&nbsp</p><input type="button" class="addItem"  onclick="addMemorialDayItem()" value="添加">
                        </div>
                    </ul>
                </div>
                <div class="formItem"><p class="label">他/她眼中的我:</p><textarea></textarea></div>
                <div class="formItem">
                    <div class="formItem">
                        <p class="label">&nbsp</p>
                        <input type="submit" value="提交">
                        <input type="reset" value="取消">
                    </div>
                </div>
                </form>
            </div>
            <div class="changePassword">
                <form class="selfInfoForm">
                    <div class="formItem"><p class="label">验证邮箱:</p><text>327720269@qq.com</text></div>
                    <div class="formItem"><p class="label">旧密码:</p><input type="password" name="oldPassword"></div>
                    <div class="formItem"><p class="label">新密码:</p><input type="password" name="newPassword">
                    <input type="checkbox" onchange="togglePasswordShow(this.checked)" id="showPassword">
                        <label for="showPassword" >显示密码</label></div>
                    <div class="formItem"><p class="label">&nbsp</p>
                        <div class="formItem">
                            <p class="label">&nbsp</p>
                            <input type="submit" value="提交">
                            <input type="reset" value="取消">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementsByClassName(currentFormName)[0].style.display = "block";
    </script>
</body>
</html>