<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Supplier;

class SupplierController extends Controller
{
    function index() {
        Session::put('page', 'suppliers');
        return view('suppliers');
    }

    function getSuppliers() {
        $data = Supplier::orderBy('id', 'desc')->get();
        return $data;
    }

    function deleteSupplier($id) {
        $result = Supplier::find($id)->delete();

        if($result == true) {
            return 1;
        } else { 
            return 0;
        }
    }
}