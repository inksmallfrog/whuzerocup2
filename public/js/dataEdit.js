/**
 * Created by inksmallfrog on 11/27/15.
 */
var currentType;
var currentAlbum;
var newTypeCount = 0;
var newAlbumCount = 0;
function initType(){
    currentType = document.getElementsByClassName("typeChooserDiv")[0];
    currentType.classList.add("choose");
}
function initAlbum(){
    currentType = document.getElementsByClassName("albumChooserDiv")[0];
    currentType.classList.add("choose");
}
function chooseType(type){
    currentType.classList.remove("choose");
    currentType = type;
    currentType.classList.add("choose");
}
function chooseAlbum(album){
    currentAlbum.classList.remove("choose");
    currentAlbum = type;
    currentAlbum.classList.add("choose");
}

function addType(newTypeButton){
    var typeBox = document.getElementById("typeBox");
    typeBox.removeChild(newTypeButton);

    var input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("class", "newType");
    input.setAttribute("onkeydown", "if(event.keyCode==13) {toType(this);return false;}");
    input.setAttribute("onblur", "toType(this);");
    var label = document.createElement("label");
    label.setAttribute("class", "typeChooserDiv labelNew");
    label.setAttribute("onclick", "chooseType(this)");

    typeBox.appendChild(input);
    typeBox.appendChild(label);
    typeBox.appendChild(newTypeButton);

    input.focus();
}
function addAlbum(newAlbumButton){
    var albumBox = document.getElementById("albumBox");
    albumBox.removeChild(newAlbumButton);

    var input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("class", "newAlbum");
    input.setAttribute("onkeydown", "if(event.keyCode==13) {toAlbum(this);return false;}");
    input.setAttribute("onblur", "toAlbum(this);");
    var label = document.createElement("label");
    label.setAttribute("class", "albumChooserDiv labelNew");
    label.setAttribute("onclick", "chooseAlbum(this)");

    albumBox.appendChild(input);
    albumBox.appendChild(label);
    albumBox.appendChild(newAlbumButton);

    input.focus();
}
function toType(newType){
    var typeName = newType.value;
    if(typeName == ""){
        typeName = "新分类" + newTypeCount;
    }
    newType.setAttribute("type", "radio");
    newType.setAttribute("class", "typeChooser");
    newType.setAttribute("name", "typeChooser");
    newType.removeAttribute("onkeydown");
    newType.removeAttribute("onblur");
    newType.setAttribute("id", "newType" + newTypeCount);
    newType.setAttribute("value", typeName);
    var label = document.getElementsByClassName("labelNew")[0];
    label.classList.remove("labelNew");
    label.setAttribute("for", "newType" + newTypeCount);
    var labelText = document.createTextNode(typeName);
    label.appendChild(labelText);
    newTypeCount += 1;
    chooseType(label);
}
function toAlbum(newAlbum){
    var albumName = newAlbum.value;
    if(albumName == ""){
        albumName = "新分类" + newAlbumCount;
    }
    newAlbum.setAttribute("type", "radio");
    newAlbum.setAttribute("class", "albumChooser");
    newAlbum.setAttribute("name", "albumChooser");
    newAlbum.removeAttribute("onkeydown");
    newAlbum.removeAttribute("onblur");
    newAlbum.setAttribute("id", "newAlbum" + newAlbumCount);
    newAlbum.setAttribute("value", albumName);
    var label = document.getElementsByClassName("labelNew")[0];
    label.classList.remove("labelNew");
    label.setAttribute("for", "newAlbum" + newAlbumCount);
    var labelText = document.createTextNode(albumName);
    label.appendChild(labelText);
    newAlbumCount += 1;
    chooseAlbum(label);
}
function showImg(fileElement){
    var image = document.getElementById("fileShower");
    var file = fileElement.files[0];
    if(!/image\/\w+/.test(file.type)){
        alert("文件必须为图片！");
        return false;
    }
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function(e){
        image.setAttribute("src", this.result);
    }
}