<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table = 'table_system';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'standard_sheet',
        'standard_item'
    ];
}
