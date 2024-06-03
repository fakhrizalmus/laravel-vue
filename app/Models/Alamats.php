<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Customers;

class Alamats extends Model
{
    use HasFactory;
    protected $table = 'alamats';
    protected $guarded = [
        'id',
    ];
    public function alamats()
    {
        return $this->belongsTo(Customers::class, 'customer_id');
    }
}
