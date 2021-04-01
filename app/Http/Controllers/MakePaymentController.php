<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PayUnit;
use App\Models\AmountDonated;

class MakePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('donations.make-donation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function donate(Request $request)
    {
          $amount = $request->input('amount_donated');

          $myPayment = new PayUnit(
            "cf995574e54bd02ce8ca7d8993dc6fefcb29ef69",
            "71385aec-c4fd-40c4-8990-c8065b9ae73c",
            "payunit_sand_lUtifX0h9",
            "http://127.0.0.1:8000/makePayment",
            "http://127.0.0.1:8000/notification",
            "mode",
            "description",
            "purchaseRef",
            "XAF",
            "name"
       );
    
         $myPayment->makePayment($amount);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $amountDonated = AmountDonated::create([
            'donation_id' => $request->input('campaign_id'),
            'donation_name' => $request->input('campaign_name'),
            'message' => $request->input('message'),
            'amount_donated' => $request->input('amount_donated')
         ]);

         return redirect('donations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
