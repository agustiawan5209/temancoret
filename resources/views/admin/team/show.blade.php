<x-app-layout>
    <div class="w-full  mx-auto">
        <div class="flex justify-center items-center">
            <div class="card bg-neutral px-3 py-4">
                <div class="flex-justifybetween items-center">

                    <a href="{{ url('/admin/team') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/admin/team/' . $team->id . '/edit') }}" title="Edit Team"><button
                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit</button></a>

                    <form method="POST" action="{{ url('admin/team' . '/' . $team->id) }}" accept-charset="UTF-8"
                        style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-error btn-sm" title="Delete Team"
                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                aria-hidden="true"></i> Delete</button>
                    </form>
                </div>
                <br />
                <br />

                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $team->id }}</td>
                            </tr>
                            <tr>
                                <th> Nama </th>
                                <td> {{ $team->nama }} </td>
                            </tr>
                            <tr>
                                <th> Gambar </th>
                                <x-table.td>
                                    <img src="{{ asset($team->gambar) }}" class="w-64 text-center"
                                        alt="Gambar" srcset="">
                                    </x-table.td>
                            </tr>
                            <tr>
                                <th> Deskripsi </th>
                                <td> {{ $team->deskripsi }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
