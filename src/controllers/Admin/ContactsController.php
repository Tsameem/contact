<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}
	public function index()
	{
		return view('tsameem.contact.admin.contact_us');
	}
}
