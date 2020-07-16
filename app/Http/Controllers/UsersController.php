<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Video;
class UsersController extends Controller
{
   public function Events_show(){
   $event =Video::all();
  
   return view('events.show_events',compact('event'));   	
   }
   public function joinuser($request){
    $events =Video::where('slug',$request)->get();
    $recent =Video::select('*')->whereNotIn('slug',[$request])->get();
    
   
   	return view('events/user_events',compact('events','recent'));
   }
}
