<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AdminController extends Controller
{

	public function index()
    {
        
        

        $totalcount = DB::table('user_models')->count();  //count variable receives count of rows from DB table
        
        date_default_timezone_set('Asia/Kolkata');

        $tomorrow_date = date('Y-m-d', strtotime('+1 day')); //fetches tommorrow's date

        $curr_date = date('Y-m-d');  //fetches current date

        $yesterday_date = date('Y-m-d', strtotime('-1 day')); //fetches yesterday's date
        

        //Comparing date value entered by user with above fetched dates 
        $tomr_date = DB::table( 'user_models' )->where('date', $tomorrow_date)->count() ;

        $today_date = DB::table( 'user_models' )->where('date', $curr_date)->count() ;

        $yestr_date = DB::table( 'user_models' )->where('date', $yesterday_date)->count() ;



//_______________________________________________________________________________________________________

  	    //select user_id, count(user_id)
		// from user_models
		// group by user_id
		// order by count(user_id) desc


 //CALCULATION OF 3-TOP PERFORMED USERS (TOP 3 USERS THAT CREATED MOST NO. OF POSTS)

			$top_user_id = DB::table( 'user_models' )
        									->select('user_id')
        									->groupBy('user_id')
        									->orderBy(DB::raw('count(user_id)'), 'desc')
        									->get();

        	//Above query calculates the list of user_id that created number of posts in descending order
        	

        	// print_r($top_user);
        	$array_result_id = json_decode(json_encode($top_user_id), 'true'); //decoding - array result of above query
        	// print_r($array_result_id);

        	
        	$top1 = $array_result_id[0]["user_id"];   //here each user_id from each index are stored in variable
        	$top2 = $array_result_id[1]["user_id"];
        	$top3 = $array_result_id[2]["user_id"];

        	// we want top 3, hence created three variables, indexing 0,1,2
	//________________________________________________________________________________________________________

        	//here the json result is fetched, of each "user_id equal to login id" >  TOP 1st PERSON

        	$top_user_name_1 = DB::table( 'users' )				
        									->select('name')
        									->where('id', $top1)
        									->get();

        	$array_result_name_1 = json_decode(json_encode($top_user_name_1), 'true'); //decoding - array result
        	

        	$final_user_name_1 = $array_result_name_1[0]["name"];  // fetching name from index 0

	//_________________________________________________________________________________________________________

        	 //here the json result is fetched, of each "user_id equal to login id" >  TOP 2nd PERSON

        	$top_user_name_2 = DB::table( 'users' )				
        									->select('name')
        									->where('id', $top2)
        									->get();

        	$array_result_name_2 = json_decode(json_encode($top_user_name_2), 'true'); //decoding - array result
        	

        	$final_user_name_2 = $array_result_name_2[0]["name"];  // fetching name from index 0

 	//_________________________________________________________________________________________________________

        	 //here the json result is fetched, of each "user_id equal to login id" >  TOP 3rd PERSON

        	$top_user_name_3 = DB::table( 'users' )				
        									->select('name')
        									->where('id', $top3)
        									->get();

        	$array_result_name_3 = json_decode(json_encode($top_user_name_3), 'true'); //decoding - array result
        	

        	$final_user_name_3 = $array_result_name_3[0]["name"];  // fetching name from index 0

	//____________________________________________________________________________________________________________



        return view('home', compact('totalcount','tomr_date','today_date','yestr_date', 'final_user_name_1', 'final_user_name_2', 'final_user_name_3')); 

    }

}
