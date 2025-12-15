<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CallRequest;
use Illuminate\Http\Request;

class CallRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'company' => 'nullable|string|max:255',
            'preferred_time' => 'nullable|string|max:255',
            'timezone' => 'nullable|string|max:255',
            'note' => 'nullable|string',
        ]);

        $callRequest = CallRequest::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'company' => $validated['company'] ?? null,
            'preferred_time' => $validated['preferred_time'] ?? null,
            'timezone' => $validated['timezone'] ?? null,
            'note' => $validated['note'] ?? null,
            'client_ip' => $request->ip(),
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! We will call you back soon.',
            'request_number' => $callRequest->request_number,
        ], 201);
    }
}
