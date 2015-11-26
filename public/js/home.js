/**
 * Created by inksmallfrog on 11/23/15.
 */
var isSelectShow = false;
var currentScreen = "timeLine";
var countDownTarget = new Array();

function toggleSelectOption(){
    var items = document.getElementsByClassName("selectItem");
    if(!isSelectShow){
        for(var i = 0; i < items.length; ++i){
            items[i].classList.add("show");
        }
        isSelectShow = true;
    }
    else{
        for(var i = 0; i < items.length; ++i){
            items[i].classList.remove("show");
        }
        isSelectShow = false;
    }
}
function logout(){
    window.parent.goFirstScreen();
}

function goScreen(screen){
    if(currentScreen == screen){
        console.log(1);
        window.scrollTo(0, 0);
        return;
    }
    window.scrollTo(0, 0);
    var currentElement = document.getElementsByClassName(currentScreen)[0];
    var goElement = document.getElementsByClassName(screen)[0];
    if(currentScreen == "timeLine"){
        currentElement.classList.add("left");
        setTimeout(function(){currentElement.style.display = "none";}, 1000);
        goElement.style.display = "block";
        setTimeout(function(){goElement.classList.add("left");}, 10);
        document.getElementsByClassName(currentScreen+"Fixed")[0].classList.add("hide");
        document.getElementsByClassName(screen + "Fixed")[0].classList.add("show");
    }
    else{
        currentElement.classList.remove("left");
        document.getElementsByClassName(currentScreen+"Fixed")[0].classList.remove("show");
        setTimeout(function(){currentElement.style.display = "none";}, 1000);

        if(screen == "timeLine"){
            goElement.style.display = "block";
            setTimeout(function(){goElement.classList.remove("left");}, 10);
            document.getElementsByClassName(screen+"Fixed")[0].classList.remove("hide");
        }
        else{
            goElement.style.display = "block";
            setTimeout(function(){goElement.classList.add("left");}, 10);
            document.getElementsByClassName(screen + "Fixed")[0].classList.add("show");
        }
    }

    currentScreen = screen;
}

function initCountDown(month0, day0, month1, day1, month2, day2){
    var now = new Date();
    countDownTarget[0] = new Date(now.getFullYear(), month0, day0);
    if(countDownTarget[0] < now){
        countDownTarget[0] = new Date(now.getFullYear() + 1, month0, day0);
    }
    countDownTarget[1] = new Date(now.getFullYear(), month1, day1);
    if(countDownTarget[1] < now){
        countDownTarget[1] = new Date(now.getFullYear() + 1, month1, day1);
    }
    countDownTarget[2] = new Date(now.getFullYear(), month2, day2);
    if(countDownTarget[2] < now){
        countDownTarget[2] = new Date(now.getFullYear() + 1, month2, day2);
    }
    calculateCountDown();
}

function calculateCountDown(){
    var now = new Date();
    var nextTime = (60 - now.getMinutes()) * 60000;
    var countDown = new Array();
    countDown[0] = document.getElementById("countDown0");
    countDown[1] = document.getElementById("countDown1");
    countDown[2] = document.getElementById("countDown2");
    for(var i = 0; i < 3; ++i){
        time = countDownTarget[i].getTime() - now.getTime();
        day = Math.floor(time/(1000 * 3600 * 24));
        if(day == 0){
            countDown[i].innerHTML = "祝幸福";
        }
        else{
            countDown[i].innerHTML = day + "天";
        }
    }
    setTimeout('calculateCountDown()', nextTime);
}