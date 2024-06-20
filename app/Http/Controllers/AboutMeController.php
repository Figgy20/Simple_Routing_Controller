<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function display(){
        echo '<section id="about" class="container">
        <h2>About Me</h2>
        <p>Hello! Im Keagan Swanepoel, I am an aspiring developer aiming to improve my skills and further my career even further. My goals are to become a full stack developer but I prefer to work in the backend.</p>
    </section>';

    return view('welcome', []);
    }
}
