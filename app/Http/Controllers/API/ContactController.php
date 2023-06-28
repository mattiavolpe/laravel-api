<?php

namespace App\Http\Controllers\API;

use App\Mail\NewContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newContact = new Contact();
        $newContact->fill($data);
        // $newContact->save();

        Mail::to(env("PERSONAL_MAIL"))->send(new NewContact($newContact));

        return response()->json([
            "success" => true,
        ]);
    }
}
