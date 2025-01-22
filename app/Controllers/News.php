<?php

namespace App\Controllers;

class News extends BaseController
{
	public function index(){
		// $data['title'] = 'News & Media';
		return view('pages/news');
	}
}
