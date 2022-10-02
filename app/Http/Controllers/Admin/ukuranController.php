<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\ukuran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class ukuranController extends Controller
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
            $ukuran = ukuran::where('produk_id', 'LIKE', "%$keyword%")
                ->orWhere('ukuran', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ukuran = ukuran::latest()->paginate($perPage);
        }

        return view('admin.ukuran.index', compact('ukuran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.ukuran.create');
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
        
        $requestData = $request->all();
        
        ukuran::create($requestData);
        Alert::success('Info', 'Berhasil');
        return redirect('admin/ukuran')->with('flash_message', 'ukuran added!');
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
        $ukuran = ukuran::findOrFail($id);
        return view('admin.ukuran.show', compact('ukuran'));
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
        $ukuran = ukuran::findOrFail($id);
        return view('admin.ukuran.edit', compact('ukuran'));
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
        
        $requestData = $request->all();
        
        $ukuran = ukuran::findOrFail($id);
        $ukuran->update($requestData);
        Alert::success('Info', 'Berhasil');
        return redirect('admin/ukuran')->with('flash_message', 'ukuran updated!');
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
        ukuran::destroy($id);
        Alert::success('Info', 'Berhasil');
        return redirect('admin/ukuran')->with('flash_message', 'ukuran deleted!');
    }
}
