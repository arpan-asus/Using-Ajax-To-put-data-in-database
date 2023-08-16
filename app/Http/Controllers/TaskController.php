<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=Task::all();
        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function getForm(){
        return view('tasks.create');
    }
    public function getstore(Request $request){
        $task=new Task();
        $task->name=$request->input('name');
        $task->email=$request->input('email');

        $task->save();

        return response()->json(['message' => 'Company added Successfully']);
    }
    public function ajaxfetchData(){
        $data= [
            [
                'name'=>'arpan',
                'email'=>'iamnepalinoob15@gmail.com',
                'number'=>'98765434'
            ],
            [
                'name'=>'suman',
                'email'=>'suman@gmail.com',
                'number'=>'98765434'
            ],
            [
                'name'=>'anish',
                'email'=>'anish@gmail.com',
                'number'=>'98765434'
            ]
        ];
        return response()->json($data);
    }
    public function fetchajax()
    {
        return view('tasks.ajaxfetch');
    }
}
