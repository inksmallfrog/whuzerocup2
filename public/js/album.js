/**
 * Created by inksmallfrog on 11/26/15.
 */
var currentAlbum;
function initAlbumFixed(){
    currentAlbum = document.getElementsByClassName("albumItem")[0].getElementsByTagName("a")[0];
    currentAlbum.classList.add("active");
}
function showAlbum(album, element){
    var allPhotographs = document.getElementsByClassName("photograph");
    if(album == null){
        for(var i = 0; i < allPhotographs.length; ++i){
            allPhotographs[i].style.display = "block";
        }
    }
    else{
        for(var i = 0; i < allPhotographs.length; ++i){
            if(allPhotographs[i].classList.contains(album)){
                allPhotographs[i].style.display = "block";
            }
            else{
                allPhotographs[i].style.display = "none";
            }
        }
    }
    currentAlbum.classList.remove("active");
    currentAlbum = element;
    currentAlbum.classList.add("active");
}
