<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class profileController extends Controller
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
            $profile = profile::where('logo', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi', 'LIKE', "%$keyword%")
                ->orWhere('ig', 'LIKE', "%$keyword%")
                ->orWhere('fb', 'LIKE', "%$keyword%")
                ->orWhere('wa', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $profile = profile::latest()->paginate($perPage);
        }

        return view('admin.profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.profile.create');
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
        if ($request->hasFile('logo')) {
            $requestData['logo'] = $request->file('logo')->store('upload', 'public');
        }

        profile::create($requestData);
        Alert::success('Info', 'Berhasil');
        return redirect('admin/profile')->with('flash_message', 'profile added!');
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
        $profile = profile::findOrFail($id);
        return view('admin.profile.show', compact('profile'));
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
        $profile = profile::findOrFail($id);
        return view('admin.profile.edit', compact('profile'));
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
        $profile = profile::findOrFail($id);
        $requestData = $request->all();
        if ($request->hasFile('logo')) {
            Storage::disk('upload')->get($profile->logo);
            $requestData['logo'] = $request->file('logo')->storeAs('upload', $request->logo->getClientOriginalName());
        }

        $profile->update($requestData);
        Alert::success('Info', 'Berhasil');
        return redirect()
            ->route('profile.show', ['profile' => '1'])
            ->with('flash_message', 'profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
}
