<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        $title = 'Welcome to laravel tutorial';
        $data = [
            'title' =>'Welcome to laravel tutorial'
        ];
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    function about(){
        $title = 'About us';
        return view('pages.about')->with('title',$title);
    }

    function services(){
        $data = [
            'title'=>'Services',
            'services' => ['Web development','App Development','Digital Marketing']
        ];
      
        return view('pages.services')->with($data);
    }
}