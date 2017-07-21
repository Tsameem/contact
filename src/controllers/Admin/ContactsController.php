<?php

namespace Tsameem\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
	public function index()
	{
		return view('tsameem.contact.admin.contact-us');
	}
}
