<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="../js/main.js"></script>
</head>
<body>
    <div class="leftBar">
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
                    <li class="selectItem"><a href="javascript:void(0)">情侣信息</a></li>
                    <li class="selectItem"><a href="javascript:void(0)">我眼中的情侣</a></li>
                    <li class="selectItem"><a href="javascript:void(0)" onclick="logout()">登出</a></li>
                </ul>
            </div>
            <p class="introduction">其实还是很喜欢你的～</p>
        </div>
        <div class="info">

        </div>
    </div>
    <iframe class="contentFrame" src="timeLine.html"></iframe>
</body>
</html>