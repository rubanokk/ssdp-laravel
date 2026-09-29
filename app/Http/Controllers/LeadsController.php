<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use App\Mail\LeadEmail;
use Illuminate\Support\Facades\Mail;

class LeadsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required',
        ]);

        $data = $request->all();
        $lead = Lead::create($data);

        Mail::to('kashilya@yandex.ru')->send(new LeadEmail($lead->name, $lead->email, $lead->message));
        
        return [];
    }
}
