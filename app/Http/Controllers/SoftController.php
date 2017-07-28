<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SoftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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

    public function running()
    {
      $users10 = DB::table('running_projects')->get(); 

       $users1 = DB::table('running_projects')->where('project_types' , 'web')->get(); 
        $users2 = DB::table('running_projects')->where('project_types' , 'mobile')->get();
        $users3 = DB::table('running_projects')->where('project_types' , 'desktop')->get();

        return view('project.running')
                ->with('users1', $users1)
                ->with('users10', $users10)
                ->with('users2' , $users2)
                ->with('users3' , $users3);

    }



   public function complete()
  {

       $users1 = DB::table('complete_projects')->where('project_types' , 'web')->get(); 
        $users2 = DB::table('complete_projects')->where('project_types' , 'mobile')->get();
        $users3 = DB::table('complete_projects')->where('project_types' , 'desktop')->get();

        return view('project.complete')
                ->with('users1', $users1)
                ->with('users2' , $users2)
                ->with('users3' , $users3);


   }


    public function description($id,$types,$table)
    {
       

        if($table === 'running')
        {

      $users = DB::table('running_projects')
                    ->where('id' , $id)
                    ->where('project_types',$types)
                    ->first();
       
       }
       else
       {
          $users = DB::table('complete_projects')
                    ->where('id' , $id)
                    ->where('project_types',$types)
                    ->first();


       }


        return view('project.description')
                ->with('id', $id)
                ->with('types' , $types)
                ->with('users',$users);

        //return $table;


    }
    
}
