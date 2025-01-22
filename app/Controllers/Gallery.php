<?php

namespace App\Controllers;

class Gallery extends BaseController
{
	public function index(){
		//$data['title'] = 'Gallery';
		return view('pages/gallary');
	}
}
