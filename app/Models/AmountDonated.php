<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmountDonated extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'amount_donated';

    protected $primaryKey = 'id';

    protected $fillable = ['donation_id', 'donation_name', 'message', 'amount_donated'];
}
