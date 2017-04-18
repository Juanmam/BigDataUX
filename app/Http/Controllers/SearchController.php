<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class SearchController extends Controller {
      public function view() {
          return view('search');
      }

      public function search(){
      	  $word = request('word');
	  //return $word;
          return view('query', array('word' => $word));
      }
}