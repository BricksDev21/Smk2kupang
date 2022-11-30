<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(10);
        return view('admin.pengumuman.view', compact('pengumuman'));
    }

    public function create()
    {
        return view('admin.pengumuman.input');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'narasi'    => 'required',
            'dokumen'       => 'required',
            'gambar'       => 'required',
            'status'       => 'required'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/pengumuman/gambar/', $image->hashName());

        $dokumen = $request->file('dokumen');
        $dokumen->storeAs('public/pengumuman/dokumen/', $dokumen->hashName());

        $pengumuman = Pengumuman::create([
            'gambar'     => $image->hashName(),
            'dokumen'    => $dokumen->hashName(),
            'narasi'    => json_encode($request->narasi),
            'nama'       => $request->nama,
            'status'    => $request->status
        ]);

        if($pengumuman){
            return redirect()->route('admin.pengumuman')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.pengumuman')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($pengumuman_id)
    {
        $pengumuman = Pengumuman::findOrFail($pengumuman_id);
        Storage::disk('local')->delete('public/pengumuman/dokumen/'.$pengumuman->dokumen);
        Storage::disk('local')->delete('public/pengumuman/gambar/'.$pengumuman->gambar);
        $pengumuman->delete();

        if($pengumuman){
            return redirect()->route('admin.pengumuman')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.pengumuman')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($pengumuman_id)
    {
        $pengumuman = Pengumuman::findOrFail($pengumuman_id);
        return view('admin.pengumuman.edit', ['pengumuman' => $pengumuman]);
    }

    public function update(Request $request, $pengumuman_id)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'narasi'    => 'required',
            'dokumen'       => 'required',
            'gambar'       => 'required',
            'status'       => 'required'
        ]);

        $updater = Pengumuman::findOrFail($pengumuman_id);

            Storage::disk('local')->delete('public/pengumuman/dokumen/'.$updater->dokumen);
            Storage::disk('local')->delete('public/pengumuman/gambar/'.$updater->gambar);
            $dokumen = $request->file('dokumen');
            $dokumen->storeAs('public/pengumuman/dokumen/', $dokumen->hashName());
            $image = $request->file('gambar');
            $image->storeAs('public/pengumuman/gambar/', $image->hashName());
            $updater->gambar = $image->hashName();
            $updater->dokumen = $dokumen->hashName();
            $updater->narasi = json_encode($request->input('narasi'));
            $updater->status = $request->input('status');
            $updater->nama   = $request->input('nama');
            $updater-> save();

        if($updater){
            return redirect()->route('admin.pengumuman')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.pengumuman')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
