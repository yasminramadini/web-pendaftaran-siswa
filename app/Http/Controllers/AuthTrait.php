<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;

//ini adalah trait untuk mengecek autorisasi user

class AuthTrait {
  public function authorize()
  {
      if(!Gate::allows('admin')) {
        abort(403);
      }
  }
}