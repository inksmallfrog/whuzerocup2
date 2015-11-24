<?php
/**
 * Created by IntelliJ IDEA.
 * User: inksmallfrog
 * Date: 11/24/15
 * Time: 7:52 AM
 */
    $leftBar_selfInfo = "
    <div class=\"leftBar\">
        <div class=\"head\">
            <img src=\"{headImg}\" class=\"headImg\">
            <span class=\"select\">
                <a class=\"userName\" href=\"javascript:void(0)\" onclick=\"toggleSelectOption()\">
                    {userName}
                    <img src=\"../res/icon/select.png\" class=\"selectIcon\">
                </a>
            </span>
            <div class=\"option\">
                <ul>
                    <li class=\"selectItem\"><a href=\"javascript:void(0)\">个人信息</a></li>
                    <li class=\"selectItem\"><a href=\"javascript:void(0)\">情侣信息</a></li>
                    <li class=\"selectItem\"><a href=\"javascript:void(0)\">我眼中的情侣</a></li>
                    <li class=\"selectItem\"><a href=\"javascript:void(0)\" onclick=\"logout()\">登出</a></li>
                </ul>
            </div>
            <p class=\"introduction\">{introduction}</p>
        </div>";

    $timeLine_timeBar = "
    <div class=\"selectBox\">
        <ul class=\"yearSelect\">
            {list}
        </ul>
    </div>";
    $timeLine_timeBar_list = "
    <li class=\"yearItem\">
        <a class=\"year\" href=\"javascript:void(0)\" onclick=\"ToYear(this)\">
            {year}
        </a>
        <ul class=\"monthSelect\">
            {list}
        </ul>
    </li>";
    $timeLine_timeBar_list_list = "
    <li class=\"monthItem{year}\" id=\"{year}_{month}\"><a class=\"month\" href=\"javascript:void(0)\" onclick=\"ToMonth(this)\">{month}月</a></li>";

    $timeLine_memorialDay = "
    <div class=\"contentYear\" id=\"{year}Y{month}M\">{year}</div>
    <div class=\"contentMonth\">{month}</div>
    <div class=\"contentItemLeft contentItemFirst\">
        <div class=\"contentIconArrow\"></div>
        <div class=\"contentIconDot\"><div class=\"contentIconSmallDot\"></div></div>
        <div class=\"contentItemHead\">
            <div class=\"contentItemHeadTitle\">
                {first.title}
            </div>
            <div class=\"contentItemHeadIntroduction\">
                {first.content}
            </div>
        </div>
    </div>
    {list}";
    $timeLine_memorialDay_list = "
     <div class=\"contentItem{LeftOrRight} contentItemFirst\">
        <div class=\"contentIconArrow\"></div>
        <div class=\"contentIconDot\"><div class=\"contentIconSmallDot\"></div></div>
        <div class=\"contentItemHead\">
            <div class=\"contentItemHeadTitle\">
                {title}
            </div>
            <div class=\"contentItemHeadIntroduction\">
                {content}
            </div>
        </div>
    </div>";