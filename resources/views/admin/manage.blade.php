@extends('layout.main')

  @section('sidebar')
    @include('admin/side')
  @endsection

  @section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pendaftar</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>No Register</th>
                      <th>Nama</th>
                      <th>Tmpt, Tgl Lahir</th>
                      <th>Asal Sekolah</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        {{-- @foreach ($data as $baca) --}}
                        <tr>
                            <td>{{ $no++ }}</td>
                            {{-- <td>{{ $baca->no_reg }}</td> --}}
                            {{-- <td>{{ $baca->nama }}</td> --}}
                            {{-- <td>{{ $baca->tmp_lahir}}, {{ $baca->tgl_lahir }}</td> --}}
                            {{-- <td>{{ $baca->skl_asal }}</td> --}}
                            <td>
                                <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  @endsection
  <!-- /.content-wrapper -->