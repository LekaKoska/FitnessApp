<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model
{
    protected $table = "packages";

    const PACK = ['Senior', "Medior", "Junior"];

    const PRICE = [100, 70, 40];
    protected $fillable = ['package', 'price'];
}
