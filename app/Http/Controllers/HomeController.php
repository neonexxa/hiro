<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function rule()
    {
        return view('rule');
    }
    public function theme()
    {
        $themes = ['IoT','Machine Learning','Commercial Web','BoTs'];
        $description = ['IOT','ML','ML','bot'];
        return view('theme',compact('themes','description'));
    }
    public function prize()
    {
        return view('prize');
    }
    public function faq()
    {
        $faqs = [
            'Why focus on women only ?',
            'Is the event is free to attend ?',
            'Do I need to know how to code?',
            'Do you provide classes ? ',
            'How do I register ?',
            'When is the closing date for registrations?',
            'Where is the event ?',
            'What should I bring ?'
            ];

        $faa = [
                "It’s time to close the gender gap ! Generally, we can see the technology world are being dominated by men. However , we can change this perceptions ! We can be the role model to female out there to get involved and put more love to technology ! We can dominate too !",
                "Unfortunately, it’s not (sorry). However, you only need to pay RM50 per team and that’s it !", 
                "Students of all skills levels are encouraged to attend, even if you’ve never written a line of code. Don’t worry ! we’re prepared to teach you everything you need to learn while also supporting the most experience hackers.",
                "Of course we do sweetheart ! Keep updated with our date for basic beginners class !",
                "Just go to the link to register your team !",
                "4th November 2017",
                "HIRO 2017 will be held at : Centre for Advanced and Professional Education(CAPE), Universiti Teknologi PETRONAS, Level 16, Menara 2, Menara Kembar Bank Rakyat, 50470 Kuala Lumpur.",
                "You must bring a valid student or government issued ID card for admission. Bring your laptop and charging cables and any other specific materials you’ll need for your prototype showcase. You can prepare few slides presentations that is simple and awesome !"
            ];
        return view('faq',compact('faqs','faa'));
    }
}
