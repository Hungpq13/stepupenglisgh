<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        $html = "
            <h3>Thông tin phản hồi</h3>
            <p><strong>Họ tên:</strong> {$data['name']}</p>
            <p><strong>Email:</strong> {$data['email']}</p>
            <p><strong>Nội dung:</strong><br>{$data['message']}</p>
        ";

        Mail::html($html, function ($message) use ($data) {
            $message->to('hungpq1309developer@gmail.com')
                    ->subject("Feedback của {$data['name']}")
                    ->from($data['email'], $data['name']);
        });

        return back()->with('success', 'Cảm ơn bạn đã gửi phản hồi!');
    }
}
