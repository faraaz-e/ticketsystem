<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        
        $current_user = auth()->user()->id;

        $totalcount = DB::table('user_models')->where('user_id', $current_user)->count();  //count variable receives count of rows from DB table
        
        date_default_timezone_set('Asia/Kolkata');

        $tomorrow_date = date('Y-m-d', strtotime('+1 day')); //fetches tommorrow's date

        $curr_date = date('Y-m-d');  //fetches current date

        $yesterday_date = date('Y-m-d', strtotime('-1 day')); //fetches yesterday's date
        

        //Comparing date value entered by user with above fetched dates 
        $tomr_date = DB::table( 'user_models' )->where([['date', $tomorrow_date], ['user_id', $current_user]])->count() ;

        $today_date = DB::table( 'user_models' )->where([['date', $curr_date], ['user_id', $current_user]])->count() ;

        $yestr_date = DB::table( 'user_models' )->where([['date', $yesterday_date], ['user_id', $current_user]])->count() ;


        return view('pages.userdashboard', compact('totalcount','tomr_date','today_date','yestr_date')); 
        //here compact collects the variable data to load it in view

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'tname'=> 'required',
            'email' => 'required',
            'date' => 'required'

        ]);

        $tname = $request->input('tname');
        $email = $request->input('email');
        $date  = $request->input('date');
        $user_id = auth()->user()->id;

        DB::insert( 'insert into user_models (tname, email, date, user_id) values (?, ?, ?, ?)', [$tname, $email, $date, $user_id] );
        // return "ticket created Successfully";

        return redirect()->back()->with( 'message', 'Ticket Created Successfully' );
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
}
