<?php

namespace App\Http\Controllers;

use App\Models\equipment_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EquipDbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = equipment_data::all();

        return view('admin/database/equipment/index', ['datas'=>$query]);

        // return $query;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/database/equipment/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        $data = $request->merge([
            'name'=>strip_tags($request['name']),
            'mrp'=>strip_tags($request['mrp']),
        ]);

        $query = equipment_data::where('name', $data['name'])->exists();

        if($query){
            return redirect()->route('equipment.create')->with('failed', 'Equipment Already In Database');
        } else {

            $sData = new equipment_data();

            $sData->name = $request->name;
            $sData->mrp = $request->mrp;

            $sData->save();

            return redirect()->route('equipment.index')->with('success', 'Equipment Added To Database');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = equipment_data::find($id);

        return view('admin/database/equipment/edit', ['data'=>$data]);
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
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        $data = $request->merge([
            'name'=>strip_tags($request['name']),
            'mrp'=>strip_tags($request['mrp']),
        ]);

        $query = equipment_data::where('name', $data['name'])->exists();

        if($query){
            return back()->with('failed', 'Equipment Already In Database');
        } else {

            $sData = equipment_data::find($id);

            $sData->name = $data->name;
            $sData->mrp = $data->mrp;

            $sData->save();

            return redirect()->route('equipment.index')->with('success', 'Equipment Updated In Database');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = equipment_data::find($id);

        $data->delete();

        return redirect()->route('equipment.index')->with('success', 'Equipment Deleted From Database');
    }
}
