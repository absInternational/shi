<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Facades\Log;

class OrderFormController extends Controller
{
    public function index()
    {
        return view('frontend.pages.orderForm');
    }

    // public function verifyEmail(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //     ]);

    //     $email = $request->input('email');
    //     $verificationCode = $this->generateVerificationCode();
    //     $this->sendVerificationCodeByEmail($email, $verificationCode);

    //     return view('frontend.pages.orderForm', compact('data', 'ip_address', 'userid', 'verificationCode'));
    // }

    // public function getOrderDetails($id, $userid, Request $request)
    public function getOrderDetails(Request $request)
    {
        $verificationCode = $this->generateVerificationCode();

        $this->sendVerificationCodeByEmail($request->input('email'), $verificationCode);

        session(['order_id' => $request->order_id]);
        session(['email' => $request->email]);
        // $response = Http::get("https://washington.shawntransport.com/api/email_order_api/{$id}/{$email}");

        // if ($response->successful()) {
        //     $responseData = $response->json();
        //     $data = $responseData['data'];
        //     $ip_address = $responseData['ip'];

        //     return view('partials.order_detail', compact('data', 'ip_address'));
        // } else {
        //     $errorMessage = $response->json()['error'] ?? 'Failed to fetch data from API';
        //     $statusCode = $response->status();

        //     return response($errorMessage, $statusCode);
        // }
    }

    private function generateVerificationCode()
    {
        $verificationCode = mt_rand(100000, 999999);
        session(['verification_code' => $verificationCode]);
        return $verificationCode;
    }

    private function sendVerificationCodeByEmail($email, $verificationCode)
    {
        Mail::to('abst99856@gmail.com')->send(new VerificationCodeMail($verificationCode));
    }

    public function verify(Request $request)
    {
        $submittedCode = $request->input('code');
        $storedCode = $request->session()->get('verification_code');
        $id = $request->session()->get('order_id');
        $email = $request->session()->get('email');

        if ($submittedCode == $storedCode) {
            $response = Http::get("https://washington.shawntransport.com/api/email_order_api/{$id}/{$email}");

            $request->session()->forget('verification_code');
            $request->session()->forget('order_id');
            $request->session()->forget('email');

            if ($response->successful()) {
                $responseData = $response->json();
                $data = $responseData['data'];
                $ip_address = $responseData['ip'];

                return view('partials.order_detail', compact('data', 'ip_address'));
            } else {
                $errorMessage = $response->json()['error'] ?? 'Failed to fetch data from API';
                $statusCode = $response->status();

                return response($errorMessage, $statusCode);
            }
        } else {
            return response('Invalid verification code', 422);
        }
    }

    public function store(Request $request)
    {
        try {
            $requestData = $request->all();

            $response = Http::post('https://washington.shawntransport.com/api/email_order_api/submit', $requestData);

            Log::info('API Response: ' . $response->body());

            if ($response->successful()) {
                $responseData = $response->json();
                $data = $responseData['data'];
                $ip = $responseData['ip'];
                return view('partials.order_detail2', compact('data', 'ip'));
            } else {
                $errorResponse = $response->json();
                return response()->json(['error' => $errorResponse], $response->status());
            }
        } catch (\Exception $e) {
            Log::error('API Request Error: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while processing your request'], 500);
        }
    }

    public function storeCard(Request $request)
    {
        try {
            $requestData = $request->all();

            $response = Http::post('https://washington.shawntransport.com/api/email_orderCard_api/submit', $requestData);

            Log::info('API Response: ' . $response->body());

            if ($response->successful()) {
                $responseData = $response->json();
                return $responseData;
            } else {
                $errorResponse = $response->json();
                return response()->json(['error' => $errorResponse], $response->status());
            }
        } catch (\Exception $e) {
            Log::error('API Request Error: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while processing your request'], 500);
        }
    }
}
