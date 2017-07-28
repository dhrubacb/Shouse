@extends('project.Blade_code.project')

@section('main_content')
	<script src="js/isotope.pkgd.js"></script>
 
<script>
	
</script>
			
	<div style="background-color: #eaeef3">
			<div class="container" style="background-color: #fff">
		            <h2 style="margin-top: 70px; margin-bottom: 70px;text-align: center; color: #333a45;"><b>Running Projects</b></h2>
				<div class="row">
        <div class="col-md-3">
        <h2>Categories</h2>
<div class="button-group filter-button-group">
  <button class="button is-checked" data-filter="*">All Categories</button>
  <button class="button" data-filter=".web">Web Application</button>
   <button class="button" data-filter=".desktop">Desktop Application</button>
  <button class="button" data-filter=".mob">Mobile Application</button>
</div>
</div>
<div class="col-md-8">
<div class="grid">

 @foreach($users10 as $user)

            <div class="grid-item {{ $user->project_types}}">
            <a class="proj_tit" href = "{{ route('description',['id' => $user->id ,'types' => $user->project_types , 'table' => 'running']) }}"><h3 style="text-align: center">{{ $user->project_title }}</h3></a>
            <p class="proj_des"><h5 style="margin:5px; text-align: center;"> {{ $user->description}} </h5>
            </div>
 
           @endforeach

</div>
</div>
<script type="text/javascript">
  // external js: isotope.pkgd.js

var $grid = $('.grid').isotope({
  itemSelector: '.grid-item',
  stagger: 30
});

$('.filter-button-group').on( 'click', '.button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

</script>
 
@endsection	

@section('main_content_')
@endsection 