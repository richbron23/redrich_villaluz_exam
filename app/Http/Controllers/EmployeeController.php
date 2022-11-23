<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\AccessLevel;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')
    //     ->only(['create', 'store', 'edit', 'update', 'destroy']);
    // }
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
            return view(
                'home.show', ['posts'=> DB::table('employees')
                ->join('access_levels', 'access_levels.access_level_id', '=', 'employees.access_level_id')
                ->get(),'access'=>Auth::user()->access_level_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('home.create_employee', ['posts'=> AccessLevel::select('access_level_id','description')->where('description', '!=' , 'Super Level')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployeeRequest $request)
    {   
       
        $validated = $request->validated();
       
        $post =  new Employee();
        $post->firstname =  $validated['firstname'];
        $post->lastname =  $validated['lastname'];
        $post->age =  $validated['age'];
        $post->birthdate =  $validated['birthdate'];
        $post->email =  $validated['email'];
        $post->job_title =  $validated['job_title'];
        $post->password =  Hash::make($validated['password']);
        $post->access_level_id =  $validated['access_level_id'];
        $post->save();

        $request->session()->flash('status','The Blog Post was Created');
        return redirect()->route('emp.index');
       
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
        return view('home.edit',['post'=>Employee::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, $id)
    {   

        $post = Employee::findOrFail($id);
        $validated = $request->validated();
        $post->firstname =  $validated['firstname'];
        $post->lastname =  $validated['lastname'];
        $post->age =  $validated['age'];
        $post->birthdate =  $validated['birthdate'];
        $post->email =  $validated['email'];
        $post->job_title =  $validated['job_title'];
        $post->save();
        
        $request->session()->flash('status','The Employee was Updated');
        return redirect()->route('emp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   


        $post = Employee::findOrFail($id);
        $post->delete();
        session()->flash('status','The Employee was Delete');
        return redirect()->route('emp.index');
    }
}
