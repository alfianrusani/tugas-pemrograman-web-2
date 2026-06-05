<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    <a class="btn btn-primary mb-3" href="#" role="button">Create</a>
    <form action="">
        <div class="row g-3 mb-3">
            <div class="col-md-8">
                <input class="form-control" id="keyword" type="text" name="keyword" placeholder="Search Category" value="{{ request('keyword') }}">
            </div>
            <div class="col-md-4">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </form>
    <h1 class="fw-bold">List Categories</h1>
    <ul class="list-group">
        @forelse ($categories as $category)
            <li class="list-group-item">
                {{ $categories->firstItem() + $loop->index }}.
                {{ $category->name }} --
                {{ $category->code }} --
                {{ $category->description }}
                <a class="btn btn-warning btn-sm" href="#" role="button">Edit</a>
                <form action="#" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit"
                        onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                </form>
            </li>
        @empty
            <li class="list-group-item text-danger text-center">Category is not found</li>
        @endforelse
    </ul>
    <div class="mt-3">
        {{ $categories->links() }}
    </div>
</x-app>
