<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    use HasFactory;

    protected $fillable = ["jabatan", "dosen_id"];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
