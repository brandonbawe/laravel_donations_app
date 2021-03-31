<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $table = 'donations';

    protected $primaryKey = 'id';

    protected $fillable = ['donation_name', 'donation_purpose', 'goal_amount'];
}
