<?php
/**
 * Created by IntelliJ IDEA.
 * User: inksmallfrog
 * Date: 11/24/15
 * Time: 7:52 AM
 */
    $home_selfInfo = "
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
                    <li class=\"selectItem\"><a href=\"javascript:void(0)\" onclick=\"logout()\">登出</a></li>
                </ul>
            </div>
            <p class=\"introduction\">{introduction}</p>
        </div>";

    $home_timeBar = "
    <div class=\"selectBox\">
        <ul class=\"yearSelect\">
            {list}
        </ul>
    </div>";
    $home_timeBar_list = "
    <li class=\"yearItem\">
        <a class=\"year\" href=\"javascript:void(0)\" onclick=\"ToYear(this)\">
            {year}
        </a>
        <ul class=\"monthSelect\">
            {list}
        </ul>
    </li>";
    $home_list_list = "
    <li class=\"monthItem{year}\" id=\"{year}_{month}\"><a class=\"month\" href=\"javascript:void(0)\" onclick=\"ToMonth(this)\">{month}月</a></li>";

    $home_memorialDay = "
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
    $home_memorialDay_list = "
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

    $dinary_category = "
    <div class=\"fixedBox\">
        <div class=\"category\">
            <li class=\"categoryItem\">
                <a href=\"javascript:void(0)\" onclick=\"showCategory()\">
                    全部({categoryNumberSum})
                </a>
            </li>
            <ul class=\"categorySelect\">
                {list}
            </ul>
        </div>
    </div>";
    $dinary_category_list = "
    <li class=\"categoryItem\">
        <a href=\"javascript:void(0)\" onclick=\"showCategory('{category}')\">
            {category}({categoryNumber})
        </a>
    </li>";
    $dinary_passage = "
    <div class=\"passageBox\">
        {list}
    </div>";
    $dinary_passage_list = "
        <div class=\"passage {type}\">
            <a target=\"secondScreenFrame\" href=\"./passage?id={id}\" onclick=\"enterPassage()\">
                <div class=\"passageInfo\">
                    <div class=\"title\">
                        {title}
                    </div>
                    <div class=\"postTime\">
                        {time}
                    </div>
                    <div class=\"postUser\">
                        {author}
                    </div>
                </div>
            </a>
            <div class=\"passageState\">
                <div class=\"type\">
                    类别: {typeString}
                </div>
                <div class=\"readTimes\">
                    阅读: {readTimes}
                </div>
                <a class=\"edit\" href=\"javascript:void(0)\" id=\"{id}_edit\" onclick=\"editPassage(this)\">
                    <img src=\"../res/icon/edit.png\">
                </a>
                <div class=\"accessible\">
                    权限: {accessible}
                </div>
                <div class=\"commentTimes\">
                    评论: {commentTimes}
                </div>
                <a class=\"delete\" href=\"javascript:void(0)\" id=\"{id}_delete\" onclick=\"deletePassage(this)\">
                    <img src=\"../res/icon/delete.png\">
                </a>
            </div>
        </div>";

    $passage = "
    <div class=\"passageHead\">
        <a href=\"javascript:void(0)\" onclick=\"quitPassage()\">日记</a> >
        <a href=\"javascript:void(0)\" id=\"{type}\" onclick=\"showCategory('{type}')\">情书</a> > {title}
    </div>
    <div class=\"passageContent\">
        <div class=\"passageSelf\">
            <div class=\"head\">
                <div class=\"title\">
                    {title}
                </div>
                <div class=\"author\">
                    {author}
                </div>
                <div class=\"postTime\">
                    {postTime}
                </div>
            </div>
            <div class=\"content\">
                {content}
            </div>
            <div class=\"passageState\">
                <div class=\"passageType\">
                    分类：{typeString}
                </div>
                <div class=\"passageAccessible\">
                    权限: {accessibleString}
                </div>
                <div class=\"passageReadTimes\">
                    浏览量：{readTimes}
                </div>
                <div class=\"passageCommentTimes\">
                    评论数：{commentTimes}
                </div>
            </div>
        </div>
        <div class=\"makeComment\">
            写下你们的评论吧～
            <form method=\"post\">
                <textarea></textarea>
                <input type=\"submit\" value=\"发表\">
            </form>
        </div>
        <div class=\"commentShow\">
           {list}
        </div>
    </div>";
    $passage_list = "
     <div class=\"commentItem\">
         <div class=\"commentUser\">
             <div class=\"userHeadImg\">
                 <img src=\"{userHeadUrl}\">
             </div>
             <div class=\"userName\">
                 {userName}
             </div>
             <div class=\"commentTime\">
                 {commentTime}
             </div>
         </div>
         <div class=\"commentContent\">
             {commentContent}
         </div>
     </div>";
