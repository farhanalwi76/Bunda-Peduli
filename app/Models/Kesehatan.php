<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kesehatan';
    protected $fillable = ['id','berat_badan', 'tinggi_badan', 'lingkar_kepala', 'umur_anak'];
    protected $primaryKey = 'id';
    
}
