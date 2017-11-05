<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
  public function list()
  {
    $registrations = Registration::all();
    return view('list', ['registrations' => $registrations]);
  }
}
