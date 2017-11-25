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

  public function save()
  {
    $validator = Validator::make(request()->all(), [
        'id' => 'required|unique:registrations|size:13',
        'login_id' => 'required|unique:registrations',
        'name' => 'required',
    ]);

    $attributeNames = array(
       'id' => 'citizen ID',
       'name' => 'name',
       'login_id' => 'internet username',
       'phone' => 'phone number'
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

  public function view($id)
  {
    $registration = \App\Registration::findOrFail($id);
    return view('view')
      ->with('registration', $registration);
  }

  public function delete($id)
  {
    $registration = \App\Registration::findOrFail($id);
    $name = $registration['name'];
    $registration -> delete();
    $status = 'delete_success';
    $registrations = Registration::all();
    return redirect('/')->with(compact(['status', 'name']));
  }
}
