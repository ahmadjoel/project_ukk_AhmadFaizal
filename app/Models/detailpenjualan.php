<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailpenjualan extends Model
{
    use HasFactory;
    protected $table = "detailpenjualan";
    protected $primaryKey = "detailid";
    public $incrementing=true;

    protected $guarded=[];
}
