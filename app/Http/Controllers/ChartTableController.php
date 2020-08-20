<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chartTableModel;

class ChartTableController extends Controller
{
     function AllSelect(){


        $result=ChartTableModel::all();
        return $result;


    }
}
