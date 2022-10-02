<x-app-layout title="Produk">
    <x-slot name='title'>Produk</x-slot>
    @include('sweetalert::alert')
    <div class="w-full sm:px-5 md:py-10 mx-auto">
        <div class="sm:flex justify-between items-center">
            <a href="{{ url('/admin/produk/create') }}" class="btn btn-neutral" title="Add New produk">
                Tambah
            </a>

            <form method="GET" action="{{ url('/admin/produk') }}" accept-charset="UTF-8" role="search">
                @csrf
                <div class="input-group">
                    <input type="text" class="input max-w-md sm:w-max" name="search" placeholder="Search..."
                        value="{{ request('search') }}">
                    <span class="input-group">
                        <button class="btn " type="submit">
                            Cari
                        </button>
                    </span>
                </div>
            </form>
        </div>
            <x-table.table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Stok</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr>
                            <x-table.td>{{ $loop->iteration }}</x-table.td>
                            <x-table.td>{{ $item->nama }}</x-table.td>
                            <x-table.td>
                                <img src="{{ asset('upload/' . $item->gambar) }}" class="w-32 text-center"
                                    alt="Gambar" srcset="">
                                </x-table.td>
                                <x-table.td>{{ $item->stok }}</x-table.td>
                                <x-table.td>
                                    <a href="{{ url('/admin/produk/' . $item->id) }}" title="View produk"><button
                                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                            View</button></a>
                                    <a href="{{ url('/admin/produk/' . $item->id . '/edit') }}"
                                        title="Edit produk"><button class="btn btn-success btn-sm"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                    <form method="POST" action="{{ url('/admin/produk' . '/' . $item->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-error btn-sm" title="Delete produk"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </x-table.td>
                        </tr>
                    @endforeach
                </tbody>
            </x-table.table>
            <div class="pagination-wrapper"> {!! $produk->appends(['search' => Request::get('search')])->render() !!} </div>
        {{-- </div> --}}

    </div>
</x-app-layout>
