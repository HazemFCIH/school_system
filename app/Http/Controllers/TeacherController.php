<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Room;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Teacher::all();
    
        return view('Teacher.teachers',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        return view('Teacher.createTeacher',compact('rooms'));
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
            'name' => 'required',
            'subjects' => 'required',
            'rooms_id' => 'required',

            
        ]);
       $teacher = Teacher::create(['name'=>$request->name,'subjects'=>$request->subjects]);

        $room = Room::findOrFail($request->rooms_id);
        $teacher->rooms()->attach($request->rooms_id);
       return redirect()->route('teachers')->with('success','teachers created successfully.');        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $rooms = Room::all();
        return view('Teacher.editTeacher',compact('teacher','rooms'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'subjects' => 'required',
            'rooms_id' => 'required',

            
        ]);
       $teacher->update(['name'=>$request->name,'subjects'=>$request->subjects]);

        $room = Room::findOrFail($request->rooms_id);
        $teacher->rooms()->sync($request->rooms_id);
       return redirect()->route('teachers')->with('success','teachers created successfully.');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        $teacher->rooms()->detach();
        return redirect()->route('teachers')->with('success','teachers deleted successfully.');    }
}
