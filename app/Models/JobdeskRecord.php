<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobdeskRecord extends Model
{
    use HasFactory;

    protected $fillable = ['jobdesk', 'nama', 'hari', 'perolehan', 'target', 'average', 'keterangan'];
}
