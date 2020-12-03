<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SevenPay\PayUnit\PayUnit; 

class Donation extends Controller
{
     public function donate(Request $request)
    {
        $amount = $request->input('amount');
        $myPayment = New PayUnit("d97fe9e7de10b042bc01d26241a4fcd7f972cc85","0dc757b3-0abe-4b59-8523-e10d6f085897","payunit_TLYswhcCJ","http://127.0.0.1:8000/status",$amount);
         $myPayment->MakePayment();
         return '';
    }
}
