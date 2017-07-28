@extends('project.Blade_code.project')

@section('main_content')
      
    

<div style="background-color: #eaeef3">
       <div class="container" style="background-color: #fff">
            <h2 style="margin-top: 50px; text-align: center; color: #333a45;"><b>     Complete Projects</b></h3>
            <h3 class="ban">
                     Web Applications
            </h3>




  <ul>

        @foreach($users1 as $user)
                 
              <li style="margin-left: 50px;background-color: #f8f3f3 max-width:100%">
                     <a class="hh" style="font-weight: bold;" href = "{{ route('description',['id' => $user->id ,'types' => $user->project_types , 'table' => 'running']) }}">{{ $user->project_title }}</a>
              </li>
                
        @endforeach
   
 
  </ul>

    <h3   class="ban">
			    Mobile Applications
	  </h3>

	<ul>

       @foreach($users2 as $user){
                  
             <li style="margin-left: 50px;background-color: #f8f3f3 max-width:100%">
                <a class="hh" style="font-weight: bold;" href = "{{ route('description',['id' => $user->id ,'types' => $user->project_types , 'table' => 'running']) }}">{{ $user->project_title }}</a>
             </li>
               }

       @endforeach

  </ul>

          <h3 class="ban">
          			Desktop Applications
          </h3>


  <ul>

        @foreach($users3 as $user)

            <li style="margin-left: 50px;background-color: #f8f3f3 max-width:100%">
                <a class="hh" style="font-weight: bold;" href = "{{ route('description',['id' => $user->id ,'types' => $user->project_types , 'table' => 'running']) }}">{{ $user->project_title }}</a>
            </li>

        @endforeach

	</ul>

</div>

	  </div>

@endsection
