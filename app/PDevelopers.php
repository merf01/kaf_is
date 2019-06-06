<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class PDevelopers extends Model
{
    //
    //
    // public $table='p_developers';
//     public getIndex(){
$developers=DB::table('p_developers')->get();
// return $developers;
// }
}
