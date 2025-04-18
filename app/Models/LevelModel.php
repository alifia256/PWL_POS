<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level';
    protected $primaryKey = 'level_id';
    public $timestamps = false; // tambahkan ini kalau tabel tidak punya kolom created_at & updated_at

    protected $fillable = ['level_kode', 'level_name'];
}
