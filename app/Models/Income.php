<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $table = 'incomes';

    protected $fillable = ['name', 'user_id', 'category_id', 'amount', 'description', 'income_date', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
