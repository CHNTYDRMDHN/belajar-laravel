@extends('template.master')

@section('judul')
    <h1>Manajemen Siswa</h1>
@endsection

@section ('content')
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Info Konfirmasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student/{{$showSiswaById->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nomor Induk Siswa</label>
                    <input type="text" name="nis" class="form-control" id="inputNIS" placeholder="Enter Nomor Induk Siswa" value="{{ $showSiswaById->nomor_induk_siswa }}" required>
                    @error('nis')
                    <div class="alert alert-danger">
                     {{$message}}
                  </div>
                    @enderror

                  </div>
                  <div class="form-group">
                    <label for="inputNama">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Enter Nama Siswa" value="{{ $showSiswaById->nama }}" required>
                    @error('nama')
                    <div class="alert alert-danger">
                     {{$message}}
                  </div>
                    @enderror

                  </div>
                  <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Enter Alamat" value="{{ $showSiswaById->alamat }}" required >
                    @error('alamat')
                    <div class="alert alert-danger">
                     {{$message}}
                  </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin">
                    <option value="L" required {{ $showSiswaById->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                    <option value="P" required {{ $showSiswaById->jenis_kelamin == "P" ? "selected" : "" }}>Perempuan</option>
                  </select>
                  @error('jenis_kelamin')
                    <div class="alert alert-danger">
                     {{$message}}
                  </div>
                    @enderror
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-warning">Save</button>
                </div>
              </form>
            </div>
@endsection