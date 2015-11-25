/**
 * Created by inksmallfrog on 11/23/15.
 */
var isSelectShow = false;
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
function goDinary(){
    document.getElementsByClassName("timeLine")[0].classList.add("left");
    document.getElementsByClassName("dinary")[0].classList.add("left");
    document.getElementsByClassName("memorialFixed")[0].classList.add("hide");
    document.getElementsByClassName("dinaryFixed")[0].classList.add("show");
}
function goHome(){
    document.getElementsByClassName("timeLine")[0].classList.remove("left");
    document.getElementsByClassName("dinary")[0].classList.remove("left");
    document.getElementsByClassName("memorialFixed")[0].classList.remove("hide");
    document.getElementsByClassName("dinaryFixed")[0].classList.remove("show");
}
