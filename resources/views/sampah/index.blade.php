@extends('layouts.main')

@section('title', 'index')

@section('content')
    
    <h3>Data Pengangkutan Sampah</h3>

    <div class="mb-3 d-flex justify-content-end">
        <a href="/" class="btn btn-success">Back to landing page</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{session('success')}}
        </div>
    @endif

    <div class="card mt-4">
        <div class="card-header">
            Data Pengangkutan Sampah
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
                    @foreach ($sampah as $item)

                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td class="text-center">{{$item['kepala_keluarga']}}</td>
                        <td class="text-center">{{$item['no_rumah']}}</td>
                        <td class="text-center">{{$item['rt_rw']}}</td>
                        <td class="text-center">{{$item['total_karung_sampah']}}</td>
                        <td class="text-center">{{$item['kriteria']}}</td>
                        <td class="text-center">{{$item['tanggal_pengangkutan']}}</td>
                        <td>
                            <a href="/sampah/show/{{$item['id']}}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                            <a href="/sampah/edit/{{$item['id']}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <form action="/sampah/delete/{{$item['id']}}" method="post">
                                @csrf    
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-2"><i class="bi bi-x-circle-fill"></i></button>
                            </form>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection