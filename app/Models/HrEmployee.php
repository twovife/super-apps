<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrEmployee extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'jabatan',
        'divisi',
        'unit',
        'kurir',
        'kendaraan',
        'hub',
        'status',
    ];

    public function kurir()
    {
        return $this->hasOne(HrCourier::class, 'hc_employee_id', 'id');
    }
}
