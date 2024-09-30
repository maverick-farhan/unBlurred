<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcome;
class MemberController extends Controller
{
    public $sendingEmail;
    public function saveMember(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
        ]);
    $toEmail = $req->email;
    $message = "Thank you from my bottom of my heart to becoming a member, see there is no need to pay anything to becoming a member. Just an email can do the work. I just want you to join us to raise local and national level issues spreading across the country.The Authority in power is not doing anything substantial. Share articles posted on unblurred to your friends and socials to spread awareness. At last let just unite and make our India a better, safer, and healthy place once again. It all start from small but strong efforts.";
    $subject = "Warm welcome to Unblurred";
    Mail::to($toEmail)->send(new welcome($message,$subject));

    $user = User::create([
        'name'=>$req->name,
        'email'=>$req->email,
    ]);
        
    if($user){
        return redirect()->route('home');
        }
    }
    }


