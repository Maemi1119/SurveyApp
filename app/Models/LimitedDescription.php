<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LimitedDescription extends Model
{
    use HasFactory;
    
    public function question(){
    return $this->belongsTo(Questions::class);
    }
    
    protected $fillable = [
        'question_id',
        'limited',
    ];
}
