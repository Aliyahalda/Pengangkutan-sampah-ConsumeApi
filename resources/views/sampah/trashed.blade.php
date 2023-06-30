@extends('layouts.main')

@section('title', 'trashed')

@section('content')
    
    <h3>Trashed</h3>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{session('success')}}
        </div>
        
    @endif

    <div class="card mt-4">
        <div class="card-header">
           Trashed
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                        <tr class="text-center">
                        <th>No</th>
                        <th>Kepala Keluarga</th>
                        <th>No Rumah</th>
                        <th>RT/RW</th>
                        <th>Total Sampah</th>
                        <th>Kriteria</th>
                        <th>Tanggal Pengangkutan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trash as $item)

                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td class="text-center">{{$item['kepala_keluarga']}}</td>
                        <td class="text-center">{{$item['no_rumah']}}</td>
                        <td class="text-center">{{$item['rt_rw']}}</td>
                        <td class="text-center">{{$item['total_karung_sampah']}}</td>
                        <td class="text-center">{{$item['kriteria']}}</td>
                        <td class="text-center">{{$item['tanggal_pengangkutan']}}</td>
                        <td>
                            <a href="/sampah/restore/{{$item['id']}}" class="btn btn-primary"><i class="bi bi-arrow-counterclockwise"></i></a>
                            <a href="/sampah/deletePermanent/{{$item['id']}}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection