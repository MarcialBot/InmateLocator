<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Prisoner;

class PrisonerController extends Controller
{

  public function index()
  {
    return Prisoner::all();
  }

  public function show($PID)
  {
    $validator = Validator::make(['PID'=> $PID], [
      'PID'=> 'required|numeric'
    ]);
    $prisoner = Prisoner::where('PID', '=', $PID)->first();

    if($validator->fails()) {
      abort(403, 'Unauthorized action.'); 
    } else if($prisoner){
      return $prisoner;
    } else {
      abort(404, 'Not found.');
    }
  }

  public function showByLocation($location)
  {
    return Prisoner::where('location', 'LIKE', '%'.$location.'%')->get();
  }

  public function showByCredentials($firstName, $lastName, $dob)
  {
    return $prisoners = Prisoner::where('firstName', '=', $firstName)
      ->where('lastName', '=', $lastName)
      ->where('dob', '=', $dob)
      ->first();
  }
}
