<?php

namespace Modules\Leave\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Leave\Entities\LeaveType;

class Leave extends Model
{
    protected $fillable = [];

    public function type()
    {
        return $this->belongsTo(LeaveType::class);
    }
}
