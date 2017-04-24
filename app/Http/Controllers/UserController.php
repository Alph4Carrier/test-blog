<?php
namespace App\Http\Controllers;

use App\Http\Model\User;

class UserController extends Controller{
    public function info(){
        $info = User::firstOrNew(
	['name'=>'eati2','age'=>16]
	);
	$bool = $info->save();
	dd($info);
    }
}

