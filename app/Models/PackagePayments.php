<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePayments extends Model
{
    use HasFactory;

    protected $table = 'package_payments';

    public function package(){
        return $this->hasOne(Packages::class,'id','package_id');
    }
}
