<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    #agar id tidak bisa di modifikasi,jika selain admin yang edit
    #protected $guarded = [];
    
    #sebaliknya
    protected $fillable = ['list'];
}
