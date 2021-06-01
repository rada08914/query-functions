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
   $data = Masterlist::whereGender('Female')->count();
   return dd($data);
   } 
   public function avg(){
   
   } 
   public function exists(){
   
   } 
}
