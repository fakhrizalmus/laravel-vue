<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = DB::table('customers as c')->leftJoin('alamats as a', 'a.customer_id', '=', 'c.id')
            ->select(
                'c.id as id_customer',
                'a.id as id_alamat',
                'c.nama',
                'c.email',
                'a.alamat',
                'c.jeniskelamin',
                'c.tglLahir',
                'c.noHp'
            )->get();
        // $data = Customers::all();
        // $customer = $data->alamats()->get();
        return response()->json($customer);
    }

    public function show($id)
    {
        $customer = DB::table('customers as c')->leftJoin('alamats as a', 'a.customer_id', '=', 'c.id')
            ->select(
                'c.id as id_customer',
                'a.id as id_alamat',
                'c.nama',
                'c.email',
                'a.alamat',
                'c.jeniskelamin',
                'c.tglLahir',
                'c.noHp'
            )->where('c.id', $id)->first();
        return response()->json($customer);
    }

    public function store(Request $request)
    {
        // return $request->all();
        $customer = new Customers();
        $customer->nama = $request->nama;
        $customer->email = $request->email;
        $customer->noHp = $request->noHp;
        $customer->jenisKelamin = $request->jenisKelamin;
        $customer->tglLahir = $request->tglLahir;
        $customer->save();
        return response()->json($customer);
    }
}
