<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    use HasFactory;
    protected $table = 'validations';

    protected $fillable = [
        'jobdesk', 'nama', 'se', 's', 'r', 'k', 'j', 'target','avg'//,'keterangan'
    ];
}
