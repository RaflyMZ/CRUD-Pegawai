<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';

    public $timestamps = false;
    protected $fillable = ['id_pegawai','nama_pegawai','job','jenis_kelamin','no_telepon'];
}
