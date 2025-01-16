<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NomorSatu {

	public function auth(Request $request) {
		$credentials = $request->validate([
			'email' => 'required|email',
			'password' => 'required'
		]);
	
		if (Auth::attempt($credentials)) {
			$request->session()->regenerate();
			return redirect()->route('event.home');
		}
	
		return back()->withErrors([
			'email' => 'The provided credentials do not match our records.',
		])->onlyInput('email');
	}
}

?>