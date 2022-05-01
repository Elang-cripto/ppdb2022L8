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
            {{-- <div class="col-12"> --}}
              <div class="col-md-8"> 
                <div class="card">
                  <div class="card-header">
                    <table id="manage" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                          @php $no = 1; @endphp
                          @foreach ($data as $baca)
                          <tr>
                                <td>{{ $no++ }}</td>
                                <td><img alt="Avatar" class="img-circle elevation-2" src="{{ asset('foto/admin/'.$baca->foto) }}" height="50" width="50">{{ $baca->name }}</td>
                                <td>{{ $baca->email }}</td>
                                <td>{{ $baca->jabatan }}</td>
                                <td>
                                    <a href="/admin/manageedit/{{$baca->id}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="/admin/managedel/{{$baca->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-trash" ></i></a>
                                </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="col-md-4">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Tambah User Baru</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/admin/manageupdate/{{ $cari->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ $cari->email }}" placeholder="Enter email" required>
                      </div>
                      <div class="form-group">
                        <label for="fullname">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" id="fullname" value="{{ $cari->name }}" placeholder="Nama Lengkap" required>
                      </div>
                      <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select type="text" name="jabatan" id="jabatan" class="form-control" required>
                          <option value="" {{ ( $cari->jabatan === "") ? 'selected' :'' }}>-- Pilih --</option>
                          <option value="admin" {{ ( $cari->jabatan === "admin") ? 'selected' :'' }}>ADMIN</option>
                          <option value="panitia" {{ ( $cari->jabatan === "panitia") ? 'selected' :'' }}>PANITIA</option>
                          <option value="member" {{ ( $cari->jabatan === "member") ? 'selected' :'' }}>OPERATOR</option>
                          <option value="siswa" {{ ( $cari->jabatan === "siswa") ? 'selected' :'' }}>SISWA</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password Baru</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Foto</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                        </div>
                        <small><i>Foto ukuran perbandingan 50x50</i></small>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.card -->
            {{-- </div> --}}
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  @endsection
  <!-- /.content-wrapper -->