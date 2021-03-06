@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
      <br/>
        <div  style="display:block; margin-left:auto; margin-right: auto;"  >             
          <img src="{{DB::table('model_karyawans')->where('nik', '=', Auth::user()->id)->value('file')}}" class="img-circle elevation-3" style="width:150px; height:150px; border:2px solid black; display: block;
                    margin-left: auto; margin-right: auto;">
          <br/>      
              <h4 style="text-align:center; text-transform: capitalize; color: #000000">Selamat Datang "{{ Auth::user()->name }}"</h4>      
              <div class="panel-heading" style="text-align:center;font-size:16px">Silahkan Pilih Salah Satu</div>  
                    <div class="panel-body">
                        <table class="table table-responsive">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                  <form action="/cuti" method="get">   
                                    <td>
                                      <button type="submit" class="btn btn-flat btn-primary">Cuti</button>
                                    </td>
                                  </form>
                                  <form action="/izin" method="get">
                                     <td>
                                      <button type="submit" class="btn btn-flat btn-primary">Izin</button>
                                     </td>
                                  </form>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('sweet')
  <script>
      var isiPesan = '{{Session::get('info') }}';
      var exist = '{{Session::has('info') }}';
      if(exist){
        Swal.fire(
          'Pengumuman!',
          isiPesan,
          'info'
        )
      }
  </script>
  <script>
      var isiPesan = '{{Session::get('cuti_success') }}';
      var exist = '{{Session::has('cuti_success') }}';
      if(exist){
        Swal.fire(
          'Sukses!',
          isiPesan,
          'success'
        )
      }
  </script>
    <script>
      var isiPesan = '{{Session::get('izin_success') }}';
      var exist = '{{Session::has('izin_success') }}';
      if(exist){
        Swal.fire(
          'Sukses!',
          isiPesan,
          'success'
        )
      }
  </script>
@endsection


