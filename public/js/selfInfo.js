/**
 * Created by inksmallfrog on 11/26/15.
 */
var currentFormName = "individualInfo";
function initSelfInfo(){
    document.getElementsByClassName(currentFormName)[0].style.display = "block";
    document.getElementById(currentFormName + "Option").classList.add("active");
}

function goForm(name){
    if(name == currentFormName){
        return;
    }
    window.scrollTo(0, 0);
    var currentForm = document.getElementsByClassName(currentFormName)[0];
    var toForm = document.getElementsByClassName(name)[0];
    toForm.style.display = "block";
    setTimeout(function(){toForm.classList.add("up")}, 50);
    currentForm.classList.remove("up");
    setTimeout(function(){currentForm.style.display = "none"}, 1000);
    document.getElementById(currentFormName + "Option").classList.remove("active");
    currentFormName = name;
    document.getElementById(currentFormName + "Option").classList.add("active");
}

function addMemorialDayItem(){
    var list = document.getElementsByClassName("memorialDayList")[0];
    var button = document.getElementById("addMemorialDay");
    list.removeChild(button);

    var item = document.createElement("li");
    var timeLabel = document.createElement("p");
    timeLabel.setAttribute("class", "label");
    var text = document.createTextNode("时间:");
    timeLabel.appendChild(text);
    var time = document.createElement("input");
    time.setAttribute("type", "date");

    var contentLabel = document.createElement("p");
    contentLabel.setAttribute("class", "label");
    var text = document.createTextNode("内容:");
    contentLabel.appendChild(text);
    var content = document.createElement("input");
    content.setAttribute("type", "text");

    var image = document.createElement("img");
    image.setAttribute("src", "../res/icon/delete.png");

    item.appendChild(timeLabel);
    item.appendChild(time);
    item.appendChild(contentLabel);
    item.appendChild(content);
    item.appendChild(image);

    list.appendChild(item);
    list.appendChild(button);
}

function togglePasswordShow(check){
    if(check){
        document.getElementsByName("newPassword")[0].setAttribute("type", "text");
    }
    else{
        document.getElementsByName("newPassword")[0].setAttribute("type", "password");
    }
}

function showHeadImg(fileElement){
    var image = document.getElementById("headImgShower");
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