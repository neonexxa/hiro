@extends('layouts.app')

@section('content')

<div class="container-fluid">
	@include( 'break' , [ 't' => 5 ] )
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto green-text">
                <h2 style="font-family: 'Indie Flower', cursive;">(FAQ)</h2>
            </div>
        </div>
    </div>
</div>
@include( 'break' , [ 't' => 3 ] )
<div class="container">
	<div class="card">
		<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
			@foreach($faqs as $key => $faq)
		    <!-- Accordion card -->
		    <div class="card">
		        <!-- Card header -->
		        <div class="card-header" role="tab" id="heading{{$key}}">
		            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
		                <h5 class="mb-0">
		                    {{$faq}}<i class="fa fa-angle-down rotate-icon"></i>
		                </h5>
		            </a>
		        </div>
		        <!-- Card body -->
		        <div id="collapse{{$key}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$key}}">
		            <div class="card-body">
		                {{$faa[$key]}}
		            </div>
		        </div>
		    </div>
		    <!-- Accordion card -->
			@endforeach
		</div>
	</div>
</div>
@include( 'break' , [ 't' => 3 ] )

@endsection