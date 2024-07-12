<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'dosen';
    protected $fillable = [ 'nidn', 'nama', 'tmp_lahir', 'tgl_lahir', 'jk', 'prodi_id'];
    protected $primaryKey = 'nidn';
    
    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id');
    }
}

