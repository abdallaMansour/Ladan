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
                        .mw {max-width: 500px;}
                    </style>
                    <fieldset>
                        <legend>Contacts:</legend>
                        <form action="{{ route('contact_setting.update') }}" method="POST">

                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp</label>
                                <input type="text" name="whatsapp" value="{{ old('whatsapp') ?? $contact_setting->whatsapp }}" class="form-control mw" id="whatsapp" aria-describedby="emailHelp">
                                @error('whatsapp')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" name="twitter" value="{{ old('twitter') ?? $contact_setting->twitter }}" class="form-control mw" id="twitter" aria-describedby="emailHelp">
                                @error('twitter')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tiktok" class="form-label">Tiktok</label>
                                <input type="text" name="tiktok" value="{{ old('tiktok') ?? $contact_setting->tiktok }}" class="form-control mw" id="tiktok" aria-describedby="emailHelp">
                                @error('tiktok')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" name="instagram" value="{{ old('instagram') ?? $contact_setting->instagram }}" class="form-control mw" id="instagram"
                                    aria-describedby="emailHelp">
                                @error('instagram')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                    </fieldset>


                    <br>
                    <hr><br>


                    {{-- <fieldset>
                        <legend>Personalia:</legend>
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                        <form action="{{ route('contact_setting.update') }}" method="POST">

                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp</label>
                                <input type="text" name="whatsapp" value="{{ old('whatsapp') ?? $contact_setting->whatsapp }}" class="form-control" id="whatsapp" aria-describedby="emailHelp">
                                @error('whatsapp')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" name="twitter" value="{{ old('twitter') ?? $contact_setting->twitter }}" class="form-control" id="twitter" aria-describedby="emailHelp">
                                @error('twitter')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tiktok" class="form-label">Tiktok</label>
                                <input type="text" name="tiktok" value="{{ old('tiktok') ?? $contact_setting->tiktok }}" class="form-control" id="tiktok" aria-describedby="emailHelp">
                                @error('tiktok')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" name="instagram" value="{{ old('instagram') ?? $contact_setting->instagram }}" class="form-control" id="instagram"
                                    aria-describedby="emailHelp">
                                @error('instagram')
                                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                        </script>
                    </fieldset> --}}




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
