<?php
    session_start();
    include("../../lib/template.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/timeLine.css">
    <link rel="stylesheet" type="text/css" href="../css/dinary.css">
    <script src="../js/home.js"></script>
    <script src="../js/timeLine.js"></script>
    <script src="../js/dinary.js"></script>
</head>
<body>
<?php
    $template_array = array("{userName}", "{userHeadImg}", "{userIntroduction}");
    $target_array = array("二娃不不乖", "../res/headImg/head.jpg", "我是二娃");
    echo str_replace($template_array, $target_array, $home_selfInfo);

    $year_list = "";
    foreach($year as $years){
        $month_list = "";
        foreach($month as $months[$year]){
            $template_array = array("{year}", "{month}");
            $target_array = array($year, $month);
            $month_list .= str_replace($template_array, $target_array, $home_timeBar_list_list);
        }
        $template_array = array("{year}", "{list}");
        $target_array = array($year, $month_list);
        $year_list .= str_replace($template_array, $target_array, $home_timeBar_list);
    }
    echo str_replace("{list}", $year_list, $home_timeBar);

    $passageCategoryList = "";
    foreach($category as $categories){
        $template_array = array("{categoryId}", "{categoryName}", "{categoryNumber}");
        $target_array = array($category["id"], $category["name"], $categoryNumber);
        $passageCategoryList .= str_replace($template_array, $target_array, $dinary_category_list);
    }
    $template_array = array("{categoryNumberSum}", "{list}");
    $target_array = array($passageNumber, $passageCategoryList);
    echo str_replace($template_array, $target_array, $dinary_category);

    $memorialDayList = "";
    foreach($year as $years){
        foreach($month as $months[$year]){
            $counter = 0;
            $month_list = "";
            foreach($memorialDay as $memorialDays[$year][$month]){
                if($counter == 0){
                }
                else if($counter % 2 == 1){
                    $template_array = array("{LeftOrRight}", "{title}", "{content}");
                    $target_array = array("Right", $memorialDay["title"], $memorialDay["content"]);
                    $month_list .= str_replace($template_array, $target_array, $home_memorialDay_list_list);
                }
                else{
                    $template_array = array("{LeftOrRight}", "{title}", "{content}");
                    $target_array = array("Left", $memorialDay["title"], $memorialDay["content"]);
                    $month_list .= str_replace($template_array, $target_array, $home_memorialDay_list_list);
                }
                $counter += 1;
            }
            $template_array = array("{year}", "{month}", "{first.title}", "{first.content}", "{list}");
            $target_array = array($year, $month, $memorialDays[$year][$month][0]["title"],
                                  $memorialDay[$year][$month][0]["content"], $month_list);
            $memorialDayList .= str_replace($template_array, $target_array, $home_memorialDay_list);
        }
    }
    echo str_replace("{list}", $memorialDayList, $home_memorialDay);
?>

      <div class="passage test0">
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
        </div>

<script>
    initCurrentYear();
</script>
</body>
</html>