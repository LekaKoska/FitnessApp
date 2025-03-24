<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPackageModel extends Model
{
    protected  $table = "user_package";

    protected $fillable = ['user_id', "package_id"];


    public function typePackage()
    {
        return $this->hasOne(PackageModel::class, "id", "package_id");
    }

}
