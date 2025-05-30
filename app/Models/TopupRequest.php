<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopupRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'amount', 'status', 'action_by'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
