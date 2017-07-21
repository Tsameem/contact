<?php

namespace Tsameem\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactsController extends Controller
{
	public function index()
	{
		return view('tsameem.contact.client.contact-us');
	}
	public function store(ContactRequest $request)
	{
		Contact::create([
			'name'	=> $request->name,
			'email'	=> $request->email,
			'text'	=> $request->text,
		]);
	}
}
