<html>
        <?php
        include('session.php');
        ?>
    <head>
             <link href="Inscripto.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src ="angular.min.js"></script>
            <script src ="jquery.js"></script>
            <script src="NoteCtrl.js"></script>
            <script src="angular-markdown-editable.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Chicle|Share+Tech" rel="stylesheet">
          
    </head>
    
        
         <p class="mine" style="position:absolute; top:30px; right:-820px;"><?php echo $login_session; ?></p>

    <button class="glyphicon glyphicon-user" onclick='location.href="User.php"'style="position:absolute; top:30px;"></button>

    
      <h1 class="txt" ><i class="material-icons" style="font-size:30px; color:rgb(3, 3, 3)">note</i> INSCRIPTO</h1>
    
<body style="background-color:rgb(238, 211, 194)" ng-app="Note" ng-controller="NoteController">
<!--input type="text" ng-model='createdOn'  placeholder="Filter Notes" /-->
    <span class="add">
       <i type="submit" id="tex" class="material-icons" style="font-size:30px; color:white; cursor: pointer" ng-click="addnote(notetitle)">note_add</i>
      </span>
<input type="text" class="headT" placeholder="Enter Title">
    <div  class="note" ng-repeat="note in notes| orderBy:'createdOn':true track by $index">
        <span class="date">{{note.createdOn |date:"EEEE dd MMMM, yyyy 'at' h:mma"}} </span>
        <span class="head">{{note.title}}</span>
        <span class="icons">
            <i class="glyphicon glyphicon-check" ng-if="note.edit== false"></i>
            <i class="glyphicon glyphicon-pencil" ng-if="note.edit == true"></i>
            <i class="glyphicon glyphicon-trash" ng-click="delete(notes.length - $index - 1)"></i>
        </span>
            
            <div class="markdown-body" ng-model="note.text" 
            ng-change="update(notes.length - $index - 1,note.text)"
             ng-focus="note.edit = true" 
             ng-blur="note.edit = false" 
             markdown-editable contenteditable="true">{{ note.text }}</div>
          </div>


          
</body>
</html>