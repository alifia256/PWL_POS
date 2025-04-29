<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticable;

class UserModel extends Authenticable
{
    use HasFactory;

    protected $table = 'm_user';       // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan
    protected $fillable = ['level_id', 'username', 'name', 'password', 'created_at', 'updated_at'];
    protected $hidden = ['password']; //jangan di tampilkan saat select
    protected $casts = ['password' => 'hashed']; //casting password agar otomatis di hash
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

}
