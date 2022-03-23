<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;

//ini adalah trait untuk mengecek autorisasi user

trait AuthTrait {
  public function autorisasi()
  {
      if(!Gate::allows('admin')) {
        abort(403);
      }
  }
}