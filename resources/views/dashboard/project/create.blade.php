<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard / Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                    <style>
                        .mw {
                            max-width: 500px;
                        }
                    </style>
                    <fieldset>
                        <legend>Contacts:</legend>
                        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="mb-3">
                                <label for="name_ar" class="form-label">Name (ar)</label>
                                <input type="text" name="name_ar" value="{{ old('name_ar') }}" class="form-control mw" id="name_ar" aria-describedby="emailHelp">
                                @error('name_ar')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name_en" class="form-label">Name (en)</label>
                                <input type="text" name="name_en" value="{{ old('name_en') }}" class="form-control mw" id="name_en" aria-describedby="emailHelp">
                                @error('name_en')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description_ar" class="form-label">Description (ar)</label>
                                <input type="text" name="description_ar" value="{{ old('description_ar') }}" class="form-control mw" id="description_ar"
                                    aria-describedby="emailHelp">
                                @error('description_ar')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description_en" class="form-label">Description (en)</label>
                                <input type="text" name="description_en" value="{{ old('description_en') }}" class="form-control mw" id="description_en"
                                    aria-describedby="emailHelp">
                                @error('description_en')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="web_link" class="form-label">Web link</label>
                                <input type="text" name="web_link" value="{{ old('web_link') }}" class="form-control mw" id="web_link" aria-describedby="emailHelp">
                                @error('web_link')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ios_link" class="form-label">IOS link</label>
                                <input type="text" name="ios_link" value="{{ old('ios_link') }}" class="form-control mw" id="ios_link" aria-describedby="emailHelp">
                                @error('ios_link')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="android_link" class="form-label">Android link</label>
                                <input type="text" name="android_link" value="{{ old('android_link') }}" class="form-control mw" id="android_link"
                                    aria-describedby="emailHelp">
                                @error('android_link')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" name="image" onchange="change_image(event)" type="file" id="formFile">
                                <img class="mt-3" width="100" id="main_image">
                                @error('image')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Cerate</button>

                        </form>
                    </fieldset>

                </div>
            </div>
        </div>
    </div>

    <script>
        function change_image(e) {
            if (e.target.files.length > 0) {
                let img = document.getElementById('main_image');
                let src = URL.createObjectURL(e.target.files[0]);
                img.src = src;
            }
        }
    </script>
</x-app-layout>
