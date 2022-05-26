<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ReportController extends Controller
{
    public function index()
    {
        $data = Schedule::where('status', '=','1')->get();
        return view('admin.report.index',compact('data'));
    }
}
