var ins=angular.module("inscripto", []);
ins.controller("logController", function($scope,$window, $http){
     $scope.username="";
     $scope.password="";
     $scope.firstname="";
     $scope.lastname=""
     $scope.togglePassword=function(){
         $scope.showPassword=!$scope.showPassword;
     }

     $scope.insertData = function(){  
        $http.post(  
            'http://localhost/Login/Insert.php',  
             {'username':$scope.username, 'password':$scope.password,
                  'firstname':$scope.firstname, 'lastname':$scope.lastname}  
        ).success(function(data){  
             alert(data);  
        });

       }

       $scope.logData = function(){  
        $http.post(  
            'http://localhost/Login/log.php',
             {'username':$scope.username, 'password':$scope.password,
                  'firstname':$scope.firstname, 'lastname':$scope.lastname}  
        ).success(function(data){  
            $window.confirm(data);  
        });

       }
         
    
});













var modal=document.getElementById('abc');
    var sign=document.getElementById('sgn');
    var signin=document.getElementById('xyz');
    var lgin=document.getElementById('lgn');

window.onclick=function(event){
    if(event.target==sign){
    modal.style.display='none';
    }
else if(event.target==lgin){
    signin.style.display='none';
}
}