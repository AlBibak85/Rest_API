<?php

namespace App\Http\Controllers;

use App\homeTableModel;
use Illuminate\Http\Request;

class HomeTableController extends Controller
{

    function onVideo(){
        $result=HomeTableModel::select('video_description','video_url')->get();
        return $result;
    }

    function onTech(){
        $result=HomeTableModel::select('tech_description')->get();
        return $result;
    }

    function onTotal(){
        $result=HomeTableModel::select('total_projects','total_dynamic')->get();
        return $result;
    }

    function onHome(){
        $result=HomeTableModel::select('home_title','home_subtitle')->get();
        return $result;
    }

}
