<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User ;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
         'owner_name' , 'number_type' , 'car_number' , 'car_letter' , 'government_car' , 'document_number' ,
        'mobile' , 'car_type' , 'car_weight1'  , 'family_number' , 'government_name' , 'id_card_number' , 'resident_number' , 'document_front_photo' ,
        'document_back_photo' , 'id_card_photo' , 'id_card_photo2' , 'car_photo' , 'resident_card_photo' , 'resident_card_photo2' , 'notes' , 'random_code'
    ];


    public function user () {
        return $this->belongsTo(User::class);
    }

}
