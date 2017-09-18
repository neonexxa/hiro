@extends('layouts.app')

@section('content')
	<div class="container-fluid">
        @include( 'break' , [ 't' => 5 ] )
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto green-text">
                    <h2 style="font-family: 'Indie Flower', cursive;">HIRO Rules</h2>
                </div>
            </div>
        </div>
        @include( 'break' , [ 't' => 3 ] )
    </div>
    <div class="default-color #2BBBAD darken-4 container rounded-top z-depth-5">
        @include( 'break' , [ 't' => 3 ] )
        <div class="container">
            <div class="row">
            	<div class="col-1"></div>
                <div class="col-5" style="font-family: 'Arvo', serif;', cursive;">
                	<h2 class="white-text text-center">Entry Requirements</h2>
                	@include( 'break' , [ 't' => 2 ] )
            		<ul class="white-text">
            			<li>Must be undergraduate students (Maximum 25 Years Old)</li>
						<li>Female.</li>
						<li>Any background are welcome !</li>
						<li>Have an awesome crazy idea. </li>
					</ul>
                </div>
                <div class="col-5" style="font-family: 'Arvo', serif;', cursive;">
					<h2 class="white-text text-center">Pitching</h2>
					@include( 'break' , [ 't' => 1 ] )
					<p class="text-justify white-text">It’s show time ! It will be in one day where you will compete with the rest of awesome teams to pitch your idea and showcase your cool prototype ! .There will be total of 18 teams all together and the teams will be divided into 3 groups, which consists of six teams each. The best two groups will participate in finals round.  Each team will be given 30 minutes, 20 minutes for the presentation and 10 minutes for Q&A session.</p>
					<p class="yellow-text">Simple as that !</p>
                </div>
                <div class="col-1"></div>
            </div>
            @include( 'break' , [ 't' => 3 ] )
        </div>
    </div>
    <div class="default-color-dark #00695c container rounded-bottom z-depth-5">
        @include( 'break' , [ 't' => 5 ] )
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto white-text">
                    <h2 style="font-family: 'Indie Flower', cursive;">Rule Book</h2>
                </div>
            </div>
        </div>
        @include( 'break' , [ 't' => 3 ] )
        <div class="container">
            <div class="row">
            	<div class="col-1"></div>
                <div class="col-5" style="font-family: 'Arvo', serif;', cursive;">
                    <h3 class="white-text text-center">Intellectual Property Rights</h3>
                    @include( 'break' , [ 't' => 1 ] )
					<p class="text-justify white-text">All submissions remain the intellectual property of the individuals or organizations that developed them.</p>
					<h3 class="white-text text-center">Protection of Intellectual Property</h3>
					@include( 'break' , [ 't' => 1 ] )
					<p class="text-justify white-text">By submitting an Entry or accepting any prize, you represent and warrant the following: you will not submit content that is copyrighted, protected by trade secret or otherwise subject to third party intellectual property rights or other proprietary rights, including privacy and publicity rights, unless you are the owner of such rights or have permission from their rightful owner to post the content; and the content submitted by you does not contain any viruses, Trojan horses, worms or other disabling devices or harmful code.</p>
                </div>
                <div class="col-5">
                    <h3 class="white-text text-center">Copyright</h3>
                    @include( 'break' , [ 't' => 1 ] )
					<p class="text-justify white-text">Participant represents and warrants that he or she is the sole author and copyright owner of the Submission, and that the Submission is an original work of the Participant, or if the Submission is a work based on an existing application, that the Participant has acquired sufficient rights to use and to authorize others; and that the Submission does not infringe upon any copyright or upon any other third party rights of which the Participant is aware, and that the Submission is free of malware.</p>
					<h3 class="white-text text-center">Eligibility</h3>
					@include( 'break' , [ 't' => 1 ] )
					<p class="text-justify white-text">HIRO organizers have the right at their sole discretion to determine whether an entrant is eligible for the Contest. HIRO may disqualify, at organizer's’ sole discretion,HIRO entries (including, without limitation, content submitted in connection therewith) that (a) are in violation of third party rights or law or regulation, (b) use inappropriate or explicit language or images, or display content that HIRO or Sponsors otherwise finds objectionable.</p>
                </div>
                <div class="col-1"></div>
            </div>
            @include( 'break' , [ 't' => 3 ] )
            <div class="row">
            	<div class="col-1"></div>
            	<div class="col">
            		<h3 class="white-text text-center">Winner Selection/Judging Criteria</h3>
            		@include( 'break' , [ 't' => 2 ] )
            		<p class="text-justify white-text">
						Winners will be judged based on the following criteria: <br>
						<ul>
							<li class="text-justify white-text">Quality and innovative nature of the idea / demo</li>
							<li class="text-justify white-text">Utility of the idea / demo</li>
							<li class="text-justify white-text">Compelling use of the Sponsors Technologies and Tools</li>
							<li class="text-justify white-text">The Contest winners will be selected by a panel of judges. By submitting any HIRO Entry, entrants release HIRO, Sponsors, their respective subsidiaries, affiliates, directors, officers, employees, representatives, agents, and advisors from any and all liability for any claims, costs, injuries, losses, or damages of any kind arising out of or in connection with the decisions of the Judges.</li>
							
						</ul>
					</p>
            	</div>
            	<div class="col-1"></div>
            </div>
        </div>
    </div>
    @include( 'break' , [ 't' => 3 ] )
@endsection