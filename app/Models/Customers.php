<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Alamats;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $guarded = [
        'id',
    ];
    public function alamats()
    {
        return $this->hasMany(Alamats::class, 'customer_id');
    }
}
