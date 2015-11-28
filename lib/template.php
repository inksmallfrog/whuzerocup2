<?php
/**
 * Created by IntelliJ IDEA.
 * User: inksmallfrog
 * Date: 11/24/15
 * Time: 7:52 AM
 */
    $home_selfInfo = "
     <div class=\"Fixed head\">
        <img src=\"{user.headImg}\" class=\"headImg\">
        <div class=\"select\">
            <a class=\"userName\" href=\"javascript:void(0)\" onclick=\"goScreen('selfInfo')\">
                {user.name}
            </a>
             <a class=\"userName\" href=\"javascript:void(0)\" onclick=\"logout()\">
                <img src=\"../res/icon/quit.png\" class=\"selectIcon\">
            </a>
        </div>
        <p class=\"introduction\">{user.introduction}</p>
    </div>";

    $home_timeBar = "
    <div class=\"Fixed CenterFixed timeLineFixed show\">
        <ul class=\"yearSelect\">
            {list}
        </ul>
    </div>";

    $home_timeBar_list = "
    <li class=\"yearItem\" id=\"yearItem{year}\">
        <a class=\"year\" href=\"javascript:void(0)\" onclick=\"toYear(this)\">
            {year}
        </a>
        <ul class=\"monthSelect\">
            {list}
        </ul>
    </li>";
    $home_timeBar_list_list = "
    <li class=\"monthItem{year}\" id=\"{year}_{month}\"><a class=\"month\" href=\"javascript:void(0)\" onclick=\"toMonth(this)\">{month}月</a></li>";


    $home_memorialDay = "
    <div class=\"timeLine\">
        <div class=\"timeLineBox\">
            <div class=\"timeLine\">
                {list}
            </div>
        </div>
    </div>";
    $home_memorialDay_list = "
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
    $home_memorialDay_list_list = "
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
    <div class=\"dinaryFixed\">
        <div class=\"category\">
            <ul class=\"categorySelect\">
                <li class=\"categoryItem\">
                    <a href=\"javascript:void(0)\" onclick=\"showCategory()\">
                        全部({categoryNumberSum})
                    </a>
                </li>
                {list}
            </ul>
        </div>
    </div>";
    $dinary_category_list = "
    <li class=\"categoryItem\">
        <a href=\"javascript:void(0)\" onclick=\"showCategory('{categoryId}')\">
            {categoryName}({categoryNumber})
        </a>
    </li>";

    $dinary_passage = "
    <div class=\"dinary\">
        <div class=\"firstScreen\">
            <div class=\"passageBox\">
            {list}
            </div>
        </div>
    </div>";
    $dinary_passage_list = "
    <div class=\"passage {category}\">
        <a target=\"secondScreenFrame\" href=\"./passage.php?id={id}\" onclick=\"enterPassage()\">
            <div class=\"passageInfo\">
                <div class=\"title\">
                    {title}
                </div>
                <div class=\"postTime\">
                    {postTime}
                </div>
                <div class=\"postUser\">
                    {author}
                </div>
            </div>
        </a>
        <div class=\"passageState\">
            <div class=\"type\">
                类别: {categoryString}
            </div>
            <div class=\"readTimes\">
                阅读: 0
            </div>
            <a class=\"edit\" href=\"javascript:void(0)\" id=\"{id}_edit\" onclick=\"editPassage(this)\">
                <img src=\"../res/icon/edit.png\">
            </a>
            <div class=\"accessible\">
                权限: {accessibleString}
            </div>
            <div class=\"commentTimes\">
                评论: {commentNumber}
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

    $album_category = "
        <div class=\"albumFixed\">
            <div class=\"albumList\">
                <ul class=\"albumSelect\">
                    <li class=\"albumItem\">
                        <a href=\"javascript:void(0)\" onclick=\"showAlbum()\">
                            全部({albumNumberSum})
                        </a>
                    </li>
                    {list}
                </ul>
            </div>
        </div>";
    $album_category_list = "
        <li class=\"albumItem\">
            <a href=\"javascript:void(0)\" onclick=\"showAlbum('{albumId}')\">
                {albumName}({albumNumber})
            </a>
        </li>";
