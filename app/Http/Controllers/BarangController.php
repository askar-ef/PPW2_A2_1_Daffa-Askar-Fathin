<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data_barang = Barang::all();
        $no = 0;
        return view("barang", compact('data_barang', 'no'));
    }
}
