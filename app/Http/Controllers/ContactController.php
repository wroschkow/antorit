<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('contactForm');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($request->request->get('subject') === null) {
            Contact::create($request->all());
        }

        return redirect()->back()
            ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
