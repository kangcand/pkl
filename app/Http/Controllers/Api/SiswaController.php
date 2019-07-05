<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->save();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }


    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->save();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
