<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class ReportController extends Controller
{
    public function index()
    {
        $data = Transaction::all();
        return view('admin.report.index',compact('data'));
    }
}
