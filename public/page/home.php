<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/timeLine.css">
    <link rel="stylesheet" type="text/css" href="../css/dinary.css">
    <link rel="stylesheet" type="text/css" href="../css/album.css">
    <link rel="stylesheet" type="text/css" href="../css/selfInfo.css">
    <link rel="stylesheet" type="text/css" href="../css/formInPage.css">
    <script src="../js/selfInfo.js"></script>
    <script src="../js/home.js"></script>
    <script src="../js/timeLine.js"></script>
    <script src="../js/dinary.js"></script>
    <script src="../js/album.js"></script>
</head>
<body>
    <div class="Fixed head">
        <img src="../res/headImg/head.jpg" class="headImg">
        <span class="select">
            <a class="userName" href="javascript:void(0)" onclick="toggleSelectOption()">
                二娃就是这么任性
                <img src="../res/icon/select.png" class="selectIcon">
            </a>
        </span>
        <div class="option">
            <ul>
                <li class="selectItem"><a href="javascript:void(0)" onclick="goScreen('selfInfo')">个人信息</a></li>
                <li class="selectItem"><a href="javascript:void(0)" onclick="logout()">登出</a></li>
            </ul>
        </div>
        <p class="introduction">其实还是很喜欢你的～</p>
    </div>
    <div class="Fixed CenterFixed timeLineFixed show">
        <ul class="yearSelect">
            <li class="yearItem" id="yearItem2015">
                <a class="year" href="javascript:void(0)" onclick="toYear(this)">
                    2015
                </a>
                <ul class="monthSelect">
                    <li class="monthItem2015" id="2015_11"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">11月</a></li>
                    <li class="monthItem2015" id="2015_9"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">9月</a></li>
                    <li class="monthItem2015" id="2015_7"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">7月</a></li>
                    <li class="monthItem2015" id="2015_6"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">6月</a></li>
                    <li class="monthItem2015" id="2015_3"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">3月</a></li>
                </ul>
            </li>
            <li class="yearItem" id="yearItem2014">
                <a class="year" href="javascript:void(0)" onclick="toYear(this)">
                    2014
                </a>
                <ul class="monthSelect">
                    <li class="monthItem2014" id="2014_12"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">12月</a></li>
                    <li class="monthItem2014" id="2014_2"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">2月</a></li>
                    <li class="monthItem2014" id="2014_1"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">1月</a></li>
                </ul>
            </li>
            <li class="yearItem" id="yearItem2013">
                <a class="year" href="javascript:void(0)" onclick="toYear(this)">
                    2013
                </a>
                <ul class="monthSelect">
                    <li class="monthItem2013" id="2013_5"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">5月</a></li>
                    <li class="monthItem2013" id="2013_4"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">4月</a></li>
                    <li class="monthItem2013" id="2013_3"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">3月</a></li>
                    <li class="monthItem2013" id="2013_2"><a class="month" href="javascript:void(0)" onclick="toMonth(this)">2月</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="Fixed CenterFixed dinaryFixed">
        <div class="category">
            <ul class="categorySelect">
                <li class="categoryItem"><a href="javascript:void(0)" onclick="showCategory()">全部(8)</a></li>
                <li class="categoryItem"><a href="javascript:void(0)" onclick="showCategory('test0')">test0(3)</a></li>
                <li class="categoryItem"><a href="javascript:void(0)" onclick="showCategory('test1')">test1(2)</a></li>
                <li class="categoryItem"><a href="javascript:void(0)" onclick="showCategory('test2')">test2(3)</a></li>
            </ul>
        </div>
    </div>
    <div class="Fixed CenterFixed albumFixed">
        <div class="albumList">
            <ul class="albumSelect">
                <li class="albumItem"><a href="javascript:void(0)" onclick="showAlbum()">全部(8)</a></li>
                <li class="albumItem"><a href="javascript:void(0)" onclick="showAlbum('test0')">test0(3)</a></li>
                <li class="albumItem"><a href="javascript:void(0)" onclick="showAlbum('test1')">test1(2)</a></li>
                <li class="albumItem"><a href="javascript:void(0)" onclick="showAlbum('test2')">test2(3)</a></li>
            </ul>
        </div>
    </div>
    <div class="Fixed CenterFixed selfInfoFixed">
        <div class="selfInfoList">
            <ul class="selfInfoSelect">
                <li class="selfInfoItem"><a href="javascript:void(0)" onclick="goForm('individualInfo')">我的信息</a></li>
                <li class="selfInfoItem"><a href="javascript:void(0)" onclick="goForm('pairInfo')">情侣信息</a></li>
                <li class="selfInfoItem"><a href="javascript:void(0)" onclick="goForm('changePassword')">修改密码</a></li>
            </ul>
        </div>
    </div>
    <div class="Fixed countDown">
        <ul class="countDownList">
            <li class="countDownItem">距离 一起看电影 还有<p id="countDown0"></p></li>
            <li class="countDownItem">距离 一起看吃饭 还有<p id="countDown1"></p></li>
            <li class="countDownItem">距离 一起看逛街 还有<p id="countDown2"></p></li>
        </ul>
    </div>



    <div class="Screen RightScreen timeLine left">
        <div class="timeLineBox">
            <div class="contentYear" id="2015Y11M">2015</div>
            <div class="contentMonth">11月</div>
            <div class="contentItemLeft contentItemFirst">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentItemRight">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentYear" id="2015Y7M">2015</div>
            <div class="contentMonth">7月</div>
            <div class="contentItemLeft contentItemFirst">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentItemRight">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentItemLeft">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentYear" id="2015Y6M">2015</div>
            <div class="contentMonth">6月</div>
            <div class="contentItemLeft contentItemFirst">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentItemRight">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentItemLeft">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentYear" id="2014Y12M">2014</div>
            <div class="contentMonth">12月</div>
            <div class="contentItemLeft contentItemFirst">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentItemRight">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentItemLeft">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentYear" id="2014Y1M">2014</div>
            <div class="contentMonth">1月</div>
            <div class="contentItemLeft contentItemFirst">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentYear" id="2013Y2M">2013</div>
            <div class="contentMonth">2月</div>
            <div class="contentItemLeft contentItemFirst">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
            <div class="contentItemRight">
                <div class="contentIconArrow"></div>
                <div class="contentIconDot"><div class="contentIconSmallDot"></div></div>
                <div class="contentItemHead">
                    <div class="contentItemHeadTitle">
                        纪念日
                    </div>
                    <div class="contentItemHeadIntroduction">
                        这是个纪念日
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="Screen RightScreen dinary">
        <div class="firstScreen">
            <div class="passageBox">
                <div class="passage test1">
                    <a target="secondScreenFrame" href="./passage.php?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃1
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage test0">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃0
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage test1">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃2
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage.php?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div><div class="passage">
                    <a target="secondScreenFrame" href="./passage?id=112" onclick="enterPassage()">
                        <div class="passageInfo">
                            <div class="title">
                                致二娃
                            </div>
                            <div class="postTime">
                                2015.11.24
                            </div>
                            <div class="postUser">
                                二娃就是这么任性
                            </div>
                        </div>
                    </a>
                    <div class="passageState">
                        <div class="type">
                            类别: 情书
                        </div>
                        <div class="readTimes">
                            阅读: 0
                        </div>
                        <a class="edit" href="javascript:void(0)" id="112_edit" onclick="editPassage(this)">
                            <img src="../res/icon/edit.png">
                        </a>
                        <div class="accessible">
                            权限: 仅情侣
                        </div>
                        <div class="commentTimes">
                            评论: 0
                        </div>
                        <a class="delete" href="javascript:void(0)" id="112_delete" onclick="deletePassage(this)">
                            <img src="../res/icon/delete.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondScreen">
            <iframe src="" name="secondScreenFrame"></iframe>
        </div>
    </div>

    <div class="Screen RightScreen album">
        <div class="albumBox">
            <div class="photograph">
                <img src="../res/photograph/1.jpg">
                <div class="introduction">
                    <div class="describe">
                        萌萌哒～
                    </div>
                    <div class="author">
                        二娃不不乖
                    </div>
                    <div class="postTime">
                        2015.11.26
                    </div>
                </div>
            </div><div class="photograph">
                <img src="../res/photograph/2.jpg">
                <div class="introduction">
                    <div class="describe">
                        萌萌哒～
                    </div>
                    <div class="author">
                        二娃不不乖
                    </div>
                    <div class="postTime">
                        2015.11.26
                    </div>
                </div>
            </div><div class="photograph">
                <img src="../res/photograph/3.jpg">
                <div class="introduction">
                    <div class="describe">
                        萌萌哒～
                    </div>
                    <div class="author">
                        二娃不不乖
                    </div>
                    <div class="postTime">
                        2015.11.26
                    </div>
                </div>
            </div><div class="photograph">
                <img src="../res/photograph/4.jpg">
                <div class="introduction">
                    <div class="describe">
                        萌萌哒～
                    </div>
                    <div class="author">
                        二娃不不乖
                    </div>
                    <div class="postTime">
                        2015.11.26
                    </div>
                </div>
            </div><div class="photograph">
                <img src="../res/photograph/5.jpg">
                <div class="introduction">
                    <div class="describe">
                        萌萌哒～
                    </div>
                    <div class="author">
                        二娃不不乖
                    </div>
                    <div class="postTime">
                        2015.11.26
                    </div>
                </div>
            </div><div class="photograph">
                <img src="../res/photograph/6.jpg">
                <div class="introduction">
                    <div class="describe">
                        萌萌哒～
                    </div>
                    <div class="author">
                        二娃不不乖
                    </div>
                    <div class="postTime">
                        2015.11.26
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Screen LeftScreen selfInfo">
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
                                <img src="../res/icon/delete.png">
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
        initCurrentYear();
        initCountDown(11, 23, 1, 24, 4, 3);
        initScreen();
        initSelfInfo();
    </script>
</body>
</html>