/**
 * Created by inksmallfrog on 11/22/15.
 */
function addEvent(element, type, callback){
    if(element.attachEvent){
        element.attachEvent("on" + type, callback);
    }
    else if(element.addEventListener){
        element.addEventListener(type, callback, false);
    }
    return callback;
}

function removeEvent(element, type, handler){
    if (element.detachEvent) {
        element.detachEvent("on" + type, function(){handler.call(elem)});
    }
    else if (element.removeEventListener) {
        element.removeEventListener(type, handler, false);
    }
}

function togglePassword(checkBox){
    if(checkBox.id == "showPwdLeft"){
        if(checkBox.checked){
            document.getElementsByName("passwordLeft")[0].setAttribute("type", "text");
        }
        else{
            document.getElementsByName("passwordLeft")[0].setAttribute("type", "password");
        }
    }
    else if(checkBox.id == "showPwdRight"){
        if(checkBox.checked){
            document.getElementsByName("passwordRight")[0].setAttribute("type", "text");
        }
        else{
            document.getElementsByName("passwordRight")[0].setAttribute("type", "password");
        }
    }
}

function goSignup(){
    var login = document.getElementsByClassName("login")[0];
    var signup = document.getElementsByClassName("signup")[0];
    login.classList.add("left");
    signup.classList.add("left");
}

function goLogin(){
    var login = document.getElementsByClassName("login")[0];
    var signup = document.getElementsByClassName("signup")[0];
    login.classList.remove("left");
    signup.classList.remove("left");
}

function goNextScreen(){
    var firstScreen = document.getElementsByClassName("firstScreen")[0];
    var authenticateBox = document.getElementsByClassName("authenticateBox")[0];
    var navigartorBox = document.getElementsByClassName("navigatorBox")[0];

    var secondScreen = document.getElementsByClassName("secondScreen")[0];

    firstScreen.classList.add("navigator");
    authenticateBox.classList.add("hide");
    navigartorBox.classList.remove("hide");

    secondScreen.classList.add("mainPage");
}

function checkLogin(){
    var user = document.getElementsByName("user")[0];
    var password = document.getElementsByName("password")[0];
    if(user.value == ""){
        showError(user, "用户名不能为空");
        return false;
    }
    if(password.value == ""){
        showError(password, "密码不能为空");
        return false;
    }
    return true;
}

function showError(node, text){
    var errorBoxName = node.name + "Error";
    var errorNode = document.getElementsByClassName(errorBoxName)[0];
    errorNode.innerHTML = text;
}

function changeInput(node, describe, emptable){
    if(!emptable && node.value == ""){
        showError(node, describe + "不能为空");
    }
    else{
        showError(node, "");
    }
}

var wheelFunction = function(obj, callback){
    var wheelType = "mousewheel"
    try{
        document.createEvent("MouseScrollEvents");
        wheelType = "DOMMouseScroll";
    }
    catch(e){}

    addEvent(obj, wheelType, function(event){
        if("wheelDelta" in event){
            var delta = event.wheelDelta;
            if(window.opera && opera.version() < 10){
                delta = -delta;
            }
            event.delta = Math.round(delta) / 120;
        }
        else if("detail" in event){
            event.wheelDelta = -event.detail * 40;
            event.delta = event.wheelDelta / 120;
        }
        callback.call(obj, event);
    })
}

wheelFunction(document, function(event){
    var firstScreen = document.getElementsByClassName("firstScreen")[0];
    var secondScreen = document.getElementsByClassName("secondScreen")[0];
    if(event.delta < 0 && !firstScreen.classList.contains("navigator")){
        firstScreen.classList.add("navigator");
        secondScreen.classList.add("mainPage");
    }
    else if(event.delta > 0 && window.pageYOffset == 0){
        firstScreen.classList.remove("navigator");
        secondScreen.classList.remove("mainPage");
    }
});

