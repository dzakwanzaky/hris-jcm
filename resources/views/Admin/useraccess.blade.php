@extends('Admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-12" style="background:white">
            <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>
              <br />
              <h2 class="box-title">Daftar Akses Karyawan</h2>
              <form action="/tambahuser" method="get">
                  <td>
                    <button type="submit" class="btn btn-flat btn-success">+ Tambah Akses</button>
                  </td>
                </form>
             </div>
            </div>
            <br />
            <table class="table table-bordered table-striped table-responsive-xl" id="datauser">
              <thead>
              <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                <th>No.</th>
                <th>NIK</th>
                <th>ID Departemen</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <body>
              @php $no = 1; @endphp
                @foreach($data as $d)
                  <tr style="text-transform: uppercase">
                      <td>{{ $no++ }}</td>
                      <td>{{ $d->id }}</td>
                      <td>{{ $d->id_departemen }}</td>
                      <td>{{ $d->name }}</td>
                      <td>{{ $d->email }}</td>
                      <td>{{ $d->role }}</td>
                      <td>
                          <form action="{{ route('useraccess.destroy', $d->id) }}" method="post" class="destroy">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                        <a href="{{route('useraccess.edit',$d->id)}}" class="btn btn-sm btn-success">Edit</a> 
                        <button class="btn btn-sm btn-danger" type="submit">DELETE</button>
                      </form>

                       </td>
                </tr>
                @endforeach

                </body>
            </table>
          </div><!-- /.col -->
          <div class="col-sm-6">
          
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <!-- /.content-header -->
@endsection
@section('sweet')
    <script>
      $(document).ready( function () {
      $('#datauser').DataTable();
      });
</script>
<script>
      var isiPesan = '{{Session::get('useraccess_success') }}';
      var exist = '{{Session::has('useraccess_success') }}';
      if(exist){
        Swal.fire(
          'Sukses!',
            isiPesan,
          'success'
        )
      }
</script>
<script>
        $('.destroy').submit(function(e){
          e.preventDefault();
          Swal.fire({
            title: 'Apakah anda yakin untuk menghapus akses user?',
            text : "Data akan hilang secara permanent!",
            type : 'warning',
            showCancelButton : true,
            confirmButtonColor : '#3085d6',
            cancelButtonColor : '#d33',
            cancelButtonText : 'Batalkan',
            confirmButtonText: 'Ya, Hapus Data!'
          }).then((result)=> {
              if (result.value){
                Swal.fire( 
                  'Deleted!',
                  "Your file has been deleted.",
                  'success'
                )
                this.submit();
              }
              else {
                Swal.fire("Di Batalkan", "Data anda masih tersimpan", "error");
            }
          })
        });
</script>
@endsection