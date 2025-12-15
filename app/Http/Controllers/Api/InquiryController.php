<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InquiryController extends Controller
{
    /**
     * Submit a message inquiry
     */
    public function submitMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $inquiry = Inquiry::create([
                'type' => 'message',
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company' => $request->company,
                'subject' => $request->subject ?? 'General Inquiry',
                'message' => $request->message,
                'status' => 'new',
                'priority' => 'normal',
                'source' => 'website',
                'client_ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'referrer' => $request->header('referer'),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We will get back to you soon.',
                'inquiry_number' => $inquiry->inquiry_number,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while submitting your inquiry. Please try again.',
            ], 500);
        }
    }

    /**
     * Submit a callback request (phone inquiry)
     */
    public function submitCallback(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'preferred_call_time' => 'nullable|date',
            'timezone' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $inquiry = Inquiry::create([
                'type' => 'call',
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company' => $request->company,
                'subject' => 'Callback Request',
                'message' => $request->message,
                'preferred_call_time' => $request->preferred_call_time,
                'timezone' => $request->timezone ?? date_default_timezone_get(),
                'status' => 'new',
                'priority' => 'high', // Callback requests are high priority
                'source' => 'website',
                'client_ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'referrer' => $request->header('referer'),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you! We will call you back at your preferred time.',
                'inquiry_number' => $inquiry->inquiry_number,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while submitting your request. Please try again.',
            ], 500);
        }
    }
}
