@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Matkul</div>

                <div class="card-body">
                    <form action="{{ route('update.matkul', $matkul->id)}}" method="POST">
                    @csrf
                                        
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">KODE MATKUL</label>
                                    <input type="text" value="{{ is_null($matkul) ? '' : $matkul->kd_matkul }}" name="kd_matkul" class="form-control" placeholder="masukan kode matkul">
                                </div>
                                <div class="col">
                                    <label for="">NAMA MATKUL</label>
                                    <input type="text" value="{{ is_null($matkul) ? '' : $matkul->nama_matkul }}" name="nama_matkul" class="form-control" placeholder="masukan nama matkul">
                                </div>
                                <div class="col">
                                    <label for="">SKS</label>
                                    <input type="number" value="{{ is_null($matkul) ? '' : $matkul->sks }}" name="sks" class="form-control" placeholder="masukan sks matkul">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-sm btn-primary" type="submit">UPDATE</button>
                                    <a href="{{ route('matkul') }}" class="btn btn-sm btn-danger">BATAL</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
