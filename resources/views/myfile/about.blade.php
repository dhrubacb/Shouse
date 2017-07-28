 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   
<?php
    
    // "{{ route('home', ['bb' => $user->id ]) }}"


      $users = DB::table('running_projects')->get();

       foreach($users as $user){

        ?> <a href = "home/{{$user->id}}">{{ $user->project_title}} </a><?php

       } 
?>

</body>
</html>