<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $kendaraan = $request->input('kendaraan');
        $tanggal = $request->input('tanggal');
        $jam = $request->input('jam');

        return view('dashboard', compact('kendaraan', 'tanggal', 'jam'));
    }
}