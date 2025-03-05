<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // Menentukan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; // Menentukan primary key dari tabel yang digunakan

    protected $fillable = ['user_id', 'username', 'name', 'level_id', 'password', 'created_at', 'updated_at'];

    
}
