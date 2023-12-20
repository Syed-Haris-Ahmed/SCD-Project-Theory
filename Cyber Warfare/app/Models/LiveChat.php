<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveChat extends Model
{
    use HasFactory;

  protected  $primaryKey = 'status';

  protected $table = 'LiveChatStatus';

  public $timestamps = false;

  protected $fillable =[ 'status'];


}
