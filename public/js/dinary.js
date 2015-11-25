/**
 * Created by inksmallfrog on 11/24/15.
 */
var isInPassage = false;
function enterPassage(){
    document.getElementsByClassName("firstScreen")[0].classList.add("up");
    document.getElementsByClassName("secondScreen")[0].classList.add("up");
    isInPassage = true;
}
function quitPassage(){
    document.getElementsByClassName("firstScreen")[0].classList.remove("up");
    document.getElementsByClassName("secondScreen")[0].classList.remove("up");
}
function showCategory(type){
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
}