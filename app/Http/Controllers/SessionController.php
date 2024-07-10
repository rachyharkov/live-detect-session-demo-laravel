<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('expires_at') && $request->session()->get('expires_at') > date('Y-m-d H:i:s')) {
            return response()->json([
                'status' => 'ok',
                'expired_at' => $request->session()->get('expires_at'),
                'now' => date('Y-m-d H:i:s'),
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
