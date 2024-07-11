<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkTransaction extends Model
{
    protected $fillable = [
        'submitted_by',
        'submitted_when',
        'site_code',
        'activity',
        'uom',
        'block',
        'task',
        'start',
        'end',
        'mesin_id',
        'fuel',
        'check_by',
        'when_check',
        'verified_by',
        'when_verified',
        'duty',
        'reason',
    ];
}
