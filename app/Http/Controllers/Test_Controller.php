<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\Http\Requests;

use App\TESTTable;

class Test_Controller extends Controller
{
    public function index(){
      $data = TESTTable::all()
              ->toArray();
      return view('test',["data"=>$data]);
    }
    public function getdata(){
      $data = TESTTable::all()
              ->toArray();
      return response()->json($data);
    }
}
