<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard / Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="overflow: auto">


                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


                    <a href="{{ route('project.create') }}" class="btn btn-primary mb-3">Add Project</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-secondary" scope="col">#</th>
                                <th class="text-secondary" scope="col">Name (<span class="text-primary">ar</span>)</th>
                                <th class="text-secondary" scope="col">Name (<span class="text-primary">en</span>)</th>
                                <th class="text-secondary" scope="col">Description (<span class="text-primary">ar</span>)</th>
                                <th class="text-secondary" scope="col">Description (<span class="text-primary">en</span>)</th>
                                <th class="text-secondary" scope="col">Web Link</th>
                                <th class="text-secondary" scope="col">IOS Link</th>
                                <th class="text-secondary" scope="col">Android Link</th>
                                <th class="text-secondary" scope="col">Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <th>{{ $project->id }}</th>
                                    <th>{{ $project->name_ar }}</th>
                                    <th>{{ $project->name_en }}</th>
                                    <th>
                                        <span class="text-ellipsis">{{ $project->description_ar }}</span>
                                    </th>
                                    <th>
                                        <span class="text-ellipsis">{{ $project->description_en }}</span>
                                    </th>
                                    <th>
                                        <span class="text-ellipsis"><a href="{{ $project->web_link }}">{{ $project->web_link }}</a></span>
                                    </th>
                                    <th>
                                        <span class="text-ellipsis"><a href="{{ $project->ios_link }}">{{ $project->ios_link }}</a></span>
                                    </th>
                                    <th>
                                        <span class="text-ellipsis"><a href="{{ $project->android_link }}">{{ $project->android_link }}</a></span>
                                    </th>
                                    <th>
                                        <div class="d-grid gap-1 mx-auto">
                                            <a class="btn btn-outline-primary btn-sm" href="{{ route('project.edit', $project->id) }}">Update</a>
                                            <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_{{ $project->id }}">
                                                Delete
                                            </button>
                                        </div>
                                    </th>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="delete_{{ $project->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete <span class="text-danger">{{ $project->name_en }}</span></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this project ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('project.delete', $project->id) }}" method="POST">
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
                </div>
                {{ $projects->onEachSide(5)->links('pagination::bootstrap-4') }}







                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>







            </div>
        </div>
    </div>
    </div>
</x-app-layout>
