<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Siswa extends Model
{
    use Notifiable;
    use HasFactory;
    
    protected $table = "siswa";
    protected $guarded = ["id"];
    
    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }
}
