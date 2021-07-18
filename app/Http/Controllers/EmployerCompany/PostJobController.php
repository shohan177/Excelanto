<?php

namespace App\Http\Controllers\EmployerCompany;

use App\Http\Controllers\Controller;
use App\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\JobPost;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

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
        $job_categories = JobCategory::where('status','active')->get();
        $welfares = User::where('user_type','welfare-service-center-company')->get();
        return view('EmployerCompany.PostJob.create', compact('job_categories','welfares'));
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
            'employmentType' => 'required',
            'gender' => 'required',
            'ageLimit' => 'required',
            'salary' => 'required',
            'jobLocation' => 'required',
            'jobVacancy' => 'required|numeric',
            'endDate' => 'required',
            'demandLetter' => 'nullable',
            'wsc' => 'required',
            'appointmentDate' => 'required',
            'appointmentTime' => 'required',
        ]);

        $job_post = new JobPost();
        $job_post ->job_category_id = $request->job_category_id;
        $job_post ->user_id = Auth::user()->id;
        $job_post ->company_id = Auth::user()->id;
        $job_post ->employment_type = $request->employmentType;
        $job_post ->gender = $request->gender;
        $job_post ->age_limit = $request->ageLimit;
        $job_post ->salary = $request->salary;
        $job_post ->job_location = $request->jobLocation;
        $job_post ->job_vacancy = $request->jobVacancy;
        $job_post ->end_date = $request->endDate;
        $job_post ->selected_wsc = $request->wsc;
        $job_post ->appointment_date = $request->appointmentDate;
        $job_post ->appointment_time = $request->appointmentTime;

        if ($request->hasFile('demandLetter')) {
            $image             = $request->file('demandLetter');
            $folder_path       = 'uploads/demand-letter/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $job_post->demand_letter   = $folder_path . $image_new_name;
        }

        try {
            $job_post->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }

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
