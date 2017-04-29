<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class SearchController extends Controller {
      public function view() {
          return view('search');
      }

      public function search(){
      	  $word = request('word');
      	  $results = array('monday','food','dog');
          return view('query', array('word' => $word, 'results' => $results));
      }
}