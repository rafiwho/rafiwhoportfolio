<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|min:5|max:200',
            'message' => 'required|string|min:10|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $contactData = $request->only(['name', 'email', 'subject', 'message']);
        $contactData['submitted_at'] = now();
        $contactData['ip_address'] = $request->ip();

        try {
            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for your message! I will get back to you soon.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }
}
