@extends('template.master')

@section ('judul')
<h1> Manajemen Kelas</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="/class" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputId">Id</label>
                    <input type="text" name="Id" class="form-control" id="inputId" placeholder="Enter Id">
                  </div>

                  <div class="form-group">
                    <label for="inputnama_kelas">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="inputnama_kelas" placeholder="Enter Nama Kelas">
                  </div>

                  <div class="form-group">
                    <label for="inputnama_jurusan">Jurusan</label>
                    <input type="text" name="nama kelas" class="form-control" id="inputnama_jurusan" placeholder="Enter Nama Jurusan">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection
