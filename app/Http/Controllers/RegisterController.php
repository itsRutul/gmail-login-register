<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }
    public function showStep1()
    {
        return view('register_step1');
    }

    public function postStep1(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        $request->session()->put('step1', $validatedData);

        return redirect()->route('register.step2');
    }

    public function showStep2(Request $request)
    {
        if (!$request->session()->has('step1')) {
            return redirect()->route('register.step1');
        }
        return view('register_step2');
    }

    public function postStep2(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        $request->session()->put('step2', $validatedData);

        return redirect()->route('register.step3');
    }

    public function showStep3(Request $request)
    {
        if (!$request->session()->has('step1') || !$request->session()->has('step2')) {
            return redirect()->route('register.step1');
        }
        return view('register_step3');
    }

    public function submit(Request $request)
{
    $validatedData = $request->validate([
        'password' => 'required|min:8|confirmed',
    ]);

    $userData = array_merge(
        $request->session()->get('step1'),
        $request->session()->get('step2'),
        ['password' => Hash::make($validatedData['password'])]
    );

    // Create user in the database
    $user = User::create($userData);

    // Authenticate the user
    Auth::login($user);

    // Clear session data
    $request->session()->forget('step1');
    $request->session()->forget('step2');

    return redirect()->route('home')->with('success', 'Registration successful!');
}
}