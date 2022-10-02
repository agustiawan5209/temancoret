<x-app-layout>
    <div class="w-full px-5 md:py-10 mx-auto">
        @include('sweetalert::alert')
        <div class="flex justify-between items-center">
            <a href="{{ url('/admin/ukuran/create') }}" class="btn " title="Add New ukuran">
                Tambah
            </a>

            <form method="GET" action="{{ url('/admin/ukuran') }}" accept-charset="UTF-8"
                class="form-inline my-2 my-lg-0 float-right" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search..."
                        value="{{ request('search') }}">
                    <span class="input-group">
                        <button class="btn " type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="overflow-x-auto">
            <x-table.table class="table w-full">
                <thead>
                    <tr>
                        <th>#</th><th>Produk Id</th><th>Katalog</th><th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ukuran as $item)
                    <tr>
                        <x-table.td>{{ $loop->iteration }}</x-table.td>
                        <td>{{ $item->produk_id }}</td><td>{{ $item->katalog }}</td>
                        <x-table.td>
                            <a href="{{ url('/admin/ukuran/' . $item->id) }}" title="View ukuran"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/admin/ukuran/' . $item->id . '/edit') }}" title="Edit ukuran"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/admin/ukuran' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-error btn-sm" title="Delete ukuran" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </x-table.td>
                    </tr>
                @endforeach
                </tbody>
            </x-table.table>
            <div class="pagination-wrapper"> {!! $ukuran->appends(['search' => Request::get('search')])->render() !!} </div>
        </div>

    </div>
</x-app-layout>
