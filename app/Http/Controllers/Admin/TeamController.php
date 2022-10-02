<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class TeamController extends Controller
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
            $team = Team::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('gambar', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi', 'LIKE', "%$keyword%")
                ->orWhere('ig', 'LIKE', "%$keyword%")
                ->orWhere('fb', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $team = Team::latest()->paginate($perPage);
        }

        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.team.create');
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
        if ($request->hasFile('gambar')) {
            $requestData['gambar'] = $request->file('gambar')->storeAs('upload', $request->gambar->getClientOriginalName());
        }

        Team::create($requestData);
        Alert::success('Info', 'Berhasil');
        return redirect('admin/team')->with('flash_message', 'Team added!');
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
        $team = Team::findOrFail($id);
        return view('admin.team.show', compact('team'));
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
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
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
        $team = Team::findOrFail($id);
        if ($request->hasFile('gambar')) {
            Storage::disk('upload')->delete($team->gambar);
            $requestData['gambar'] = $request->file('gambar')->storeAs('upload', $request->gambar->getClientOriginalName());
        }

        $team = Team::findOrFail($id);
        $team->update($requestData);
        Alert::success('Info', 'Berhasil');
        return redirect('admin/team')->with('flash_message', 'Team updated!');
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
        Team::destroy($id);
        Alert::success('Info', 'Berhasil');
        return redirect('admin/team')->with('flash_message', 'Team deleted!');
    }
}
