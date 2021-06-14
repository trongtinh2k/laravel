<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function categoriesCompanies(){
        return $this->hasMany(companies::class,'category_id','category_id');
    }

}
