<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterlist;

class MasterlistController extends Controller
{
   public function sample_query(){

    $data = Masterlist::all();
    return dd($data);
   } 
   public function select(){
   $data = Masterlist::select('name','age')->get();
   return dd($data);
   } 
   public function find(){
    $data = Masterlist::find(4);
    return dd($data);
   } 
   public function count(){
//    $data = Masterlist::whereStatus('Regular')->count();
   $data = Masterlist::whereGender('Female')->count();
   return dd($data);
   } 
   public function avg(){
    // $data = Masterlist::avg('total_payment');
    // $data = Masterlist::avg('age');
    $data = Masterlist::whereStatus('Regular')->avg('Status');
    return dd($data);
   } 
   public function exists(){
   //  $data = Masterlist::whereName('cess')->exists();
    $data = Masterlist::whereAge('20')->whereGender('Female')->exists();
    return dd($data);
   } 
   public function where(){
     
       $data = Masterlist::select('name','gender','age')
      //  ->where('gender','=','male')
       ->wheregender('male')
       ->where('age','!=',25)
      //  ->where('age','<=',25)
      // ->where('age','>',25)
       ->get();
       return response()->json($data, 200, [], JSON_PRETTY_PRINT);
   } 
   public function orwhere(){
     $data = Masterlist::select('name','age')
     ->where('age','=',25)
     ->orWhere('age','=',20)
     ->get();
     return response()->json($data, 200, [], JSON_PRETTY_PRINT);
   } 
   public function wherebetween(){
     
     
   } 
   public function wherein(){
     
     
   } 
}






