<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class DashboardController extends BaseController {

	/**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct() {
		$this->middleware('auth');
	}

	public function index() 
	{
		return view('admin.index');
	}

	public function getUserItem()
	{
		return view('admin.item');
	}
}