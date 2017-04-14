<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OfferController extends Controller
{

	/**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
      //
   }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create(Request $request)
   {
      $title = $request->input('title');
      $price = $request->input('price');
      echo $title.$price;
      die('here');
   }
}
