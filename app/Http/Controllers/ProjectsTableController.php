<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectsTableModel;

class ProjectsTableController extends Controller
{
    function onSix(){
        $result=ProjectsTableModel::limit(3)->get();
        return $result;
    }


    function onSelectAll(){
        $result=ProjectsTableModel::all();
        return $result;
    }


    function onSelectDetails(Request $request){
        $id=$request->input('id');

        $result=ProjectsTableModel::where(['id'=>$id])->get();
        return $result;

    }
}
