@extends('template.master')

@section('judul')
    <h1>Data Siswa</h1>
@endsection

@section('content')

    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Halaman Data Table</h3>
    </div>
    <div class="card-body">
    <a href=" student/create " class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i>
        Tambah Data
      </a>
        <table id="example2" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
        @forelse ($dataSiswa as $item=>$value)
          <tr>
            <td>{{ $item + 1 }}</td>
            <td>{{ $value->nomor_induk_siswa }}</td>
            <td>{{ $value->nama }}</td>
            <td>
                {{ $value->jenis_kelamin }}
            </td>
            <td>
            <form action="/student/{{$value->id}}" method="POST">
              <a class="btn btn-info mr-3" href="student/{{$value->id}}">Detail</a>
              <a class="btn btn-warning mr-3" href="student/{{$value->id}}/edit">Edit</a>
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
            </td>
          </tr>
        @empty
          <tr>
            <td>Data Masih Kosong</td>
          </tr>

        @endforelse
        </table>
        </div>
        <!-- /.card-body -->
        </div>
        </div>
        @endsection

        @push('scripts')
        <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
        <script>
        $(function () {
        $("#example2").DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
@endpush