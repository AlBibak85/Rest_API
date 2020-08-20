<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeTableModel extends Model
{
    protected $table='me_table';
    protected $primaryKey='id';
    public $incrementing= true;
    protected $keyType='int';
    public $timestamps=false;
}
