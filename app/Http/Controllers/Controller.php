<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function dashboard(){
    	$totaladmin = User::where(['role' => 'admin'])->count();
    	$totalpetugas = User::where(['role' => 'petugas'])->count();
    	$totalmahasiswa = User::where(['role' => 'mahasiswa'])->count();
    	return view('dashboard', compact('totaladmin', 'totalpetugas', 'totalmahasiswa'));
    }
}
