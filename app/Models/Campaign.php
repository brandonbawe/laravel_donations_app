<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $table = 'campaigns';

    protected $primaryKey = 'id';

    protected $fillable = ['campaign_name', 'campaign_purpose', 'goal_amount', 'user_id'];
}