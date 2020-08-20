<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterTableModel;
class FooterTableController extends Controller
{
    function onSelect(){

        $result=FooterTableModel::all();
        return $result;

    }
}
