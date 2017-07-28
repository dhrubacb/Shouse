@extends('project.Blade_code.project')

@section('main_content')
      

<div style="background-color: #eaeef3">
       <div class="container" style="background-color: #fff">
            <h2 style="margin-top: 50px; text-align: center; color: #333a45;"><b></b></h3>
            <h3 class="ban">
                     Project  Requests
            </h3>




  <ul>

        @foreach ($user as $users)
                 
              <li style="margin-left: 50px;background-color: #f8f3f3 max-width:100%">
                     <a class="hh" style="font-weight: bold;" href = "{{ route('project.Admin panel.request_description', ['title' => $users->title]) }}">{{ $users->title }}</a>
              </li>
                
        @endforeach
   
  </ul>

       
</div>

	 </div>

@endsection
