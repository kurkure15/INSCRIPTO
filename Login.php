
<!DOCTYPE html>
<html ng-app="inscripto">
<head>
    
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Login.css">
    <link rel="stylesheet" type="text/css" href="signup.css">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jua|Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="login.js"></script>

    
    

<body ng-controller="logController">
    <div class="txt">
       
        <span class="head3">INSCRIPTO</span>
    

    </div>
    <span class="hello">HI,</span>
        <span class="name">{{username}}</span>
    <!--/span-->
   
    <input type="button" id='lgn' class="btnA" value="LOG IN" onclick="document.getElementById('abc').style.display='block'"></button>
    <input type="button" id='sgn' class="btnB" value="CREATE AN A/C" onclick="document.getElementById('xyz').style.display='block'"></button>


    <div  id="abc" class="butt">
        
        <div ng-class"btnC" >
           
            <span onclick="document.getElementById('abc').style.display='none'" class="close" title="CLOSE" >&times</span>
        </div>
        <form action="log.php" method="post" class="contain animate">
        <h3>USERNAME</h3>
        <input type="text" name="username" ng-model="usrname" ng-focus=' ' placeholder="Enter Username" required>
        <span class="shw"  style="position: relative; top:78px; left:0px; cursor: pointer;" ng-click="togglePassword()">{{ showPassword ? 'Hide' : 'Show' }}</span>
        <h3>PASSWORD</h3>
        <input ng-attr-type="{{ showPassword ? 'text' : 'password' }}" name="password" placeholder="Enter Username" ng-model="pasword" required>

        <input type="submit" name="login" class="btn" ng-click="logData()" value="LOGIN" >
        
        
    <a href="#" style="color:beige">DON'T REMEMBER PASSWORD?</a> <br>
    <a href="#" style="color:beige">DON'T HAVE AN ACCOUNT?</a>
    </form>
</div>
    
    

    <div id="xyz" class="sign">
        <div class"btnC">
            <span onclick="document.getElementById('xyz').style.display='none'" class="close" title="CLOSE" >&times</span>
        </div>
        <form >
            
        <h3>NAME</h3>
        <input type="text" ng-model="firstname" placeholder="Enter your FirstName" maxlength="10" required /> 
        <input type="text" ng-model="lastname" placeholder="Enter your LastName"  maxlength="10" required />
        
        
        
        <h3>USERNAME</h3>
        <input type="text" ng-model="username" placeholder="Enter Username" maxlength="10"required>
        <span class="shw"  style="position: relative; top:50px; left:190px; cursor: pointer;" ng-click="togglePassword()">{{ showPassword ? 'Hide' : 'Show' }}</span>
        <h3>PASSWORD</h3>
        <input ng-attr-type="{{ showPassword ? 'text' : 'password' }}" placeholder="Enter password" ng-model="password" required>


        <h3>GENDER</h3>
        <select class="gen">
            <option class="op">MALE</option>
            <option class="op">FEMALE</option>
            <option class="op">RATHER NOT SAY..</option>
        </select>
        <input type="submit" class="btn" ng-click="insertData()" value="CREATE" >
        
</form>
</div>
<script src="login.js"></script>
</body>
</head>
</html>