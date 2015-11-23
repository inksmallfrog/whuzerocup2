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

