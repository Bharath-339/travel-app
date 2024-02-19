<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetPages extends Controller
{
    public function getDeals()
    {
        return view('hotDeals',['page'=>'Hot Deals']);
    }

    public function getReviews()
    {
        return view('reviews', ['page' => 'Reviews']);
    }

    public function getContact()
    {
        return view('contact',['page' => 'Contact Us']);
    }
}
