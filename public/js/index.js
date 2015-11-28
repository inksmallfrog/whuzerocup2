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

var starTop = new Array();
var starLeft = new Array();
var speed = new Array();
var isSecondScreen = false;

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

function goLogin(direction){
    if(direction == "right"){
        var login = document.getElementsByClassName("login")[0];
        var signup = document.getElementsByClassName("signup")[0];
        login.classList.remove("left");
        signup.classList.remove("left");
    }
    else if(direction == "left"){
        var login = document.getElementsByClassName("login")[0];
        var findPassword = document.getElementsByClassName("findPassword")[0];
        login.classList.remove("right");
        findPassword.classList.remove("right");
    }
}

function goFindPassword(){
    var login = document.getElementsByClassName("login")[0];
    var findPassword = document.getElementsByClassName("findPassword")[0];
    login.classList.add("right");
    findPassword.classList.add("right");
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

function checkSignup(){
    var emailLeft = document.getElementsByName("emailLeft")[0];
    var emailRight = document.getElementsByName("emailRight")[0];
    var passwordLeft = document.getElementsByName("passwordLeft")[0];
    var passwordRight = document.getElementsByName("passwordRight")[0];
    var sexLeft = document.getElementsByName("sexLeft");
    var sexRight = document.getElementsByName("sexRight");

    if(emailLeft.value == ""){
        showError(emailLeft, "邮箱用于找回密码，不能为空");
        return false;
    }
    if("/[a-zA-Z0-9]+[a-zA-Z0-9_]*@([a-zA-Z0-9]+.)+[a-zA-Z0-9]+/".match(emailLeft.value)){
        showError(emailLeft, "邮箱的格式似乎不太对哦");
        return false;
    }
    if(emailRight.value == ""){
        showError(emailRight, "邮箱用于找回密码，不能为空");
        return false;
    }
    if("/[a-zA-Z0-9]+[a-zA-Z0-9_]*@([a-zA-Z0-9]+.)+[a-zA-Z0-9]+/".match(emailRight.value)){
        showError(emailRight, "邮箱的格式似乎不太对哦");
        return false;
    }
    if(passwordLeft.value == ""){
        showError(passwordLeft, "密码不能为空");
        return false;
    }
    if(passwordRight.value == ""){
        showError(passwordRight, "密码不能为空");
        return false;
    }
    if(!sexLeft[0].checked && !sexLeft[1].checked){
        showError(sexLeft[0], "您……的性别");
        return false;
    }
    if(!sexRight[0].checked && !sexRight[1].checked){
        showError(sexRight[0], "您……的性别");
        return false;
    }
    return true;
}

function checkFindPassword(){
    var findPasswordUser = document.getElementsByName("findPasswordUser")[0];
    if(findPasswordUser == ""){
        showError(findPasswordUser, "您要找回谁的密码orz");
        return false;
    }
    return true;
}

function showError(node, text){
    var errorBoxName = node.name + "Error";
    var errorNode = document.getElementsByClassName(errorBoxName)[0];
    if(text != ""){
        errorNode.classList.add("show");
        errorNode.innerHTML = "<img class='errorIcon' src='./res/icon/error.png'>" + text;
    }
    else{
        errorNode.classList.remove("show");
    }
}

function changeInput(node, describe, emptable){
    if(!emptable && node.value == ""){
        showError(node, describe + "不能为空");
    }
    else{
        showError(node, "");
    }
}

function goSecondScreen(){
    isSecondScreen = true;
    var firstScreen = document.getElementsByClassName("firstScreen")[0];
    var stars = document.getElementsByClassName("flystar");
    for(var i = 0; i < stars.length; ++i){
        stars[i].style.display = "none";
    }
    var authenticateBoxs = document.getElementsByClassName("authenticateBox");
    var navigartorBox = document.getElementsByClassName("navigatorBox")[0];

    var secondScreen = document.getElementsByClassName("secondScreen")[0];
    var mainPage = document.getElementsByName("mainPage")[0];

    firstScreen.classList.add("navigator");
    for(var i = 0; i < authenticateBoxs.length; ++i){
        authenticateBoxs[i].classList.add("hide");
    }
    navigartorBox.classList.add("show");

    secondScreen.classList.add("mainPage");
    mainPage.setAttribute("src", "./page/product_home.php");
}

function goFirstScreen(){
    isSecondScreen = false;
    var firstScreen = document.getElementsByClassName("firstScreen")[0];
    var stars = document.getElementsByClassName("flystar");
    for(var i = 0; i < stars.length; ++i){
        stars[i].style.removeProperty("display");
    }
    var authenticateBoxs = document.getElementsByClassName("authenticateBox");
    var navigartorBox = document.getElementsByClassName("navigatorBox")[0];

    var secondScreen = document.getElementsByClassName("secondScreen")[0];

    firstScreen.classList.remove("navigator");
    for(var i = 0; i < authenticateBoxs.length; ++i){
        authenticateBoxs[i].classList.remove("hide");
    }
    navigartorBox.classList.remove("show");

    secondScreen.classList.remove("mainPage");
    starFly();
}

function starFly(){
    if(!isSecondScreen){
        setTimeout("starFly()", 40);
    }
    var stars = document.getElementsByClassName("flystar");
    for(var i = 0; i < stars.length; ++i){
        if(stars[i].classList.contains("fly")){
            if(parseFloat(stars[i].style.opacity) <= 0.0){
                stars[i].classList.remove("fly");
            }
            else{
                starTop[i] += speed[i];
                starLeft[i] -= speed[i];
                stars[i].style.top = starTop[i] + "px";
                stars[i].style.left = starLeft[i] + "px";
                stars[i].style.opacity = parseFloat(stars[i].style.opacity) - 0.003 * speed[i];
            }
        }
        else{
            if(Math.random() < 0.5){
                starTop[i] = -50;
                starLeft[i] = Math.random() * screen.width + 100;
            }
            else{
                starTop[i] = Math.random() * screen.height - 100;
                starLeft[i] = screen.width;
            }

            speed[i] = Math.floor(Math.random() * 5) + 3;
            stars[i].style.opacity = "1.0";
            stars[i].style.top = starTop[i] + "px";
            stars[i].style.left = starLeft[i] + "px";
            stars[i].classList.add("fly");
        }
    }
}

function goScreen(screen){
    mainPage.window.goScreen(screen);
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
    /*if(event.delta < 0 && !firstScreen.classList.contains("navigator")){
        firstScreen.classList.add("navigator");
        secondScreen.classList.add("mainPage");
    }*/
    if(event.delta > 0 && window.pageYOffset == 0 && isSecondScreen){
//        goFirstScreen();
    }
});

