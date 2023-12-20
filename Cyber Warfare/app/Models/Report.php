<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    
    protected $table = 'Reports';

    protected $primaryKey = 'reportid';

    public $timestamps = false;

    protected $fillable = ['reportid','title','description','userid'];
}
