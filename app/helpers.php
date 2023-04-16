<?php

use App\Models\Unit;

function GetUnit($id){
    return  Unit::all()->where('id', $id)->first();
}
