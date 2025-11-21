<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ChangeLog;
use App\Models\Fix_assets;
use App\Models\QuickData;
use App\Models\Unit;
use App\Models\StoredAssets;
use App\Models\New_assets;
use App\Models\TempCode;
use App\Models\User_property;
use App\Models\movement;
use App\Models\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mail_data;
use App\Mail\NotifyUserPasswordMail;
use App\Models\Noftify;
use Illuminate\Support\Str;
use Exception;

class ApiHandlerController extends Controller
{
    public function login_submit(Request $request)
    {
        $name_email = $request->input('name_email');
        $password = $request->password;
        $remember = $request->remember;

        if (Auth::attempt(['name' => $name_email, 'password' => $password], $remember)) {
            $user = Auth::user();
            $token = $user->createToken('MyAppToken')->plainTextToken;

            return response()->json([
                'success' => 'Login Success.',
                'token' => $token,
                'user' => $user,
            ]);
        } elseif (Auth::attempt(['email' => $name_email, 'password' => $password], $remember)) {
            $user = Auth::user();
            $token = $user->createToken('MyAppToken')->plainTextToken;

            return response()->json([
                'success' => 'Login Success.',
                'token' => $token,
                'user' => $user,
            ]);
        } elseif (Auth::attempt(['name' => $name_email, 'temp_password' => $password], $remember)) {
            $user = Auth::user();
            $token = $user->createToken('MyAppToken')->plainTextToken;

            return response()->json([
                'success' => 'Login Success.',
                'token' => $token,
                'user' => $user,
            ]);
        } elseif (Auth::attempt(['email' => $name_email, 'temp_password' => $password], $remember)) {
            $user = Auth::user();
            $token = $user->createToken('MyAppToken')->plainTextToken;

            return response()->json([
                'success' => 'Login Success.',
                'token' => $token,
                'user' => $user,
            ]);
        }
        return response()->json(['error' => 'Invalid credentials'], 401);
    }






  
}


class arr
{
    public $page;
    public $total_page;
    public $total_record;
    public $data;
}


class quick_data
{
    public $id;
    public $data;
}
