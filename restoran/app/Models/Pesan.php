<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the Pesan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function makanan()
    {
        return $this->belongsTo(Makanan::class);
    }
    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
