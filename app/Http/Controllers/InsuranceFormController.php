<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\InsuranceForm;

class InsuranceFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:100'],
            'industry' => ['required'],
            'product_type' => ['required'],
            'purchase_type' => ['required'],
            'price_range' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        InsuranceForm::create(['name' => $request->input('name'), 'industries_id' => $request->input('industry'),
                                'product_types_id' => $request->input('product_type'), 'purchase_types_id' => $request->input('purchase_type'),
                                'price_ranges_id' => $request->input('price_range')]);

        return redirect('/');
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
