$(document).ready(function () {
var readerview=false;
$("#btn").click(function () {
if(readerview===false){
    $(".header,.footer,.left,.right").hide();
    $(".main").height("100%");
    $(".main").width("100%");
    readerview=true;
}
else{
    $(".header,.left,.right,.footer").show();
    $(".main").height("90%");
    $(".main").width("80%");
    readerview=false;
}
})
})

/*document.getElementById('btn').onclick = function () {
    readerView()
};
var readerview = false;

function readerView() {
    if (readerview === false) {
        document.getElementsByClassName("header")[0].style.display = "none";
        document.getElementsByClassName("left")[0].style.display = "none";
        document.getElementsByClassName("right")[0].style.display = "none";
        document.getElementsByClassName("footer")[0].style.display = "none";
        document.getElementsByClassName("main")[0].style.width = "100%";
        document.getElementsByClassName("main")[0].style.height = "100%";
        readerview=true;
    } else {
        document.getElementsByClassName("header")[0].style.display = "block";
        document.getElementsByClassName("left")[0].style.display = "block";
        document.getElementsByClassName("right")[0].style.display = "block";
        document.getElementsByClassName("footer")[0].style.display = "block";
        document.getElementsByClassName("main")[0].style.width = "80%";
        document.getElementsByClassName("main")[0].style.height = "90%";
        document.getElementsByClassName("left")[0].style.height = "90%";
        document.getElementsByClassName("right")[0].style.height = "90%";
        readerview = false;
    }
}*/
