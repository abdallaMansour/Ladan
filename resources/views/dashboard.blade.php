<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>Users count : <b style="color: #ec6e2d">{{ $user_count }}</b></div><br>
                    <div>Messages count : <b style="color: #ec6e2d">{{ $message_count }}</b></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
