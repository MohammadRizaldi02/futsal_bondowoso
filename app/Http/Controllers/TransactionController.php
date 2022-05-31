<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
   public function Index()
   {
       return view ('admin.schedule.create');
   }
}
