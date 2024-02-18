<?php
namespace App\Http\Controllers;
use App\Models\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('coach.login');
    }

    public function login(Request $request)
    {
        // Logique de validation

        if (Auth::guard('coach')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/coach/dashboard');
        }

        return redirect()->route('admin.login')->with('error', 'Invalid credentials');
    }

    public function showRegisterForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        // Logique de validation

        $admin = Coach::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::guard('coach')->login($coach);

        return redirect()->intended('/coach/dashboard');
    }
}