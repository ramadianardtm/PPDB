<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Ppdb;




class ApiController extends Controller
{
    public function index()
    {
        $response = Http::get('https://akmalweb.my.id/api/daftar_smp.php');
        $data = $response->json();
        return view('register', compact('data'));
    }
}
