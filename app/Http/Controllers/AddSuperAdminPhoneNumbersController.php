<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddSuperAdminPhoneNumbersController extends Controller
{
    public function index(){
        return view('add-super-admin-phone-numbers');
    }
}
