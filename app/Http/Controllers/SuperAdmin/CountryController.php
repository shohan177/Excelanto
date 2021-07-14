<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('SuperAdmin.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SuperAdmin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_code' => 'required',
            'country_name' => 'required',
            'status' => 'required',
        ]);

        $data = new Country();
        $data->country_code = $request->country_code;
        $data->country_name = $request->country_name;
        $data->status = $request->status;

        $data->save();

        //Toastr::success('Tag successfully create', 'Success');

        return redirect()->route('SuperAdmin.country.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //show data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('SuperAdmin.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {

        $request->validate([
            'country_code' => 'required',
            'country_name' => 'required',
            'status' => 'required',
        ]);


        $country->country_code = $request->country_code;
        $country->country_name = $request->country_name;
        $country->status = $request->status;

        //return $country;
        $country->update();

        //Toastr::success('Tag successfully Updated', 'Success');

        return redirect()->route('SuperAdmin.country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        // Toastr::success('Tag successfully Deleted', 'Success');

        return redirect()->route('SuperAdmin.country.index');
    }
}
