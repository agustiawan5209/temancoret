<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\katalog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class katalogController extends Controller
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
            $katalog = katalog::where('produk_id', 'LIKE', "%$keyword%")
                ->orWhere('katalog', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $katalog = katalog::latest()->paginate($perPage);
        }

        return view('admin.katalog.index', compact('katalog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.katalog.create');
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
        
        katalog::create($requestData);
        Alert::success('Info', 'Berhasil');
        return redirect('admin/katalog')->with('flash_message', 'katalog added!');
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
        $katalog = katalog::findOrFail($id);
        return view('admin.katalog.show', compact('katalog'));
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
        $katalog = katalog::findOrFail($id);
        return view('admin.katalog.edit', compact('katalog'));
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
        
        $katalog = katalog::findOrFail($id);
        $katalog->update($requestData);
        Alert::success('Info', 'Berhasil');
        return redirect('admin/katalog')->with('flash_message', 'katalog updated!');
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
        katalog::destroy($id);
        Alert::success('Info', 'Berhasil');
        return redirect('admin/katalog')->with('flash_message', 'katalog deleted!');
    }
}
