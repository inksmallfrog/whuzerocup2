/**
 * Created by inksmallfrog on 11/26/15.
 */
function showAlbum(album){
    var allPhotographs = document.getElementsByClassName("photograph");
    if(album == null){
        for(var i = 0; i < allPasage.length; ++i){
            allPhotographs[i].style.display = "block";
        }
    }
    else{
        for(var i = 0; i < allPasage.length; ++i){
            if(allPhotographs[i].classList.contains(album)){
                allPhotographs[i].style.display = "block";
            }
            else{
                allPhotographs[i].style.display = "none";
            }
        }
    }
}