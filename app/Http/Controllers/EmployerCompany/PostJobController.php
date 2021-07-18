<?php

namespace App\Http\Controllers\EmployerCompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\JobPost;

class PostJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_posts = JobPost::orderby('id', 'DESC')->get();
        return view('EmployerCompany.PostJob.index', compact('job_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job_categories = DB::select('select * from job_categories');
        return view('EmployerCompany.PostJob.create', compact('job_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'employment_type' => 'required',
            'gender' => 'required',
            'age_limit' => 'required',
            'salary' => 'required',
            'job_location' => 'required',
            'job_vacancy' => 'required',
            'end_date' => 'required',
            'demand_letter' => 'nullable',
            'selected_wsc' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
        ]);

        $job_post = new JobPost();
        $job_post ->job_category_id = $request->job_category_id;
        $job_post ->user_id = $request->user_id;
        $job_post ->company_id = $request->company_id;
        $job_post ->employment_type = $request->employment_type;
        $job_post ->gender = $request->gender;
        $job_post ->age_limit = $request->age_limit;
        $job_post ->salary = $request->salary;
        $job_post ->job_location = $request->job_location;
        $job_post ->job_vacancy = $request->job_vacancy;
        $job_post ->end_date = $request->end_date;
        $job_post ->demand_letter = $request->demand_letter;
        $job_post ->selected_wsc = $request->selected_wsc;
        $job_post ->appointment_date = $request->appointment_date;
        $job_post ->appointment_time = $request->appointment_time;
        if($job_post->save()){
            return 'Success';
        }
        return 'wrong';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job_post = JobPost::findOrFail($id);
        return view('EmployerCompany.PostJob.show', compact('job_post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('EmployerCompany.PostJob.edit');
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
