@extends('layouts.app')

@section('content')

<div class="container-fluid">
    @include( 'break' , [ 't' => 5 ] )
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto green-text">
                <h2 style="font-family: 'Indie Flower', cursive;">HIRO Themes 2017</h2>
            </div>
        </div>
    </div>
    @include( 'break' , [ 't' => 3 ] )
    <div class="container">
    	<div class="row">
    		@foreach($themes as $key => $theme)
    		<div class="col-3">
    			<!--Card-->
				<div class="card">
			    <!--Card image-->
				    <div class="view overlay hm-white-slight">
				        <img src="{{$imagetheme[$key] }}" class="img-fluid" alt="">
				        <a href="#">
				            <div class="mask"></div>
				        </a>
				    </div>
				    <!--Card content-->
				    <div class="card-body">
				        <!--Title-->
				        <h4 class="card-title">{{$theme}}</h4>
				        <!--Text-->
				        <p class="card-text">{{$description[$key]}}</p>
				        <a href="#" class="btn btn-primary">Button</a>
				    </div>

				</div>
				<!--/.Card-->
    		</div>
    		@endforeach
    	</div>
    </div>
    @include( 'break' , [ 't' => 3 ] )
</div>

@endsection