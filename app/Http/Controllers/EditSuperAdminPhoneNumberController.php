<?php

namespace App\Http\Controllers;

use App\Models\PhoneNumber;
use Illuminate\Http\Request;

class EditSuperAdminPhoneNumberController extends Controller
{
    public function index($id){

        return view('edit-super-admin-phone-number', compact('id'));

    }
}
