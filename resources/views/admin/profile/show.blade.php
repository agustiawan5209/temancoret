<x-app-layout>
    <div class="w-full  mx-auto">
        <div class="flex justify-center items-center">
            <div class="card bg-neutral px-3 py-4">
                <div class="flex-justifybetween items-center">

                    <a href="{{ url('/admin/profile/' . $profile->id . '/edit') }}" title="Edit profile"><button
                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit</button></a>
                </div>
                <br />
                <br />

                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $profile->id }}</td>
                            </tr>
                            <tr>
                                <th> Logo </th>
                                <td>
                                    <img src="{{ asset(''.$profile->logo.'') }}" class="bg-base-200" alt="" srcset="">
                                </td>
                            </tr>
                            <tr>
                                <th> Nama </th>
                                <td> {{ $profile->nama }} </td>
                            </tr>
                            <tr>
                                <th> Deskripsi </th>
                                <td> {{ $profile->deskripsi }} </td>
                            </tr>
                            <tr>
                                <th> Instagram </th>
                                <td> {{ $profile->ig }} </td>
                            </tr>
                            <tr>
                                <th> Facebokk </th>
                                <td> {{ $profile->fb }} </td>
                            </tr>
                            <tr>
                                <th> Whatsapp </th>
                                <td> {{ $profile->wa }} </td>
                            </tr>
                            <tr>
                                <th> Alamat </th>
                                <td> {{ $profile->alamat }} </td>
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
