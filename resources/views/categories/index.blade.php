<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    <a class="btn btn-primary mb-3" href="#" role="button">Create</a>
    <h1 class="fw-bold">List Categories</h1>
    <ul class="list-group">
        @foreach ($categories as $categories)
            <li class="list-group-item">
                {{ $loop->iteration }}.
                {{ $categories->name }} --
                {{ $categories->code }} --
                {{ $categories->description }}
                <a class="btn btn-warning btn-sm" href="#" role="button">Edit</a>
                <form action="#" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit"
                        onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app>
