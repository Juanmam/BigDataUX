<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class QueryController extends Controller {
      public function view() {
      	  $Book = DB::collection('felipe')->get();
	  
	  
	  
          return view('query');
      }
}