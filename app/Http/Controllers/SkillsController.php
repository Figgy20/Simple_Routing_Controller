<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function display(){
        echo '<section id="skills" class="container gray-panel">
        <h2>Skills</h2>
        <div class="skills">
            <div class="skill">
                <h3>HTML & CSS</h3>
                <p>Experienced in building responsive web pages using HTML5 and CSS3.</p>
            </div>
            <div class="skill">
                <h3>JavaScript</h3>
                <p>Proficient in JavaScript ES6+ for dynamic and interactive web experiences.</p>
            </div>
            <div class="skill">
                <h3>React</h3>
                <p>Skilled in building single-page applications using React.</p>
            </div>
            <div class="skill">
                <h3>Node.js</h3>
                <p>Experienced in backend development with Node.js and Express.</p>
            </div>
        </div>
    </section>';

        return view('welcome', []);
    }
}
