<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index($page='home')
	{
		
		return view("pages/{$page}");
	}

	public function about()
	{
		return view('pages/about');
	}
	public function contact()
	{
		return view('pages/contact');
	}
	//--------------------------------------------------------------------

}
