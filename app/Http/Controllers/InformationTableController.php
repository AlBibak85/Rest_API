<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformationTableModel;

class InformationTableController extends Controller
{
    function onSelect(){
        $result=InformationTableModel::all();
        return $result;
    }
}
