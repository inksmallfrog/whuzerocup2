/**
 * Created by inksmallfrog on 11/24/15.
 */
var isInPassage = false;
var currentType = document.getElementsByClassName("categoryItem")[0].getElementsByTagName("a")[0];
function enterPassage(){
    window.scrollTo(0, 0);
    document.getElementsByClassName("firstScreen")[0].classList.add("up");
    document.getElementsByClassName("secondScreen")[0].classList.add("up");
    setTimeout(function(){document.getElementsByClassName("firstScreen")[0].style.display = "none"}, 2000);
    isInPassage = true;
}
function quitPassage(){
    document.getElementsByClassName("firstScreen")[0].style.display = "block";
    setTimeout(function(){document.getElementsByClassName("firstScreen")[0].classList.remove("up");}, 50);
    document.getElementsByClassName("secondScreen")[0].classList.remove("up");
    isInPassage = false;
}
function initDinaryFixed(){
    currentType.classList.add("active");
}
function showCategory(type){
    if(isInPassage){
        quitPassage();
    }
    var allPasage = document.getElementsByClassName("passage");
    if(type == null){
        for(var i = 0; i < allPasage.length; ++i){
            allPasage[i].style.display = "block";
        }
    }
    else{
        for(var i = 0; i < allPasage.length; ++i){
            if(allPasage[i].classList.contains(type)){
                allPasage[i].style.display = "block";
            }
            else{
                allPasage[i].style.display = "none";
            }
        }
    }
    currentType.classList.remove("active");
    currentType = type;
    currentType.classList.add("active");
}