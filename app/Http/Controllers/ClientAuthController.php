<?php
namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClentAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('client.login');
    }

    public function login(Request $request)
    {
        // Logique de validation

        if (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/client/dashboard');
        }

        return redirect()->route('client.login')->with('error', 'Invalid credentials');
    }

    public function showRegisterForm()
    {
        return view('client.register');
    }

    public function register(Request $request)
    {
        // Logique de validation

        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::guard('client')->login($client);

        return redirect()->intended('/client/dashboard');
    }
}