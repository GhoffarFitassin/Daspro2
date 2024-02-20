<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $table = 'transaksis';

    protected $guarded = ['id'];

    public function outlet(){
        return $this->belongsTo(Outlet::class);
    }
    public function member(){
        return $this->belongsTo(Member::class);
    }
    public function paket(){
        return $this->belongsTo(Paket::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
