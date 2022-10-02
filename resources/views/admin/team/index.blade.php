<x-app-layout>
    <div class="w-full px-5 md:py-10 mx-auto">
        @include('sweetalert::alert')
        <div class="flex justify-between items-center">
            <a href="{{ url('/admin/team/create') }}" class="btn " title="Add New Team">
                Tambah
            </a>

            <form method="GET" action="{{ url('/admin/team') }}" accept-charset="UTF-8"
                class="form-inline my-2 my-lg-0 float-right" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search..."
                        value="{{ request('search') }}">
                    <button class="btn " type="submit">
                        Cari
                    </button>
                </div>
            </form>
        </div>
        <div class="overflow-x-auto">
            <x-table.table class="table table-compact w-full">
                <thead class="bg-neutral text-white">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($team as $item)
                        <tr>
                            <x-table.td>{{ $loop->iteration }}</x-table.td>
                            <x-table.td>{{ $item->nama }}</x-table.td>
                            <x-table.td>
                                <img src="{{ asset($item->gambar) }}" class="w-32 text-center" alt="Gambar"
                                    srcset="">
                            </x-table.td>
                            <x-table.td>{{ $item->deskripsi }}</x-table.td>
                            <x-table.td>
                                <a href="{{ url('/admin/team/' . $item->id) }}" title="View Team"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View</button></a>
                                <a href="{{ url('/admin/team/' . $item->id . '/edit') }}" title="Edit Team"><button
                                        class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('/admin/team' . '/' . $item->id) }}"
                                    accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-error btn-sm" title="Delete Team"
                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i> Delete</button>
                                </form>
                            </x-table.td>
                        </tr>
                    @endforeach
                </tbody>
            </x-table.table>
            <div class="pagination-wrapper"> {!! $team->appends(['search' => Request::get('search')])->render() !!} </div>
        </div>

    </div>
</x-app-layout>
