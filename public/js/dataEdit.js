/**
 * Created by inksmallfrog on 11/27/15.
 */
var currentType;
var newTypeCount = 0;
function initType(){
    currentType = document.getElementsByClassName("typeChooserDiv")[0];
    currentType.classList.add("choose");
}
function chooseType(type){
    currentType.classList.remove("choose");
    currentType = type;
    currentType.classList.add("choose");
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