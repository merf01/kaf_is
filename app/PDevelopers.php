<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class PDevelopers extends Model
{
    //
    //
    // public $table='developers';
//     public getIndex(){
$developers=DB::table('developers')->get();
// return $developers;
// }
}
