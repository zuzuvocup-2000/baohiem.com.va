<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Http\Requests\Contact\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact.index');
    }
    public function sendEmail(ContactRequest $request)
    {
        $data = $request->validated();
    
        Mail::send('pages.contact.mailview', $data, function ($message) use ($data) {
            $message->to($data['email_receive'])
                    ->subject($data['title']);
        });
    
        return redirect()->back()->with('success', 'Gửi email thành công');
    }
}
