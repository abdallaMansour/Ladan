<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard / Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">From</th>
                                <th scope="col">Message</th>
                                <th scope="col">Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                                <tr>
                                    <th>{{ $message->id }}</th>
                                    <th>{{ $message->user_name }}</th>
                                    <th>
                                        <span
                                            style="
                                            text-wrap: nowrap;
                                            display: block;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            max-width: 400px;">{{ $message->message }}afsd;
                                            fjasd;fl jasd;kfjasd ;lkfjasd;o lfjasdiokf;j l</span>
                                    </th>
                                    <th>
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#read_{{ $message->id }}">
                                            Read
                                        </button>

                                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#response_{{ $message->id }}">
                                            Response
                                        </button>

                                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete_{{ $message->id }}">
                                            Delete
                                        </button>
                                    </th>
                                </tr>









                                <!-- Modal -->
                                <div class="modal fade" id="read_{{ $message->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete <span class="text-danger">{{ $message->name }}</span></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p style="font-weight: bold">From : <span style="font-weight: 100">{{ $message->user_name }}</span></p>
                                                <p style="font-weight: bold">Email : <span style="font-weight: 100">{{ $message->email }}</span></p>
                                                <p style="font-weight: bold">Phone : <span style="font-weight: 100">{{ $message->phone }}</span></p>
                                                <hr>
                                                {{ $message->message }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>













                                <!-- Modal -->
                                <div class="modal fade" id="response_{{ $message->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('message.response', [$message->user_name, $message->email]) }}" method="POST">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Send to <span class="text-primary">{{ $message->user_name }}</span></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">title</label>
                                                        <input type="text" name="title" class="form-control mw" id="title" />
                                                        @error('title')
                                                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message" class="form-label">message</label>
                                                        <textarea type="text" name="message" value="https://wa.me/966570803605" class="form-control mw" id="message" cols="30" rows="10"></textarea>

                                                        @error('message')
                                                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                    <button class="btn btn-primary">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                </div>







                <!-- Modal -->
                <div class="modal fade" id="delete_{{ $message->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete <span class="text-danger">{{ $message->user_name }}</span></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this message ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('message.delete', $message->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                </tbody>
                </table>

                {{ $messages->onEachSide(5)->links('pagination::bootstrap-4') }}







                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>







            </div>
        </div>
    </div>
    </div>
</x-app-layout>
