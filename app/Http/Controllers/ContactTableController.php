<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactTableModel;

class ContactTableController extends Controller
{
    function contactSend(Request $request){

        $name=$request->input('name');
        $email= $request->input('email');
        $message= $request->input('message');

        $result=ContactTableModel::insert(['name'=>$name,'email'=>$email,'message'=>$message]);

        if ($result==true){
           return 1;
        }else{
            return 0;
        }


    }
}
