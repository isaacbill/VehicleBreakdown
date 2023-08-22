<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DataController extends Controller
{
public function getMechanics()

    {
    $mechanics = DB::table('mechanics')->pluck("name","id"); 
    return view('dropdown',compact('mechanics'));
}
// public function getStatus($id) 
// {        
//         $status = DB::table("status")->where("status_id",$id)->pluck("name","id");
//         return json_encode($status);
// }
}
