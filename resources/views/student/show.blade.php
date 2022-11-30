@extends('template.master')

@section('judul')
<h1> Manajemen Siswa </h1>

@endsection

@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="/student"method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nomor Induk Siswa</label>
                    <input type="text" name="nomor_induk_siswa" class="form-control" id="inputnis" placeholder="Enter Nomor Induk Siswa" value="{{ $showSiswaById->nomor_induk_siswa }}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="inputNama">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Enter Nama Siswa" value="{{ $showSiswaById->nama }}" disabled>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Enter alamat" value="{{ $showSiswaById->alamat }}" disabled>
                  </div>
                  <div class="form-group">
                  <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="L" disabled {{ $showSiswaById->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                  <option value="P" disabled {{ $showSiswaById->jenis_kelamin == "P" ? "selected" : "" }}>Perempuan</option>
               </select>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a class="btn btn-primary" href="/student">Back</a>
                </div>
              </form>
</div>
@endsection