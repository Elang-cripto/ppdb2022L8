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
                <li class="breadcrumb-item"><a href="#">Home</a></li>
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
    
        <!-- form start -->
        <form action="/admin/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Horizontal Form -->
    
            <!-- DATA SISWA -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">DATA SISWA</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group row">
                        <label for="Nisn" class="col-sm-4 col-form-label">NISN</label>
                        <div class="col-sm-8">
                            <input type="text" name="nisn" class="form-control" id="Nisn" value="{{ $data->nisn }}" placeholder="nisn.data.kemdikbud.go.id" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Nama Lengkap" class="col-sm-4 col-form-label">NAMA LENGKAP</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $data->nama }}" placeholder="Sesuai Ijazah" required>
                        </div>
                        </div>
                        <!-- OPTION -->
                        <div class="form-group row">
                        <label for="Jenis Kelamin" class="col-sm-4 col-form-label">JENIS KELAMIN</label>
                        <div class="col-sm-8">
                            <select type="text" name="jk" id="Jenis Kelamin" class="form-control" required>
                            <option value="L" {{ ( $data->jk === "L") ? 'selected' :'' }}>Laki-laki</option>
                            <option value="P" {{ ( $data->jk === "P") ? 'selected' :'' }}>Perempuan</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="tmp_lahir" class="col-sm-4 col-form-label">TEMPAT LAHIR</label>
                        <div class="col-sm-8">
                            <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" value="{{ $data->tmp_lahir }}" placeholder="Sesuai Ijazah" required>
                        </div>
                        </div>
                        <!-- TANGGAL -->
                        <div class="form-group row">
                        <label for="Tanggal Lahir" class="col-sm-4 col-form-label">TANGGAL LAHIR</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                            <input type="date" name="tgl_lahir" class="form-control" value="{{ $data->tgl_lahir }}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                        <div class="col-sm-8">
                            <input type="text" name="nik" class="form-control" id="nik" value="{{ $data->nik }}" placeholder="Kartu Keluarga" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="agama" class="col-sm-4 col-form-label">AGAMA</label>
                        <div class="col-sm-8">
                            <select type="text" name="agama" id="agama" class="form-control">
                                <option value="Islam" {{ ( $data->agama === "Islam") ? 'selected' :'' }}>Islam</option>
                                <option value="Kristen" {{ ( $data->agama === "Kristen") ? 'selected' :'' }}>Kristen</option>
                                <option value="Katholik" {{ ( $data->agama === "Katholik") ? 'selected' :'' }}>Katholik</option>
                                <option value="Hindu" {{ ( $data->agama === "Hindu") ? 'selected' :'' }}>Hindu</option>
                                <option value="Budha" {{ ( $data->agama === "Budha") ? 'selected' :'' }}>Budha</option>
                                <option value="Khonghucu" {{ ( $data->agama === "Khonghucu") ? 'selected' :'' }}>Khonghucu</option>
                                <option value="Kepercayaan Kepada Tuhan YME" {{ ( $data->agama === "Kepercayaan Kepada Tuhan YME") ? 'selected' :'' }}>Kepercayaan Kepada Tuhan YME</option>
                                <option value="Lainnya" {{ ( $data->agama === "Lainnya") ? 'selected' :'' }}>Lainnya</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">ALAMAT</label>
                        <div class="col-sm-8">
                            <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $data->alamat }}" placeholder="Sesuai KK" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Rt" class="col-sm-4 col-form-label">RT / RW</label>
                        <div class="col-sm-4">
                            <input type="text" name="rt" class="form-control" id="Rt" value="{{ $data->rt }}" placeholder="000">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="rw" class="form-control" id="Rw" value="{{ $data->rw }}" placeholder="000">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Dusun" class="col-sm-4 col-form-label">DUSUN</label>
                        <div class="col-sm-8">
                            <input type="text" name="dusun" class="form-control" id="Dusun" value="{{ $data->dusun }}" placeholder="Dusun" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Kelurahan" class="col-sm-4 col-form-label">KELURAHAN</label>
                        <div class="col-sm-8">
                            <input type="text" name="kelurahan" class="form-control" id="Kelurahan" value="{{ $data->kelurahan }}" placeholder="Kelurahan" required>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group row">
                        <label for="Kecamatan" class="col-sm-4 col-form-label">KECAMATAN</label>
                        <div class="col-sm-8">
                            <input type="text" name="kecamatan" class="form-control" id="Kecamatan" value="{{ $data->kecamatan }}" placeholder="Kecamatan" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Kabupaten" class="col-sm-4 col-form-label">KABUPATEN</label>
                        <div class="col-sm-8">
                            <input type="text" name="kabupaten" class="form-control" id="Kabupaten" value="{{ $data->kabupaten }}" placeholder="Kabupaten" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Propinsi" class="col-sm-4 col-form-label">PROPINSI</label>
                        <div class="col-sm-8">
                            <input type="text" name="propinsi" class="form-control" id="Propinsi" value="{{ $data->propinsi }}" placeholder="Propinsi" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Jenis Tinggal" class="col-sm-4 col-form-label">JENIS TINGGAL</label>
                        <div class="col-sm-8">
                            <select type="text" name="jns_tinggal" id="Jenis Tinggal" class="form-control">
                            <option value="Dusun" {{ ( $data->jns_tinggal === "Dusun") ? 'selected' :'' }}>Dusun</option>
                            <option value="Salaf Putri" {{ ( $data->jns_tinggal === "Salaf Putri") ? 'selected' :'' }}>Salaf Putri</option>
                            <option value="Salaf Putra" {{ ( $data->jns_tinggal === "Salaf Putra") ? 'selected' :'' }}>Salaf Putra</option>
                            <option value="Rusunnawa" {{ ( $data->jns_tinggal === "Rusunnawa") ? 'selected' :'' }}>Rusunnawa</option>
                            <option value="Ashri" {{ ( $data->jns_tinggal === "Ashri") ? 'selected' :'' }}>Ashri</option>
                            <option value="AGA PUTRA" {{ ( $data->jns_tinggal === "AGA PUTRA") ? 'selected' :'' }}>AGA PUTRA</option>
                            <option value="AGA PUTRI" {{ ( $data->jns_tinggal === "AGA PUTRI") ? 'selected' :'' }}>AGA PUTRI</option>
                            <option value="Tahfid" {{ ( $data->jns_tinggal === "Tahfid") ? 'selected' :'' }}>Tahfid</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Status Tinggal" class="col-sm-4 col-form-label">STATUS TEMPAT TINGGAL</label>
                        <div class="col-sm-8">
                            <select type="text" name="sts_tinggal" id="Status Tinggal" class="form-control">
                                <option value="Milik Sendiri" {{ ( $data->sts_tinggal === "Milik Sendiri") ? 'selected' :'' }}>Milik Sendiri</option>
                                <option value="Rumah Orang Tua" {{ ( $data->sts_tinggal === "Rumah Orang Tua") ? 'selected' :'' }}>Rumah Orang Tua</option>
                                <option value="Rumah Saudara/Kerabat" {{ ( $data->sts_tinggal === "Rumah Saudara/Kerabat") ? 'selected' :'' }}>Rumah Saudara/Kerabat</option>
                                <option value="Rumah Dinas" {{ ( $data->sts_tinggal === "Rumah Dinas") ? 'selected' :'' }}>Rumah Dinas</option>
                                <option value="Sewa/kontrak" {{ ( $data->sts_tinggal === "Sewa/kontrak") ? 'selected' :'' }}>Sewa/kontrak</option>
                                <option value="Lainnya" {{ ( $data->sts_tinggal === "Lainnya") ? 'selected' :'' }}>Lainnya</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Transportasi" class="col-sm-4 col-form-label">TRANSPORTASI</label>
                        <div class="col-sm-8">
                            <select type="text" name="alat_trans" id="alat_trans" class="form-control">
                                <option value="Jalan kaki" {{ ( $data->alat_trans === "Jalan kaki") ? 'selected' :'' }}>Jalan kaki</option>
                                <option value="Angkutan umum/bus/pete-pete" {{ ( $data->alat_trans === "Angkutan umum/bus/pete-pete") ? 'selected' :'' }}>Angkutan umum/bus/pete-pete</option>
                                <option value="Mobil/bus antar jemput" {{ ( $data->alat_trans === "Mobil/bus antar jemput") ? 'selected' :'' }}>Mobil/bus antar jemput</option>
                                <option value="Kereta api" {{ ( $data->alat_trans === "Kereta api") ? 'selected' :'' }}>Kereta api</option>
                                <option value="Ojek" {{ ( $data->alat_trans === "Ojek") ? 'selected' :'' }}>Ojek</option>
                                <option value="Andong/bendi/sado/dokar/delman/becak" {{ ( $data->alat_trans === "Andong/bendi/sado/dokar/delman/becak") ? 'selected' :'' }}>Andong/bendi/sado/dokar/delman/becak</option>
                                <option value="Perahu penyeberangan/rakit/getek" {{ ( $data->alat_trans === "Perahu penyeberangan/rakit/getek") ? 'selected' :'' }}>Perahu penyeberangan/rakit/getek</option>
                                <option value="Kuda" {{ ( $data->alat_trans === "Kuda") ? 'selected' :'' }}>Kuda</option>
                                <option value="Sepeda" {{ ( $data->alat_trans === "Sepeda") ? 'selected' :'' }}>Sepeda</option>
                                <option value="Sepeda motor" {{ ( $data->alat_trans === "Sepeda motor") ? 'selected' :'' }}>Sepeda motor</option>
                                <option value="Mobil pribadi" {{ ( $data->alat_trans === "Mobil pribadi") ? 'selected' :'' }}>Mobil pribadi</option>
                                <option value="Lainnya" {{ ( $data->alat_trans === "Lainnya") ? 'selected' :'' }}>Lainnya</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Rt" class="col-sm-4 col-form-label">NO TELP/HP</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $data->telp }}" name="telp" data-inputmask="'mask': ['999-999-999-999', '+0999 999 999 999']" data-mask required>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Email" class="col-sm-4 col-form-label">E-MAIL</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="Email" value="{{ $data->email }}" placeholder="Kartu Keluarga" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Anak ke" class="col-sm-4 col-form-label">ANAK KE-</label>
                        <div class="col-sm-4">
                            <input type="text" name="anak_ke" class="form-control" id="Anak ke" value="{{ $data->anak_ke }}" placeholder="00">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="jml_sdr" class="form-control" id="Jumlah Saudara" value="{{ $data->jml_sdr }}" placeholder="00">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="no_kk" class="col-sm-4 col-form-label">NO KK</label>
                        <div class="col-sm-8">
                            <input type="text" name="no_kk" class="form-control" id="no_kk" value="{{ $data->no_kk }}" placeholder="Sesuai Kartu keluarga" required>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- DATA AYAH -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">DATA AYAH</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nm_ayh" class="col-sm-4 col-form-label">NAMA AYAH</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nm_ayh" class="form-control" id="nm_ayh" value="{{ $data->nm_ayh }}" placeholder="Nama Ayah" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nik_ayh" class="col-sm-4 col-form-label">NIK AYAH</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nik_ayh" class="form-control" id="nik_ayh" value="{{ $data->nik_ayh }}" placeholder="NIK Ayah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tlahir_ayh" class="col-sm-4 col-form-label">TEMPAT LAHIR AYAH</label>
                                <div class="col-sm-8">
                                    <input type="text" name="tlahir_ayh" class="form-control" id="tlahir_ayh" value="{{ $data->tlahir_ayh }}" placeholder="Kota Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lahir_ayh" class="col-sm-4 col-form-label">TANGGAL LAHIR AYAH</label>
                                <div class="col-sm-8">
                                    <input type="date" name="lahir_ayh" class="form-control" value="{{ $data->lahir_ayh }}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Pend_Ayah" class="col-sm-4 col-form-label">PENDIDIKAN AYAH</label>
                                <div class="col-sm-8">
                                    <select type="text" name="pend_ayh" id="pend_ayh" class="form-control">
                                        <option value="" {{ ( $data->pend_ayh === "") ? 'selected' :'' }}>-- Pilih --</option>
                                        <option value="Tidak Sekolah" {{ ( $data->pend_ayh === "Tidak Sekolah") ? 'selected' :'' }}>Tidak Sekolah</option>
                                        <option value="Putus SD" {{ ( $data->pend_ayh === "Putus SD") ? 'selected' :'' }}>Putus SD</option>
                                        <option value="SD Sederajad" {{ ( $data->pend_ayh === "SD Sederajad") ? 'selected' :'' }}>SD Sederajad</option>
                                        <option value="SMP Sederajad" {{ ( $data->pend_ayh === "SMP Sederajad") ? 'selected' :'' }}>SMP Sederajad</option>
                                        <option value="SMA Sederajad" {{ ( $data->pend_ayh === "SMA Sederajad") ? 'selected' :'' }}>SMA Sederajad</option>
                                        <option value="D1" {{ ( $data->pend_ayh === "D1") ? 'selected' :'' }}>D1</option>
                                        <option value="D2" {{ ( $data->pend_ayh === "D2") ? 'selected' :'' }}>D2</option>
                                        <option value="D3" {{ ( $data->pend_ayh === "D3") ? 'selected' :'' }}>D3</option>
                                        <option value="D4/S1" {{ ( $data->pend_ayh === "D4/S1") ? 'selected' :'' }}>D4/S1</option>
                                        <option value="S2" {{ ( $data->pend_ayh === "S2") ? 'selected' :'' }}>S2</option>
                                        <option value="S3" {{ ( $data->pend_ayh === "S3") ? 'selected' :'' }}>S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kerja_ayh" class="col-sm-4 col-form-label">PEKERJAAN AYAH</label>
                                <div class="col-sm-8">
                                    <select type="text" name="kerja_ayh" id="kerja_ayh" class="form-control">
                                        <option value="" {{ ( $data->kerja_ayh === "") ? 'selected' :'' }}>-- Pilih --</option>
                                        <option value="Tidak bekerja" {{ ( $data->kerja_ayh === "Tidak bekerja") ? 'selected' :'' }}>Tidak bekerja</option>
                                        <option value="Nelayan" {{ ( $data->kerja_ayh === "Nelayan") ? 'selected' :'' }}>Nelayan</option>
                                        <option value="Petani" {{ ( $data->kerja_ayh === "Petani") ? 'selected' :'' }}>Petani</option>
                                        <option value="Peternak" {{ ( $data->kerja_ayh === "Peternak") ? 'selected' :'' }}>Peternak</option>
                                        <option value="PNS/TNI/POLRI" {{ ( $data->kerja_ayh === "PNS/TNI/POLRI") ? 'selected' :'' }}>PNS/TNI/POLRI</option>
                                        <option value="Karyawan Swasta" {{ ( $data->kerja_ayh === "Karyawan Swasta") ? 'selected' :'' }}>Karyawan Swasta</option>
                                        <option value="Pedagang Kecil" {{ ( $data->kerja_ayh === "Pedagang Kecil") ? 'selected' :'' }}>Pedagang Kecil</option>
                                        <option value="Pedagang Besar" {{ ( $data->kerja_ayh === "Pedagang Besar") ? 'selected' :'' }}>Pedagang Besar</option>
                                        <option value="Wiraswasta" {{ ( $data->kerja_ayh === "Wiraswasta") ? 'selected' :'' }}>Wiraswasta</option>
                                        <option value="Wirausaha" {{ ( $data->kerja_ayh === "Wirausaha") ? 'selected' :'' }}>Wirausaha</option>
                                        <option value="Buruh" {{ ( $data->kerja_ayh === "Buruh") ? 'selected' :'' }}>Buruh</option>
                                        <option value="Pensiunan" {{ ( $data->kerja_ayh === "Pensiunan") ? 'selected' :'' }}>Pensiunan</option>
                                        <option value="Guru" {{ ( $data->kerja_ayh === "Guru") ? 'selected' :'' }}>Guru</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hasil_ayh" class="col-sm-4 col-form-label">PENGHASILAN AYAH</label>
                                <div class="col-sm-8">
                                    <select type="text" name="hasil_ayh" id="hasil_ayh" class="form-control">
                                        <option value="" {{ ( $data->hasil_ayh === "") ? 'selected' :'' }}>-- Pilih --</option>
                                        <option value="Kurang dari Rp. 500,000" {{ ( $data->hasil_ayh === "Kurang dari Rp. 500,000") ? 'selected' :'' }}>Kurang dari Rp. 500,000</option>
                                        <option value="Rp. 500,000 - Rp. 999,999" {{ ( $data->hasil_ayh === "Rp. 500,000 - Rp. 999,999") ? 'selected' :'' }}>Rp. 500,000 - Rp. 999,999</option>
                                        <option value="Rp. 1,000,000 - Rp. 1,999,999" {{ ( $data->hasil_ayh === "Rp. 1,000,000 - Rp. 1,999,999") ? 'selected' :'' }}>Rp. 1,000,000 - Rp. 1,999,999</option>
                                        <option value="Rp. 2,000,000 - Rp. 4,999,999" {{ ( $data->hasil_ayh === "Rp. 2,000,000 - Rp. 4,999,999") ? 'selected' :'' }}>Rp. 2,000,000 - Rp. 4,999,999</option>
                                        <option value="Rp. 5,000,000 - Rp. 20,000,000" {{ ( $data->hasil_ayh === "Rp. 5,000,000 - Rp. 20,000,000") ? 'selected' :'' }}>Rp. 5,000,000 - Rp. 20,000,000</option>
                                        <option value="Lebih dari Rp. 20,000,000" {{ ( $data->hasil_ayh === "Lebih dari Rp. 20,000,000") ? 'selected' :'' }}>Lebih dari Rp. 20,000,000</option>
                                        <option value="Tidak Berpenghasilan" {{ ( $data->hasil_ayh === "Tidak Berpenghasilan") ? 'selected' :'' }}>Tidak Berpenghasilan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- DATA IBU -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">DATA IBU</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nm_ibu" class="col-sm-4 col-form-label">NAMA IBU</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nm_ibu" class="form-control" id="nm_ibu" value="{{ $data->nm_ibu }}" placeholder="Nama Ibu" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nik_ibu" class="col-sm-4 col-form-label">NIK IBU</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nik_ibu" class="form-control" id="nik_ibu" value="{{ $data->nik_ibu }}" placeholder="NIK Ibu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tlahir_ibu" class="col-sm-4 col-form-label">TEMPAT LAHIR IBU</label>
                                <div class="col-sm-8">
                                    <input type="text" name="tlahir_ibu" class="form-control" id="tlahir_ibu" value="{{ $data->tlahir_ibu }}" placeholder="Kota Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lahir_ibu" class="col-sm-4 col-form-label">TANGGAL LAHIR IBU</label>
                                <div class="col-sm-8">
                                    <input type="date" name="lahir_ibu" class="form-control" value="{{ $data->lahir_ibu }}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Pend_ibu" class="col-sm-4 col-form-label">PENDIDIKAN IBU</label>
                                <div class="col-sm-8">
                                    <select type="text" name="pend_ibu" id="pend_ibu" class="form-control">
                                        <option value="" {{ ( $data->pend_ibu === "") ? 'selected' :'' }}>-- Pilih --</option>
                                        <option value="Tidak Sekolah" {{ ( $data->pend_ibu === "Tidak Sekolah") ? 'selected' :'' }}>Tidak Sekolah</option>
                                        <option value="Putus SD" {{ ( $data->pend_ibu === "Putus SD") ? 'selected' :'' }}>Putus SD</option>
                                        <option value="SD Sederajad" {{ ( $data->pend_ibu === "SD Sederajad") ? 'selected' :'' }}>SD Sederajad</option>
                                        <option value="SMP Sederajad" {{ ( $data->pend_ibu === "SMP Sederajad") ? 'selected' :'' }}>SMP Sederajad</option>
                                        <option value="SMA Sederajad" {{ ( $data->pend_ibu === "SMA Sederajad") ? 'selected' :'' }}>SMA Sederajad</option>
                                        <option value="D1" {{ ( $data->pend_ibu === "D1") ? 'selected' :'' }}>D1</option>
                                        <option value="D2" {{ ( $data->pend_ibu === "D2") ? 'selected' :'' }}>D2</option>
                                        <option value="D3" {{ ( $data->pend_ibu === "D3") ? 'selected' :'' }}>D3</option>
                                        <option value="D4/S1" {{ ( $data->pend_ibu === "D4/S1") ? 'selected' :'' }}>D4/S1</option>
                                        <option value="S2" {{ ( $data->pend_ibu === "S2") ? 'selected' :'' }}>S2</option>
                                        <option value="S3" {{ ( $data->pend_ibu === "S3") ? 'selected' :'' }}>S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kerja_ibu" class="col-sm-4 col-form-label">PEKERJAAN IBU</label>
                                <div class="col-sm-8">
                                    <select type="text" name="kerja_ibu" id="kerja_ibu" class="form-control">
                                        <option value="" {{ ( $data->kerja_ibu === "") ? 'selected' :'' }}>-- Pilih --</option>
                                        <option value="Tidak bekerja" {{ ( $data->kerja_ibu === "Tidak bekerja") ? 'selected' :'' }}>Tidak bekerja</option>
                                        <option value="Nelayan" {{ ( $data->kerja_ibu === "Nelayan") ? 'selected' :'' }}>Nelayan</option>
                                        <option value="Petani" {{ ( $data->kerja_ibu === "Petani") ? 'selected' :'' }}>Petani</option>
                                        <option value="Peternak" {{ ( $data->kerja_ibu === "Peternak") ? 'selected' :'' }}>Peternak</option>
                                        <option value="PNS/TNI/POLRI" {{ ( $data->kerja_ibu === "PNS/TNI/POLRI") ? 'selected' :'' }}>PNS/TNI/POLRI</option>
                                        <option value="Karyawan Swasta" {{ ( $data->kerja_ibu === "Karyawan Swasta") ? 'selected' :'' }}>Karyawan Swasta</option>
                                        <option value="Pedagang Kecil" {{ ( $data->kerja_ibu === "Pedagang Kecil") ? 'selected' :'' }}>Pedagang Kecil</option>
                                        <option value="Pedagang Besar" {{ ( $data->kerja_ibu === "Pedagang Besar") ? 'selected' :'' }}>Pedagang Besar</option>
                                        <option value="Wiraswasta" {{ ( $data->kerja_ibu === "Wiraswasta") ? 'selected' :'' }}>Wiraswasta</option>
                                        <option value="Wirausaha" {{ ( $data->kerja_ibu === "Wirausaha") ? 'selected' :'' }}>Wirausaha</option>
                                        <option value="Buruh" {{ ( $data->kerja_ibu === "Buruh") ? 'selected' :'' }}>Buruh</option>
                                        <option value="Pensiunan" {{ ( $data->kerja_ibu === "Pensiunan") ? 'selected' :'' }}>Pensiunan</option>
                                        <option value="Guru" {{ ( $data->kerja_ibu === "Guru") ? 'selected' :'' }}>Guru</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hasil_ibu" class="col-sm-4 col-form-label">PENGHASILAN IBU</label>
                                <div class="col-sm-8">
                                    <select type="text" name="hasil_ibu" id="hasil_ibu" class="form-control">
                                        <option value="" {{ ( $data->hasil_ibu === "") ? 'selected' :'' }}>-- Pilih --</option>
                                        <option value="Kurang dari Rp. 500,000" {{ ( $data->hasil_ibu === "Kurang dari Rp. 500,000") ? 'selected' :'' }}>Kurang dari Rp. 500,000</option>
                                        <option value="Rp. 500,000 - Rp. 999,999" {{ ( $data->hasil_ibu === "Rp. 500,000 - Rp. 999,999") ? 'selected' :'' }}>Rp. 500,000 - Rp. 999,999</option>
                                        <option value="Rp. 1,000,000 - Rp. 1,999,999" {{ ( $data->hasil_ibu === "Rp. 1,000,000 - Rp. 1,999,999") ? 'selected' :'' }}>Rp. 1,000,000 - Rp. 1,999,999</option>
                                        <option value="Rp. 2,000,000 - Rp. 4,999,999" {{ ( $data->hasil_ibu === "Rp. 2,000,000 - Rp. 4,999,999") ? 'selected' :'' }}>Rp. 2,000,000 - Rp. 4,999,999</option>
                                        <option value="Rp. 5,000,000 - Rp. 20,000,000" {{ ( $data->hasil_ibu === "Rp. 5,000,000 - Rp. 20,000,000") ? 'selected' :'' }}>Rp. 5,000,000 - Rp. 20,000,000</option>
                                        <option value="Lebih dari Rp. 20,000,000" {{ ( $data->hasil_ibu === "Lebih dari Rp. 20,000,000") ? 'selected' :'' }}>Lebih dari Rp. 20,000,000</option>
                                        <option value="Tidak Berpenghasilan" {{ ( $data->hasil_ibu === "Tidak Berpenghasilan") ? 'selected' :'' }}>Tidak Berpenghasilan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- DATA WALI -->
                    <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">DATA WALI</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                        <label for="nm_wl" class="col-sm-4 col-form-label">NAMA WALI</label>
                        <div class="col-sm-8">
                            <input type="text" name="nm_wl" class="form-control" id="nm_wl" value="{{ $data->nm_wl }}" placeholder="Nama Wali">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="nik_wl" class="col-sm-4 col-form-label">NIK WALI</label>
                        <div class="col-sm-8">
                            <input type="text" name="nik_wl" class="form-control" id="nik_wl" value="{{ $data->nik_wl }}" placeholder="NIK Wali">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="tlahir_wl" class="col-sm-4 col-form-label">TEMPAT LAHIR WALI</label>
                        <div class="col-sm-8">
                            <input type="text" name="tlahir_wl" class="form-control" id="tlahir_wl" value="{{ $data->tlahir_wl }}" placeholder="Kota Lahir">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="lahir_wl" class="col-sm-4 col-form-label">TANGGAL LAHIR WALI</label>
                        <div class="col-sm-8">
                            <input type="date" name="lahir_wl" class="form-control" value="{{ $data->lahir_wl }}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="Pend_wl" class="col-sm-4 col-form-label">PENDIDIKAN WALI</label>
                            <div class="col-sm-8">
                                <select type="text" name="pend_wl" id="pend_wl" class="form-control">
                                    <option value="" {{ ( $data->pend_wl === "") ? 'selected' :'' }}>-- Pilih --</option>
                                    <option value="Tidak Sekolah" {{ ( $data->pend_wl === "Tidak Sekolah") ? 'selected' :'' }}>Tidak Sekolah</option>
                                    <option value="Putus SD" {{ ( $data->pend_wl === "Putus SD") ? 'selected' :'' }}>Putus SD</option>
                                    <option value="SD Sederajad" {{ ( $data->pend_wl === "SD Sederajad") ? 'selected' :'' }}>SD Sederajad</option>
                                    <option value="SMP Sederajad" {{ ( $data->pend_wl === "SMP Sederajad") ? 'selected' :'' }}>SMP Sederajad</option>
                                    <option value="SMA Sederajad" {{ ( $data->pend_wl === "SMA Sederajad") ? 'selected' :'' }}>SMA Sederajad</option>
                                    <option value="D1" {{ ( $data->pend_wl === "D1") ? 'selected' :'' }}>D1</option>
                                    <option value="D2" {{ ( $data->pend_wl === "D2") ? 'selected' :'' }}>D2</option>
                                    <option value="D3" {{ ( $data->pend_wl === "D3") ? 'selected' :'' }}>D3</option>
                                    <option value="D4/S1" {{ ( $data->pend_wl === "D4/S1") ? 'selected' :'' }}>D4/S1</option>
                                    <option value="S2" {{ ( $data->pend_wl === "S2") ? 'selected' :'' }}>S2</option>
                                    <option value="S3" {{ ( $data->pend_wl === "S3") ? 'selected' :'' }}>S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kerja_wl" class="col-sm-4 col-form-label">PEKERJAAN WALI</label>
                            <div class="col-sm-8">
                                <select type="text" name="kerja_wl" id="kerja_wl" class="form-control">
                                    <option value="" {{ ( $data->kerja_wl === "") ? 'selected' :'' }}>-- Pilih --</option>
                                    <option value="Tidak bekerja" {{ ( $data->kerja_wl === "Tidak bekerja") ? 'selected' :'' }}>Tidak bekerja</option>
                                    <option value="Nelayan" {{ ( $data->kerja_wl === "Nelayan") ? 'selected' :'' }}>Nelayan</option>
                                    <option value="Petani" {{ ( $data->kerja_wl === "Petani") ? 'selected' :'' }}>Petani</option>
                                    <option value="Peternak" {{ ( $data->kerja_wl === "Peternak") ? 'selected' :'' }}>Peternak</option>
                                    <option value="PNS/TNI/POLRI" {{ ( $data->kerja_wl === "PNS/TNI/POLRI") ? 'selected' :'' }}>PNS/TNI/POLRI</option>
                                    <option value="Karyawan Swasta" {{ ( $data->kerja_wl === "Karyawan Swasta") ? 'selected' :'' }}>Karyawan Swasta</option>
                                    <option value="Pedagang Kecil" {{ ( $data->kerja_wl === "Pedagang Kecil") ? 'selected' :'' }}>Pedagang Kecil</option>
                                    <option value="Pedagang Besar" {{ ( $data->kerja_wl === "Pedagang Besar") ? 'selected' :'' }}>Pedagang Besar</option>
                                    <option value="Wiraswasta" {{ ( $data->kerja_wl === "Wiraswasta") ? 'selected' :'' }}>Wiraswasta</option>
                                    <option value="Wirausaha" {{ ( $data->kerja_wl === "Wirausaha") ? 'selected' :'' }}>Wirausaha</option>
                                    <option value="Buruh" {{ ( $data->kerja_wl === "Buruh") ? 'selected' :'' }}>Buruh</option>
                                    <option value="Pensiunan" {{ ( $data->kerja_wl === "Pensiunan") ? 'selected' :'' }}>Pensiunan</option>
                                    <option value="Guru" {{ ( $data->kerja_wl === "Guru") ? 'selected' :'' }}>Guru</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hasil_wl" class="col-sm-4 col-form-label">PENGHASILAN WALI</label>
                            <div class="col-sm-8">
                                <select type="text" name="hasil_wl" id="hasil_wl" class="form-control">
                                    <option value="" {{ ( $data->hasil_wl === "") ? 'selected' :'' }}>-- Pilih --</option>
                                    <option value="Kurang dari Rp. 500,000" {{ ( $data->hasil_wl === "Kurang dari Rp. 500,000") ? 'selected' :'' }}>Kurang dari Rp. 500,000</option>
                                    <option value="Rp. 500,000 - Rp. 999,999" {{ ( $data->hasil_wl === "Rp. 500,000 - Rp. 999,999") ? 'selected' :'' }}>Rp. 500,000 - Rp. 999,999</option>
                                    <option value="Rp. 1,000,000 - Rp. 1,999,999" {{ ( $data->hasil_wl === "Rp. 1,000,000 - Rp. 1,999,999") ? 'selected' :'' }}>Rp. 1,000,000 - Rp. 1,999,999</option>
                                    <option value="Rp. 2,000,000 - Rp. 4,999,999" {{ ( $data->hasil_wl === "Rp. 2,000,000 - Rp. 4,999,999") ? 'selected' :'' }}>Rp. 2,000,000 - Rp. 4,999,999</option>
                                    <option value="Rp. 5,000,000 - Rp. 20,000,000" {{ ( $data->hasil_wl === "Rp. 5,000,000 - Rp. 20,000,000") ? 'selected' :'' }}>Rp. 5,000,000 - Rp. 20,000,000</option>
                                    <option value="Lebih dari Rp. 20,000,000" {{ ( $data->hasil_wl === "Lebih dari Rp. 20,000,000") ? 'selected' :'' }}>Lebih dari Rp. 20,000,000</option>
                                    <option value="Tidak Berpenghasilan" {{ ( $data->hasil_wl === "Tidak Berpenghasilan") ? 'selected' :'' }}>Tidak Berpenghasilan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- KARTU KESEJAHTERAAN -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">KARTU KESEJAHTERAAN</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="no_kps" class="col-sm-4 col-form-label">NO KPS</label>
                                <div class="col-sm-8">
                                    <input type="text" name="no_kps" class="form-control" id="no_kps" value="{{ $data->no_kps }}" placeholder="Sesuai Kartu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_kip" class="col-sm-4 col-form-label">NO KIP</label>
                                <div class="col-sm-8">
                                    <input type="text" name="no_kip" class="form-control" id="no_kip" value="{{ $data->no_kip }}" placeholder="Sesuai Kartu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_kis" class="col-sm-4 col-form-label">NO KIS</label>
                                <div class="col-sm-8">
                                    <input type="text" name="no_kis" class="form-control" id="no_kis" value="{{ $data->no_kis }}" placeholder="Sesuai Kartu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_pkh" class="col-sm-4 col-form-label">NO PKH</label>
                                <div class="col-sm-8">
                                    <input type="text" name="no_pkh" class="form-control" id="no_pkh" value="{{ $data->no_pkh }}" placeholder="Sesuai Kartu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="beasiswa" class="col-sm-4 col-form-label">Beasiswa</label>
                                <div class="col-sm-8">
                                    <select type="text" name="beasiswa" id="beasiswa" class="form-control">
                                    <option value="" {{ ( $data->beasiswa === "") ? 'selected' :'' }}>-- Pilih --</option>
                                    <option value="YATIM" {{ ( $data->beasiswa === "YATIM") ? 'selected' :'' }}>YATIM</option>
                                    <option value="PIATU" {{ ( $data->beasiswa === "PIATU") ? 'selected' :'' }}>PIATU</option>
                                    <option value="YATIM PIATU" {{ ( $data->beasiswa === "YATIM PIATU") ? 'selected' :'' }}>YATIM PIATU</option>
                                    <option value="DUAFA" {{ ( $data->beasiswa === "DUAFA") ? 'selected' :'' }}>DUAFA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- LEGALITAS -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">LEGALITAS</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="no_un" class="col-sm-4 col-form-label">NO UN SD/MI</label>
                                <div class="col-sm-8">
                                    <input type="text" name="no_un" class="form-control" value="{{ $data->no_un }}" data-inputmask="'mask': ['9-99-99-99-999-999-9']" data-mask>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_skhun" class="col-sm-4 col-form-label">NO SERI SKHUN</label>
                                <div class="col-sm-8">
                                    <input type="text" name="no_skhun" class="form-control" id="no_skhun" value="{{ $data->no_skhun }}" placeholder="DN-XX DI XXXXXXX">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_ijazah" class="col-sm-4 col-form-label">NO SERI IJAZAH</label>
                                <div class="col-sm-8">
                                    <input type="text" name="no_ijazah" class="form-control" id="no_ijazah" value="{{ $data->no_ijazah }}" placeholder="DN-XX DI XXXXXXX">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- REGISTER MASUK -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">REGISTER MASUK</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="skl_asal" class="col-sm-4 col-form-label">SEKOLAH ASAL</label>
                                <div class="col-sm-8">
                                    <select name="skl_asal" id="skl_asal" class="form-control select2" required>
                                    <option value="{{ $data->skl_asal }}">{{ $data->skl_asal }}</option>
                                    <option value="SDN SEJAHTERA">SDN SEJAHTERA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jalur" class="col-sm-4 col-form-label">JALUR PENDAFTARAN</label>
                                <div class="col-sm-8">
                                    <select type="text" name="jalur" id="jalur" class="form-control">
                                    <option value="" {{ ( $data->jalur === "") ? 'selected' :'' }}>-- Pilih --</option>
                                    <option value="INDEN" {{ ( $data->jalur === "INDEN") ? 'selected' :'' }}>INDEN</option>
                                    <option value="PRESTASI" {{ ( $data->jalur === "PRESTASI") ? 'selected' :'' }}>PRESTASI</option>
                                    <option value="REGULER" {{ ( $data->jalur === "REGULER") ? 'selected' :'' }}>REGULER</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ket" class="col-sm-4 col-form-label">KETERANGAN</label>
                                <div class="col-sm-8">
                                    <select type="text" name="ket" id="ket" class="form-control">
                                    <option value="" {{ ( $data->ket === "") ? 'selected' :'' }}>-- Pilih --</option>
                                    <option value="Sains" {{ ( $data->ket === "Sains") ? 'selected' :'' }}>Sains</option>
                                    <option value="Tahfidz" {{ ( $data->ket === "Tahfidz") ? 'selected' :'' }}>Tahfidz</option>
                                    <option value="Agama" {{ ( $data->ket === "Agama") ? 'selected' :'' }}>Agama</option>
                                    <option value="Bahasa" {{ ( $data->ket === "Bahasa") ? 'selected' :'' }}>Bahasa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- UPLOAD FOTO -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">FOTO</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <center>
                                            <img src="{{ asset('foto/'.$data->foto) }}" alt="Profil" style="width: 100px">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- PROSES -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">PROSES</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="exampleCheck2">
                                Saya telah entry data sesuai dengan ketentuan berkas yang berlaku, telah kami validasi kebenaran dan saya bertanggung jawab atas kebenaran data tersebut
                                <br>
                                <b>Data setelah dikirim tidak dapat di edit kembali tanpa seijin admin.
                                </label>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Update Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @endsection
    <!-- /.content-wrapper -->