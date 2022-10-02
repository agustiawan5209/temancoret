<x-app-layout>
  <div class="w-full  mx-auto">
        <div class="flex justify-center items-center">
            <div class="card bg-neutral px-3 py-4">
                <div class="flex-justifybetween items-center">

                        <a href="{{ url('/admin/ukuran') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/ukuran/' . $ukuran->id . '/edit') }}" title="Edit ukuran"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/ukuran' . '/' . $ukuran->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-error btn-sm" title="Delete ukuran" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        </div>
                        <br/>
                        <br/>

                        <div class="overflow-x-auto">
                            <table class="table w-full">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ukuran->id }}</td>
                                    </tr>
                                    <tr><th> Produk Id </th><td> {{ $ukuran->produk_id }} </td></tr><tr><th> Katalog </th><td> {{ $ukuran->katalog }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
