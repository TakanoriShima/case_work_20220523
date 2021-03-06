<?php

namespace App;
use App\User; // 追加

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'user_id', 
        'date', 
        'weather', 
        'staff',
        'phone_record',
        'mail_record',
        'notice', 
        'meeting', 
        'business_trip',
        'training',
        'image',
        'other',
    ];
    
    /**
     * この業務日誌を所有するユーザー (Userモデルとの多対1の関係を定義)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
