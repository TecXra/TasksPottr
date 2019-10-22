<?php

namespace App\Http\Controllers;

class TasksPottrController extends Controller {
	public function index() {
		return view('pages.homepage');
	}
	public function createProject() {
		return view('pages.create-project');
	}

}
