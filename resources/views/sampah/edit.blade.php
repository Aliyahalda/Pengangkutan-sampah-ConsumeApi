@extends('layouts.main')

@section('title', 'Create')

@section('content')

<h3>Menambahkan Data Baru!</h3>

<div class="card mt-3">
    <div class="card-header">
        Data Baru
    </div>

    <div class="card-body">
        <form action="/sampah/update/{{$sampah['id']}}" method="post">
            @csrf
            @method('PATCH')
        <div class="row">
            <div class="mb-3 col-lg-6">
                <label for="kepala_keluarga" class="form-label">Kepala Keluarga</label>
                <input type="text" name="kepala_keluarga" value="{{$sampah['kepala_keluarga']}}" class="form-control">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="no_rumah" class="form-label">No Rumah</label>
                <input type="number" name="no_rumah" value="{{$sampah['no_rumah']}}" class="form-control">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="rt_rw" class="form-label">RT/RW</label>
                <input type="text" name="rt_rw" value="{{$sampah['rt_rw']}}" class="form-control">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="total_karung_sampah" class="form-label">Total Karung Sampah</label>
                <input type="number" name="total_karung_sampah" value="{{$sampah['total_karung_sampah']}}" class="form-control">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="tanggal_pengangkutan" class="form-label">Tanggal Pengangkutan</label>
                <input type="date" name="tanggal_pengangkutan" value="{{$sampah['tanggal_pengangkutan']}}" class="form-control">
            </div>
    </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/sampah" class="btn btn-success">Back</a>
            </div>
        </form>
    </div>
</div>
        
@endsection