<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeTableModel extends Model
{
    protected $table='resume_table';
    protected $primaryKey='id';
    public $incrementing= true;
    protected $keyType='int';
    public $timestamps=false;
}
