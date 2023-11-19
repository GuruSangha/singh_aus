<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        
                        <form method="POST" action="http://localhost:8000/uploadfile" accept-charset="UTF-8" enctype="multipart/form-data">Select the file to upload.
                            {{ csrf_field() }}
                            <input name="image" type="file"><input type="submit" value="Upload File">
                        </form>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                      @endif
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
