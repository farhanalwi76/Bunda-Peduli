<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'rombongan_belajar';
    protected $fillable = [ 'kode', 'thn_masuk', 'dosen_pa', 'prodi_id'];
    
}
