<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return response()->json([
                'status' => 'ok',
            ]);
        }

        return response()->json([
            'status' => 'bad'
        ], 401);
    }

    public function store(Request $request)
    {
        $request->session()->put('name', $request->input('name'));
        return redirect('session');
    }

    public function destroy(Request $request)
    {
        $request->session()->forget('name');
        return redirect('session');
    }
}
