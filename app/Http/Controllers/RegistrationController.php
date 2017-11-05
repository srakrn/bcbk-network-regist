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

  public function register()
  {
    $registrations = Registration::all();
    return view('register');
  }

  public function saveRegister()
  {
    $registration = new Registration;
    $registration->id = request('id');
    $registration->name = request('name');
    $registration->login_id = request('login_id');
    $registration->save();
    return view('register');
  }
}
