<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Datasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['kelas_7', 'kelas_8', 'kelas_9', 'kelas_aktf', 'kelas_dig', 'jns_masuk', 'tgl_masuk', 'ket_out', 'tgl_out', 'alasan_out', 'nosrt_out', 'ket'];
    // protected $fillable = ['id_enc', 'nama', 'no_reg', 'nisn', 'jk', 'tmp_lahir', 'tgl_lahir', 'nik', 'agama', 'alamat', 'rt', 'rw', 'dusun', 'kelurahan', 'kecamatan', 'kabupaten', 'propinsi', 'sts_tinggal', 'jns_tinggal', 'alat_trans', 'telp', 'skl_asal', 'email', 'nm_ayh', 'nik_ayh', 'nm_ibu', 'nik_ibu', 'status'];
}
