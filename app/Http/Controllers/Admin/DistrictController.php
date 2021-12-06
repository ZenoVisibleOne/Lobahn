<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Area;
use App\Models\District;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class DistrictController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        
        $countries = Country::pluck('country_name','id')->toArray();

        $states = Area::orderBy('id','ASC');
        
        if(!empty($request->country)) {
            $country = Country::find($request->country);
            $states = $states->where('country_id', $request->country);
        }else {
            $country = Country::first();
            $states = $states->where('country_id', $country->id);
        }

        $states = $states->pluck('area_name','id')->toArray();
        
        $state_arr = collect($states);
        $state_ids = $state_arr->keys();

        $state = '';
        
        if(!empty($request->state)) {
            $state = $request->state;
            $data = District::where('area_id', $request->state)->get();
        }else {
            $data = District::whereIn('area_id', $state_ids)->get();
        }
        
        $city_count = District::count();

        return view('admin.districts.index', compact('data','countries','country','states','state','city_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    	$areas = Area::all()->pluck('area_name', 'id');
        return view('admin.districts.create',compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, [
            'district_name' => 'required',
        ]);
    
        $input = $request->all();
        $district = District::create($input);
    
        return redirect()->route('districts.index')
                        ->with('success','District created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $data = District::find($id);
        return view('admin.districts.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = District::find($id); 
        $areas = Area::all();

        return view('admin.districts.edit',compact('data','areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $this->validate($request, [
            'district_name' => 'required',
        ]);
    
        $input = $request->all();    
        $district = District::find($id);
        $district->update($input);

        return redirect()->route('districts.index')
                        ->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $data = District::find($id);
        $data->delete();
        return redirect()->route('districts.index')->with('info', 'Deleted Successfully.');
    }
}

