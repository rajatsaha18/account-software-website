<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.home.home');
    }
    public function userMessages()
    {
        $contacts = Contact::all();
        return view('admin.userMessage.user-message',compact('contacts'));
    }
    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->back()->with('message', 'Contact Delete Successfully');
    }
}
