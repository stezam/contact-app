<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

        // If the naming convention is not followed you can use the following 
        // to change as needed 
      
        // protected $table = "app_companies";
        // protected $primaryKey = "_id"; 
      
    
        protected $fillable = [
          "name",
          'email',
          'address',
          'website'
      ];

      public function contacts(){
        return $this->hasMany(Contact::class,"company_id");
      }

      public function user(){
        return $this->belongsTo(User::class);
      }


}
