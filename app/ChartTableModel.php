<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chartTableModel extends Model
{

    protected $table='chart_table';
    protected $primaryKey='id';
    public $incrementing= true;
    protected $keyType='int';
    public $timestamps=false;



}
