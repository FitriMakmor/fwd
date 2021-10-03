<?php

namespace App\Http\Controllers;

use Amranidev\Laracombee\Laracombee;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
    public function store(Request $request)
    {
        //
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
        // $request->validate([
        //     'full_name' => 'required',
        // ]);

        // DB::transaction(function () use ($jobseeker_profile, $request) {
        //     $jobseeker_profile->update($request->all());
        //     $jobseeker_profile->contact_info()->update(array('phone_number' => $request->phone_number, 'profile_state_id' => $request->profile_state_id, 'profile_city_id' => $request->profile_city_id));
        // });

        // return redirect()->route('jobseeker-profile', $jobseeker_profile->id)->with('success', 'Profile updated.');
    }

    public function updateS1(Request $request, User $user)
    {
        $request->validate([
            'gender' => 'required',
            'birthdate' => 'required',
        ]);

        $user->update($request->all());

        $updateUser = (new Laracombee)->updateUser($user);

        (new Laracombee)->send($updateUser)->then(function () {
        })->otherWise(function ($error) {
            dd($error);
        })->wait();

        return redirect()->route('section2');
    }

    public function updateS2(Request $request, User $user)
    {
        $request->validate([
            'is_citizen' => 'required',
            'is_married' => 'required',
            'prefer_flexible' => 'required',
        ]);

        $user->update($request->all());
        
        $updateUser = (new Laracombee)->updateUser($user);
        
        (new Laracombee)->send($updateUser)->then(function () {
        })->otherWise(function ($error) {
            dd($error);
        })->wait();

        return redirect()->route('section3');
    }

    public function updateS3(Request $request, User $user)
    {
        $request->validate([
            'income_range' => 'required',
            'admittance_freq' => 'required',
            'travel_freq' => 'required',
        ]);

        $user->update($request->all());

        $updateUser = (new Laracombee)->updateUser($user);
        
        (new Laracombee)->send($updateUser)->then(function () {
        })->otherWise(function ($error) {
            dd($error);
        })->wait();

        return redirect()->route('section4');
    }

    public function updateS4(Request $request, User $user)
    {
        $request->validate([
            'hasDisease1' => 'required',
            'hasDisease2' => 'required',
            'hasDisease3' => 'required',
            'hasDisease4' => 'required',
            'hasDisease5' => 'required',
        ]);

        $user->update($request->all());

        $updateUser = (new Laracombee)->updateUser($user);
        
        (new Laracombee)->send($updateUser)->then(function () {
        })->otherWise(function ($error) {
            dd($error);
        })->wait();
        
        return redirect()->route('results');
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
