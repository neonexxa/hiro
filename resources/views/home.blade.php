@extends('layouts.app')

@section('content')
    <div class="view intro hm-purple-light z-depth-2">
        <div class="full-bg-img flex-center">
            <div class="container text-center white-text wow fadeInUp">
                
                <div class="row justify-content-md-center">
                    <div class="col-2"></div>
                    <div class="col-8">
                        @include('logo')
                    </div>
                    <div class="col-2"></div>
                </div>
                
                <h2>Malaysian Female Hackathon 2017</h2>
                {{-- <h5>It will always stay visible on the top, even when you scroll down</h5>
                <p>Navbar's background will switch from transparent to solid color while scrolling down</p>
                <br>
                <p>Full page intro with background image will be always displayed in full screen mode, regardless of device </p> --}}
            </div>
        </div>
    </div>
    @include( 'break' , [ 't' => 5 ] )
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto purple-text">
                <h2>Why You SHould Join Us</h2>
            </div>
        </div>
        @include( 'break' , [ 't' => 3 ] )
        <div class="row">
            <div class="col">
                <ul>
                    <li class="text-justify">Provide opportunities for you to build entrepreneurs skills that turn your idea into innovative and sustainable businesses.</li>
                    <li class="text-justify">You can talk about tech as much as you want with no boundaries</li>
                    <li class="text-justify">Your idea will be acceptable in this community even how crazy it sounds !</li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li class="text-justify">Networking ! Get to know people with different backgrounds</li>
                    <li class="text-justify">You will learn new skills, technology and build more neural network in your brain (obviously)</li>
                    <li class="text-justify">Your prototype can be commercially viable products in local and global market.</li>
                    <li class="text-justify">You can sharpen your pitching skills ! Here is the place to get out from your comfy box !</li>
                </ul>            
            </div>
        </div>
        @include( 'break' , [ 't' => 5 ] )
        
    </div>
    <div class="#4a148c purple darken-4">
        @include( 'break' , [ 't' => 5 ] )
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto white-text">
                    <h2 style="font-family: 'Indie Flower', cursive;">What is HIRO ?</h2>
                </div>
            </div>
        </div>
        @include( 'break' , [ 't' => 3 ] )
        <div class="container">
            <div class="row">
                <div class="col text-justify" style="font-family: 'Arvo', serif;', cursive;">
                    <p class="white-text" style="padding:0 150px">
                        HIRO (not “Hiro” character in Baymax movie) stands for “Her Idea Reach Out”. It is a concept of hackathon where you will be generating ideas, developing prototype and finally pitch your amazing ideas and compete among the best!
                    </p>
                    <p class="white-text" style="padding:0 150px">
                        Unlike any other hackathons you don’t have to build the prototype in 72 hours to get started. You will be place into teams of 3-5 and your ideas will come from those teams. You will enjoy awesome food, having quality time in getting to know other women doing amazing things with technology, and work together to bring significant impact for themselves and the society that they living in !
                    </p>
                    <p class="white-text" style="padding:0 150px">
                        Whether your background is business, developer, designer, it doesn’t matter ! We believe best ideas or innovation comes from different background and talents, and we create a community where these people can come together and discover brilliant ideas that can be developed into commercially viable products able to compete in the local and global market 
                    </p>
                </div>
                <div class="col-md-auto">
                    <img src="{{ asset('img/ezgif.com-apng-maker.png') }}" class="img-fluid" alt="Responsive image">    
                </div>
            </div>
            @include( 'break' , [ 't' => 3 ] )
        </div>
    </div>
    <div class="#6a1b9a purple darken-3 z-depth-3">
        @include( 'break' , [ 't' => 5 ] )
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto white-text">
                    <h2 style="font-family: 'Indie Flower', cursive;">Who should participate ? </h2>
                </div>
            </div>
        </div>
        @include( 'break' , [ 't' => 3 ] )
        <div class="container">
            <div class="row">
                <div class="col-7 text-center">
                    <img src="{{ asset('img/businesswomenvector.png') }}" class="img-thumbnail z-depth-3" alt="Responsive image">    
                </div>
                <div class="col-5" style="font-family: 'Arvo', serif;', cursive;">
                    @include( 'break' , [ 't' => 3 ] )
                    <ul class="white-text">
                        <li>Woman</li>
                        <li>Female Students</li>
                        <li>High Enthusiast Female</li>
                        <li>Techo Girl</li>
                        <li>Creative person with many ideas</li>
                        <li>Undergraduate business minded woman</li>
                    </ul>
                </div>
            </div>
            @include( 'break' , [ 't' => 3 ] )
        </div>
    </div>
    @include( 'break' , [ 't' => 5 ] )
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto purple-text">
                <h2>How To Participate .. </h2>
            </div>
        </div>
        @include( 'break' , [ 't' => 3 ] )
        <div class="row">
            <div class="col">
                <ul>
                    <li class="text-justify">Provide opportunities for you to build entrepreneurs skills that turn your idea into innovative and sustainable businesses.</li>
                    <li class="text-justify">You can talk about tech as much as you want with no boundaries</li>
                    <li class="text-justify">Your idea will be acceptable in this community even how crazy it sounds !</li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li class="text-justify">Networking ! Get to know people with different backgrounds</li>
                    <li class="text-justify">You will learn new skills, technology and build more neural network in your brain (obviously)</li>
                    <li class="text-justify">Your prototype can be commercially viable products in local and global market.</li>
                    <li class="text-justify">You can sharpen your pitching skills ! Here is the place to get out from your comfy box !</li>
                </ul>            
            </div>
        </div>
        @include( 'break' , [ 't' => 5 ] )
        
    </div>

@endsection
