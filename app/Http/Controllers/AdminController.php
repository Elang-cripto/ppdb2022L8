<?php

namespace App\Http\Controllers;

use App\Models\Datasiswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/dashboard', [
            'title'  => 'Dashboard',
        ]);
    }

    public function jumlah()
    {
        return view('admin/jumlah', [
            'title'  => 'Jumlah',
        ]);
    }

    public function formulir()
    {
        return view('admin/formulir', [
            'title'  => 'Formulir',
        ]);
    }

    public function insertformulir(Request $request)
    {

        // $data['foto'] = null;

        //cek poto
        // $file = $request->file('photo');
        // if ($file) {
        //     $file->move('uploads', $file->getClientOriginalName());
        //     $data['photo'] = 'uploads/' . $file->getClientOriginalName();
        // }

        // dd($data);
        // dd($request->all());
        // dd($data + $request->all());
        Datasiswa::create([
            'id_enc' => date('YmdHis'),
            'no_reg' => 'REG-' . date('YmdHis'),
            'status' => 'RESIDU',
            'rt' => (empty($request->rt)) ? '' : $request->rt,
            'rw' => (empty($request->rw)) ? '' : $request->rw,
            'jalur' => (empty($request->jalur)) ? '' : $request->jalur,
        ] + $request->all());

        if ($request->hasfile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }


        Alert::success('Alhamdulillah', 'Data baru berhasil ditambahkan');

        return redirect('/admin/pendaftar');
    }

    public function pendaftar()
    {
        return view('admin/pendaftar', [
            'title'  => 'Pendaftar',
            'data' => Datasiswa::all(),
        ]);
    }

    public function valid()
    {
        return view('admin/pendaftar', [
            'title'  => 'Valid',
            'data' => Datasiswa::where('status', '=', 'VALID')->get(),
        ]);
    }

    public function invalid()
    {
        return view('admin/pendaftar', [
            'title'  => 'Invalid',
            'data' => Datasiswa::where('status', '=', 'INVALID')->get(),
        ]);
    }

    public function manage()
    {
        return view('admin/manage', [
            'title'  => 'Manage',
        ]);
    }

    public function edit($id)
    {

        return view('admin/edit', [
            'title'  => 'Edit',
            'data' => Datasiswa::Find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Datasiswa::Find($id);
        $data->update($request->all());

        if ($request->hasfile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        Alert::success('Alhamdulillah', 'Data berhasil update');

        return redirect('admin/edit/' . $id);
    }

    public function delete($id)
    {
        $data = Datasiswa::Find($id);
        $data->delete();

        Alert::warning('Alhamdulillah', 'Data berhasil dihapus');
        return redirect('admin/pendaftar');
    }
}
