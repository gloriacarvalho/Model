<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function teste(){
        $character = new Character();
        $character->name = 'Archer';
        $character->level = 1;
        $character->hp = 20;
        $character->mp = 15;
        $character->attack = 15;
        $character->defense = 20;
        $character->special_attack = 35;
        $character->special_defense = 10;
        $character->speed = 50;

        $character->save();

        // dd($character);    

        $character = new Character();
        $character = $character->where('id',1)->first();

        $character->attack = 50;

        $character ->save(); 

    }
}