<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    public  function index() {
        return  view('eventDetails');
    }
}
