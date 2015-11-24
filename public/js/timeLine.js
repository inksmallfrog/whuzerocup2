/**
 * Created by inksmallfrog on 11/23/15.
 */
var currentYear;
var currentMonth;
var currentActiveYear;
var currentActiveMonth;
function changeTimeLineBarYear(yearItem){
    var lastMonthSelectNodes = document.getElementsByClassName("monthItem" + currentYear);
    var year = yearItem.innerHTML.replace(/\s+/g,'');
    var monthSelectNodes = document.getElementsByClassName("monthItem" + year);
    currentActiveYear.classList.remove("active");
    currentActiveMonth.classList.remove("active");
    currentActiveYear = yearItem;
    currentActiveMonth = monthSelectNodes[0];
    currentActiveYear.classList.add("active");
    currentActiveMonth.classList.add("active");

    for(var i = 0; i < lastMonthSelectNodes.length; ++i){
        lastMonthSelectNodes[i].classList.remove("show");
    }
    for(var i = 0; i < monthSelectNodes.length; ++i){
        monthSelectNodes[i].classList.add("show");
    }
    currentYear = year;
    currentMonth = currentActiveMonth.getElementsByClassName("month")[0].innerHTML.replace(/\s+/g,'').replace('月', '');
}
function changeTimeLineBarMonth(monthItem){
    var lastMonthSelectNode = document.getElementById(currentYear+"_"+currentMonth);
    var month = monthItem.getElementsByClassName("month")[0].innerHTML.replace(/\s+/g,'').replace('月', '');
    var monthSelectNode = document.getElementById(currentYear+"_"+month);
    lastMonthSelectNode.classList.remove("active");
    monthSelectNode.classList.add("active");
    currentMonth = month;
    currentActiveMonth = monthSelectNode;
}

var repeatCount = 0;
var cTimeout;
var initStep = 30;

function getElementTopPosition(element){
    var top = 0;
    if(element.offsetParent){
        top += element.offsetTop;
    }
    return top;
}
function scrollToElement(element){
    var scrollPos = getElementTopPosition(element);
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollPos = scrollPos - scrollTop;
    var reminder = scrollPos % initStep;
    var repeatTime = (Math.abs(scrollPos) - Math.abs(reminder)) / initStep;
    ScrollSmoothly(scrollPos, repeatTime);
    window.scrollBy(0, reminder);
}
function ScrollSmoothly(scrollPos, repeatTime){
    var step = initStep * (scrollPos < 0 ? -1 : 1);
    console.log(scrollPos);
    console.log(step);
    if(repeatCount < repeatTime){
        window.scrollBy(0, step);
    }
    else{
        repeatCount = 0;
        clearTimeout(cTimeout);
        return;
    }
    repeatCount++;
    cTimeout = setTimeout("ScrollSmoothly('" + scrollPos + "','" + repeatTime + "')", 10);
}

function scrollToYear(yearItem){
    var year = yearItem.innerHTML.replace(/\s+/g,'');
    var allYears = document.getElementsByClassName("contentYear");
    var yearElement;
    for(var i = 0; i < allYears.length; ++i){
        if(allYears[i].innerHTML.replace(/\s+/g,'') == year){
            yearElement = allYears[i];
            break;
        }
    }
    scrollToElement(yearElement);
}
function scrollToMonth(monthItem){
    var month = monthItem.innerHTML.replace(/\s+/g,'').replace('月', '');
    var monthElement = document.getElementById(currentYear + "Y" + month + "M");
    scrollToElement(monthElement);
}

function toYear(yearItem){
    //changeTimeLineBarYear(yearItem);
    scrollToYear(yearItem);
}
function toMonth(monthItem){
    //changeTimeLineBarMonth(monthItem);
    scrollToMonth(monthItem);
}

function initCurrentYear(){
    currentActiveYear = document.getElementsByClassName("year")[0];
    currentYear = currentActiveYear.innerHTML.replace(/\s+/g,'');

    var monthSelectNodes = document.getElementsByClassName("monthItem" + currentYear);
    currentActiveMonth = monthSelectNodes[0];
    currentMonth = currentActiveMonth.getElementsByClassName("month")[0].innerHTML.replace(/\s+/g,'').replace('月', '');
    for(var i = 0; i < monthSelectNodes.length; ++i){
        monthSelectNodes[i].classList.add("show");
    }

    currentActiveYear.classList.add("active");
    currentActiveMonth.classList.add("active");
}

window.onscroll = function(){
    var t = document.documentElement.scrollTop || document.body.scrollTop;
    var allTimeContents = {};
    var allTimeElements = document.getElementsByClassName("contentYear");
    var lastTop;
    var top;
    var currentElement;
    for(var i = 1; i < allTimeElements.length; ++i){
        lastTop = allTimeElements[i - 1].offsetTop;
        top = allTimeElements[i].offsetTop;
        if(t >= lastTop && t < top){
            currentElement = allTimeElements[i - 1];
            break;
        }
        if(t >= allTimeElements[allTimeElements.length - 1].offsetTop){
            currentElement = allTimeElements[allTimeElements.length - 1];
            break;
        }
    }
    if(!currentElement){
        currentElement = allTimeElements[0];
    }
    var currentId = currentElement.id;
    var year = currentId.split("Y")[0];
    var month = currentId.split("Y")[1].split("M")[0];

    var yearItem = document.getElementById("yearItem" + year);
    changeTimeLineBarYear(yearItem.getElementsByClassName("year")[0]);
    changeTimeLineBarMonth(document.getElementById(year + "_" + month));
}
