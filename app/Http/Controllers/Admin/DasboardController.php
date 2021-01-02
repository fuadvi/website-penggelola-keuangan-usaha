<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\income;
use App\spending;
use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index()
    {
        return view('pages.dasboard', [
            'total_pemasukan' => income::sum('nominal'),
            'total_pengeluaran' => spending::sum('nominal'),
        ]);
    }
}
