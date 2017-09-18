@extends('layouts.app')

@section('content')

<div class="container-fluid">
	@include( 'break' , [ 't' => 5 ] )
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto green-text">
                <h2 style="font-family: 'Indie Flower', cursive;">Prizes</h2>
            </div>
        </div>
    </div>
</div>

@endsection