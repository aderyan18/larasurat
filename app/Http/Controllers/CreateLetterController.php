<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateLetter;

class CreateLetterController extends Controller
{
    public function createletter()
    {
        return view('createletter.createletter');
    }
}
