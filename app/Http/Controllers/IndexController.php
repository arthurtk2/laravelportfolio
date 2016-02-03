<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{

    public function index()
    {
        return view('pages.welcome');
    }

    public function about(){

    	$nome = 'Meu nome';
    	$email = 'meucontato@contato.com.br';

    	return view('pages.about',compact('nome','email'));
    }

    public function projects(){

    	return view('pages.projects');

    }

    public function contact(){

    	return view('pages.contact');
    }
}