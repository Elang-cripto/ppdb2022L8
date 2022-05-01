<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Datasiswa;
use Illuminate\Support\Str;
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
        $param = $request->all();
        $data = array(
            'id_enc' => date('YmdHis'),
            'no_reg' => 'REG-' . date('YmdHis'),
            'status' => 'RESIDU',
            'rt' => (empty($param['rt'])) ? '' : $param['rt'],
            'rw' => (empty($param['rw'])) ? '' : $param['rw'],
            'jalur' => (empty($param['jalur'])) ? '' : $param['jalur'],
        );

        // dd($data + $request->all());
        $data = Datasiswa::create($data + $request->all());

        if ($request->hasFile('foto')) {
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
            'data' => User::all(),
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
        $data->update([
            'jalur' => (empty($param['jalur'])) ? '' : $param['jalur'],
        ] +
            $request->all());

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

    public function manageadd(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        );

        $data = User::create($data);

        if ($request->hasfile('foto')) {
            $request->file('foto')->move('foto/admin', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        Alert::success('Alhamdulillah', 'Data baru berhasil ditambahkan');
        return redirect('/admin/manage');
    }

    public function manageupdate(Request $request, $id)
    {
        $data = User::Find($id);
        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        if ($request->hasfile('foto')) {
            $request->file('foto')->move('foto/admin', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        Alert::success('Alhamdulillah', 'Data baru berhasil ditambahkan');
        return redirect('/admin/manage');
    }

    public function manageedit($id)
    {
        return view('admin/manageedit', [
            'title'  => 'Edit',
            'data' => User::all(),
            'cari' => User::Find($id),
        ]);
    }

    public function managedel($id)
    {
        $data = User::Find($id);
        $data->delete();

        Alert::warning('Alhamdulillah', 'Data berhasil dihapus');
        return redirect('admin/manage');
    }
}
