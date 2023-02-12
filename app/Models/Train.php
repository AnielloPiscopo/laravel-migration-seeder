<?php
/*
|--------------------------------------------------------------------------
| Train Class
|--------------------------------------------------------------------------
|
| A class that represents a train istance
|
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function stringFirstLetterToUppecase($str) : string{
        return Ucwords($str);
    }

    public function replaceElementInString($oldEl,$newEl,$str) :string{
        return str_replace($oldEl , $newEl , $str);
    }
}