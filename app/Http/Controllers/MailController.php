<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function sendTestEmail()
    {
        // Gửi email thẳng đến địa chỉ
        Mail::raw('This is a test email.', function ($message) {
            $message->to('beachvibe922@gmail.com')
                    ->subject('Test Email');
        });

        return 'Test email đã được gửi!';
    }
}
