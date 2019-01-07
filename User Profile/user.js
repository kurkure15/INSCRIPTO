var pro=angular.module("Profile",[]);
pro.controller("profController", function($scope){

})




var mode=document.getElementById("edit");
var pro=document.getElementById("editP");
var xyz=document.getElementById("profile");


window.onclick=function(event){
    if(event.target==pro){
    mode.style.display='none';
    xyz.style.display='block';
    pro.style.display='none';
    }
}