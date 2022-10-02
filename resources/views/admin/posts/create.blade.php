<x-app-layout>
    <div class="w-full  mx-auto">
        <div class="flex justify-center items-center">
            <div class="card bg-neutral px-3 py-4">
                <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                            class="fa fa-arrow-left" aria-hidden="true"></i>
                        Back</button></a>


                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method="POST" action="{{ url('/admin/posts') }}" accept-charset="UTF-8"
                    class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @include ('admin.posts.form', ['formMode' => 'create'])

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
