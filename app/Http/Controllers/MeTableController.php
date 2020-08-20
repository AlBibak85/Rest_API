<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MeTableModel;
class MeTableController extends Controller
{
    function AllSelect(){
        $result=MeTableModel::all();
        return $result;
    }
}
