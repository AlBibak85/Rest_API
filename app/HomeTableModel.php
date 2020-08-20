<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeTableModel extends Model
{
    protected $table='home_table';
    protected $primaryKey='id';
    public $incrementing= true;
    protected $keyType='int';
    public $timestamps=false;
}
