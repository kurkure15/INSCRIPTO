(function(){
var note=angular.module("Note",['angular-markdown-editable', 'ngAnimate']);
note.controller("NoteController", function($scope){

	$scope.insertData = function(){  
		alert("hi");
		$http.post(  
			 "Iconnect.php",  
			 
			 {'id':$scope.index, 'notes':$scope.note}  
		).success(function(data){  
			 alert(data);  
			 $scope.index = null;  
			 $scope.note = null;  
		});  
   } 
	$scope.notes=[{
	     createdOn: Date.now(),
		 edit:false,
		 text:" ",
		 title:"HEllo "
		 
		 
	}];
	
	$scope.addnote= function(){
		$scope.newNote={};
		$scope.newNote.createdOn=Date.now();
		$scope.newNote.text=" ";
		$scope.newNote.edit=true;
		$scope.notes.push($scope.newNote);
		$scope.newNote={};
		$scope.newNote.title=" Hello";
		
		
	};
	
	$scope.delete=function(i){
		var r=confirm("Delete note?");
		if(r==true)
			$scope.notes.splice(i,1);
	};

	$scope.update=function(i, note){
		$scope.notes[i].text=note;
		$scope.notes[i].edit=false;
		$scope.notes[i].title=note;
	};
});
 

})();