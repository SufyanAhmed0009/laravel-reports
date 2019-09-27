<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login_data;
use Illuminate\Support\Facades\DB;

class ActiveController extends Controller
{

    public function showActiveCount()
    {
        $activeUsers = DB::table('login_data')->where('account_lock','=',0)->count();
        $blockUsers = DB::table('login_data')->where('account_lock','=',1)->count();
        $users=DB::table('login_data')
            ->join('customer_data', 'login_data.customer_id', '=', 'customer_data.id')
            ->select('login_data.username','customer_data.email','customer_data.telephone','customer_data.address')
            ->where('login_data.account_lock','=',0)
            ->take(20)
            ->get();
     //   echo"<pre>";

      //  print_r($users);
        return view ('login_data',['activeUsers' =>$activeUsers], ['blockUsers' =>   $blockUsers], ['users' =>   $users]);

    }

    public function showBlockCount()
    {
        $users = DB::table('login_data')->where('account_lock','=',1)->count();
        return view ('login_data',['users' => $users]);
     //   return view ('login_data',compact('users'));
    }
    public function showActiveUser($id=0)
    {

        $users=DB::table('login_data')
            ->join('customer_data', 'login_data.customer_id', '=', 'customer_data.id')
            ->select('login_data.username','customer_data.email','customer_data.telephone','customer_data.address')
            ->where('login_data.account_lock','=',$id)
            ->take(20)
            ->get();
      //  dd(users);

        return view ('active',['users' => $users]);

    }

     public function showBlockUser($id =1)
     {
 //  print_r($request->input('date1'));
 //   echo $date1;
 //   echo $date2;
         $users=DB::table('login_data')
             ->join('customer_data', 'login_data.customer_id', '=', 'customer_data.id')
             ->select('login_data.username','customer_data.email','customer_data.telephone','customer_data.address')
             ->where('login_data.account_lock','=',$id)
             ->take(20)
             ->get();

    //  dd(users);

        return view ('block',['users' => $users]);
    }


    public function showActiveByDate(Request $request, $id=0)
    {

        $date1=$request->input('date1');
        $date2=$request->input('date2');

       //  echo $date1;
      //   echo $date2;
      //      echo $id;
        $users=DB::table('login_data')
            ->join('customer_data', 'login_data.customer_id', '=', 'customer_data.id')
            ->select('login_data.username','customer_data.email','customer_data.telephone','customer_data.address')
            ->where('login_data.account_lock','=',$id)
            ->whereBetween('login_data.createdAt', array($date1, $date2))
            // ->take(5)
            ->get();
     //     dd($users);

        return view ('active',['users' => $users]);
    }

    public function showBlockByDate(Request $request, $id=1)
    {
  //  dd($request);
//        print_r($request->input('date1'));
//        print_r($request->input('date2'));
        $date1=$request->input('date1');
        $date2=$request->input('date2');

       // echo $date1;
       // echo $date2;
//        $users=DB::table('login_data')
//
//                            ->select('username','player')
//                            ->where('account_lock','=',$id)
//                            ->whereBetween('createdAt', array($date1, $date2))
//                           // ->take(5)
//                            ->get();
        $users=DB::table('login_data')
            ->join('customer_data', 'login_data.customer_id', '=', 'customer_data.id')
            ->select('login_data.username','customer_data.email','customer_data.telephone','customer_data.address')
            ->where('login_data.account_lock','=',$id)
            ->whereBetween('login_data.createdAt', array($date1, $date2))
            // ->take(5)
            ->get();
        //      dd($users);
//
       return view ('block',['users' => $users]);
    }




}

//Rough Work
//        $user = DB::table('login_datas')->where('username', 'umair')->value('player');
// $table = DB::table('users')->get();
//$table = new Login_data;
// $table = Login_data::count(where('account_lock', 1));
//        $table=Login_data::where('account_lock', 0)
//                ->orderBy('username','asc')
//                ->take(1)
//                ->get();
// echo $users;
//   return ($user);


// $users= new Login_data;
// $users=DB::table('login_data')->where('account_lock','=',0)->take(5)->get();
// $users=DB::table('login_data')->select('username as user_name')->get();
// echo($users);
//  $users=DB::table('login_data')->select('username')->where('account_lock','=',0)->take(5)->get();

//        $users=DB::table('login_data')
//                            ->select('username','player')
//                            ->where('account_lock','=',1)
////                            ->whereBetween('createdAt', array($date1, $date2))
//                            ->take(5)
//                            ->get();
