<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\purchase;

use App\offer;

class PurchaseController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $offer = new offer();
   
     $offer = $offer::all();
     return view('purchase')->with('offers', $offer);
   
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    //

        $purchase = new purchase;
        $purchase->customer_name= $request->input('customer_name');
        $purchase->offering_id= $request->input('offering_id');
        $purchase->quantity= $request->input('quantity');
        $purchase->save();

        //Send control to index() method where it'll redirect to bookList.blade.php
        return redirect()->route('purchase.index');


  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }
}
