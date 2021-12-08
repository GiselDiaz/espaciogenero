<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validacion extends Model
{
    protected $table="validacions";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
