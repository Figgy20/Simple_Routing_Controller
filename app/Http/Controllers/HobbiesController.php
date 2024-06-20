<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function display(){
        echo '<ul>
            <li><strong>Reading:</strong> Exploring different worlds and ideas through books.</li>
            <li><strong>Cooking:</strong> Creating delicious meals and experimenting with recipes.</li>
            <li><strong>Hiking:</strong> Enjoying nature and staying fit through scenic trails.</li>
            <li><strong>Photography:</strong> Capturing moments and creating visual stories.</li>
        </ul>';

        return view('welcome', []);
    }
}
