@extends('layouts.main')

@section('title', 'Detail')

@section('content')
    
<h3>Detail data sampah</h3>  

<div class="card mt-3">
    <div class="card-header">
       Bpk {{$sampah['kepala_keluarga']}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="mb-3 col-lg-6">
                <label for="kepala_keluarga" class="form-label">Kepala Keluarga</label>
                <input readonly value="{{$sampah['kepala_keluarga']}}" class="form-control">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="no_rumah" class="form-label">No Rumah</label>
                <input readonly value="{{$sampah['no_rumah']}}" class="form-control">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="rt_rw" class="form-label">RT/RW</label>
                <input readonly value="{{$sampah['rt_rw']}}" class="form-control">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="total_karung_sampah" class="form-label">Total Karung Sampah</label>
                <input readonly value="{{$sampah['total_karung_sampah']}}" class="form-control">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="total_karung_sampah" class="form-label">Kriteria</label>
                <input readonly value="{{$sampah['kriteria']}}" class="form-control">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="tanggal_pengangkutan" class="form-label">Tanggal Pengangkutan</label>
                <input readonly value="{{$sampah['tanggal_pengangkutan']}}" class="form-control">
            </div>
    </div>

        <div class="mb-3">
            <a href="/sampah" class="btn btn-success">Back</a>
        </div>
    </div>
</div>
@endsection