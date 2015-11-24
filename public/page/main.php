
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/timeLine.css">
    <script src="../js/main.js"></script>
    <script src="../js/timeLine.js"></script>
</head>
<body>
    <div class="fixedBox">
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
        <div class="selectBox">
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
    </div>


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
    <script>
        initCurrentYear();
    </script>
</body>
</html>