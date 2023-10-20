<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\PinMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    static function sendPin(User $user) {
        $pin = mt_rand(1000,9999);
        Mail::to($user->email)->send(new PinMail($pin));
    }
}
