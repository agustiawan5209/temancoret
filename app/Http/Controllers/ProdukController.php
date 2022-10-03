<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        if (!empty($keyword)) {
            $produk = Produk::where('nama', 'like', '' . $keyword . '')
                ->latest()
                ->paginate($perPage);
        } else {
            $produk = Produk::latest()->paginate($perPage);
        }

        return view('produk.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('produk.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'katalog' => 'required',
            'jenis' => 'required',
        ]);
        $requestData = $request->all();
        $nama = $request->gambar->getClientOriginalName();
        $ext = $request->gambar->getClientOriginalName();
        $content = $request->gambar->getContent();
        $request->gambar->storeAs('upload', $nama);
        // $disk = Storage::disk('upload')->put($request->gambar, $nama);
        $data = array_replace($requestData, ['gambar' => $nama]);
        Produk::create($data);
        $file = Storage::disk('public')->get('uploads\filename.jpg');
        Alert::success('Info', 'Berhasil');
        return redirect()
            ->route('produk.index')
            ->with('flash_message', 'produk added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        return view('produk.produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'jenis' => 'required',
            'katalog' => 'required',
        ]);

        $requestData = $request->all();
        $produk = Produk::findOrFail($id);
        $nama = $produk->nama;

        if (!empty($request->gambar)) {
            $nama = $request->gambar->getClientOriginalName();
            $ext = $request->gambar->getClientOriginalName();
            $content = $request->gambar->getContent();
            if (Storage::disk('upload')->exists($produk->gambar)) {
                Storage::disk('upload')->delete($produk->gambar);
                $request->gambar->storeAs('upload', $nama);
            } else {
                $request->gambar->storeAs('upload', $nama);
            }
        }
        // $disk = Storage::disk('upload')->put($request->gambar, $nama);
        $data = array_replace($requestData, ['gambar' => $nama]);
        // dd($data);
        $produk->update($data);
        Alert::success('Info', 'Berhasil');
        return redirect()
            ->route('produk.index')
            ->with('flash_message', 'produk updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        if (Storage::disk('upload')->exists($produk->gambar)) {
            Storage::disk('upload')->delete($produk->gambar);
        }
        $produk->delete();
        Alert::success('Info', 'Berhasil');
        return redirect()
            ->route('produk.index')
            ->with('flash_message', 'produk deleted!');
    }
    public function cariJenis(Request $request)
    {
        $data = $request->type;

        foreach ((object) $data as $item => $key) {
            $reqData[] = Produk::where('jenis', 'like', '' . $key . '')
                ->latest()
                ->get();
        }
        $profile = profile::find(1);
        // dd($produk);
        return view('welcome', compact('reqData', 'profile'));
    }
    public function whatsapp($id)
    {
        $produk = Produk::find($id);
        $profile = profile::find(1);
        return redirect()->to("https://wa.me/" . $profile->nomor . "?text=". $produk->nama);
    }
}
