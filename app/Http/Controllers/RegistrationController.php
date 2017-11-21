<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

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
    $validator = Validator::make(request()->all(), [
        'id' => 'required|unique:registrations|size:13',
        'name' => 'required',
        'login_id' => 'required|unique:registrations',
    ]);

    $attributeNames = array(
       'id' => 'citizen ID',
       'name' => 'name',
       'login_id' => 'Internet username'
    );

    $validator->setAttributeNames($attributeNames);

    if ($validator->fails())
    {
        return redirect('add')
          ->withErrors($validator)
          ->withInput();
    }
    else
    {
      $registration = new Registration;
      $registration->id = request('id');
      $registration->name = request('name');
      $registration->login_id = request('login_id');
      $registration->save();
      return view('register')
        ->with('status', 'success')
        ->with('registration', $registration);
    }
  }

  public function thisRoute()
  {
    return \Request::route()->getName();
  }

  public function viewRegister($id)
  {
    $registration = \App\Registration::findOrFail($id);
    return view('view')
      ->with('registration', $registration);
  }
}
