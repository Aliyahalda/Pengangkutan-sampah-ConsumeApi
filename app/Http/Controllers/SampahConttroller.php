<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class SampahConttroller extends Controller
{

    public function index()
    {
        $data = (new BaseApi)->index('/api/sampah');
        $sampah = $data->json();

        return view('sampah.index')->with('sampah', $sampah['data']);
    }

    public function create()
    {
        return view('sampah.create');
    }
   
    public function store(Request $request)
    {
        $upload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            'kriteria' => $request->kriteria,
            'tanggal_pengangkutan' => $request->tanggal_pengangkutan,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->create('/api/sampah/store', $upload);

        return redirect('sampah')->with('success', 'Data Berhasil ditambahkan!');
    }

    public function show($id)
    {
        $data = (new BaseApi)->detail('/api/sampah', $id);
        $response = $data->json();

        return view('sampah.show')->with('sampah', $response['data']);
    }

    public function edit($id)
    {
        $data = (new BaseApi)->detail('/api/sampah', $id);
        $response = $data->json();

        return view('sampah.edit')->with('sampah', $response['data']);
    }

    public function update(Request $request, $id)
    {
        $payload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            'kriteria' => $request->kriteria,
            'tanggal_pengangkutan' => $request->tanggal_pengangkutan,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->update('/api/sampah/update',$id, $payload);

        return redirect('sampah')->with('success', 'Data Berhasil di edit!');
    }

    public function destroy($id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/sampah/delete',$id);

        return redirect()->back()->with('success', 'Data Berhasil di hapus!');
    }

    public function trashed()
    {
        $data = (new BaseApi)->onlyTrashed('/api/sampah/trash/all');
        $sampah = $data->json();

        return view('sampah.trashed')->with('trash', $sampah['data']);
    }

    public function restore($id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->restore('/api/sampah/restore',$id);

        return redirect()->back()->with('success', 'Data Berhasil di kembalikan!');
    }

    public function deletePermanent($id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->forceDelete('/api/sampah/deletePermanent',$id);

        return redirect()->back()->with('success', 'Data di hapus secara permanent!');
    }
}
