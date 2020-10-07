<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() 
    {
        $customers = [
            'Xastraqueo',
            'Leonardo',
        ];
    
        return view('subviews.customers', [
            'customers' => $customers
        ]);
    }
}
