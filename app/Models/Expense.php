<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $table = 'expenses';

    protected $fillable = ['name', 'user_id', 'category_id', 'amount', 'description', 'expense_date', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
