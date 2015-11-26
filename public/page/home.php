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
    <script src="../js/home.js"></script>
    <script src="../js/timeLine.js"></script>
    <script src="../js/dinary.js"></script>
    <script src="../js/album.js"></script>
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
    <div class="timeLineFixed">
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
    <div class="dinaryFixed">
        <div class="category">
            <ul class="categorySelect">
                <li class="categoryItem"><a href="javascript:void(0)" onclick="showCategory()">全部(8)</a></li>
                <li class="categoryItem"><a href="javascript:void(0)" onclick="showCategory('test0')">test0(3)</a></li>
                <li class="categoryItem"><a href="javascript:void(0)" onclick="showCategory('test1')">test1(2)</a></li>
                <li class="categoryItem"><a href="javascript:void(0)" onclick="showCategory('test2')">test2(3)</a></li>
            </ul>
        </div>
    </div>
    <div class="albumFixed">
        <div class="albumList">
            <ul class="albumSelect">
                <li class="albumItem"><a href="javascript:void(0)" onclick="showAlbum()">全部(8)</a></li>
                <li class="albumItem"><a href="javascript:void(0)" onclick="showAlbum('test0')">test0(3)</a></li>
                <li class="albumItem"><a href="javascript:void(0)" onclick="showAlbum('test1')">test1(2)</a></li>
                <li class="albumItem"><a href="javascript:void(0)" onclick="showAlbum('test2')">test2(3)</a></li>
            </ul>
        </div>
    </div>
    <div class="countDown">
        <ul class="countDownList">
            <li class="countDownItem">距离 一起看电影 还有<p id="countDown0"></p></li>
            <li class="countDownItem">距离 一起看吃饭 还有<p id="countDown1"></p></li>
            <li class="countDownItem">距离 一起看逛街 还有<p id="countDown2"></p></li>
        </ul>
    </div>


    <div class="timeLine">
        <div class="timeLineBox">
            <div class="timeLine">
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
    </div>

    <div class="dinary">
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

    <div class="album">
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
    <script>
        console.log("adf");
        initCurrentYear();
        initCountDown(11, 23, 1, 24, 4, 3);
    </script>
</body>
</html>