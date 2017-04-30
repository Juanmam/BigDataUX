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
	  //$db = \DB::connection('mongodb')->getMongoClient();
	  //$results = \DB::collection('felipe')->get();
	  $Book = \DB::collection('felipe')->where('word', $word)->first();
	  //$results = \DB::collection('felipe')->where('word','!')->first();
	  $results = json_decode(json_encode($Book));
	  //return ($array->files);
	  if(empty((array)$results)) {
	      $warning = "No results found.";
	      return view('query', array('word' => '', 'files' => $warning));
          } else {  	
	      return view('query', array('word' => $word, 'files' => $results->files));	 	
	  }
      }
}