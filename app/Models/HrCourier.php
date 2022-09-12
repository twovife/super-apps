<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrCourier extends Model
{
    use HasFactory;

    protected $fillable = [
        'hc_employee_id',
        'kurir',
        'kendaraan',
        'hub',
    ];
}
