<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    <a class="btn btn-primary mb-3" href="{{ route('product.create') }}" role="button">Create</a>
    <a class="btn btn-warning mb-3" href="{{ route('product.trash') }}" role="button">Trash</a>
    <form action="">
        <div class="row g-3 mb-3">
            <div class="col-md-4">
                <input class="form-control" id="keyword" type="text" name="keyword" placeholder="Search Products"
                    value="{{ request('keyword') }}">
            </div>
            <div class="col-md-4">
                <select class="form-select" name="category_id">
                    <option value="">All Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </form>
    <h1 class="fw-bold">List Products</h1>
    <ul class="list-group">
        @forelse ($products as $product)
            <li class="list-group-item">
                {{ $products->firstItem() + $loop->index }}.
                {{ $product->name }} --
                {{ $product->category->name }} --
                {{ $product->price }} --
                {{ $product->stock }} --
                {{ $product->description }} --
                {{ $product->brand }} --
                {{ $product->status ? 'Available' : 'Unavailable' }}
                <a class="btn btn-warning btn-sm" href="{{ route('product.edit', $product->id) }}"
                    role="button">Edit</a>
                <a class="btn btn-info btn-sm" href="{{ route('product.show', $product->id) }}" role="button">Show</a>
                <form action="{{ route('product.delete', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit"
                        onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                </form>
            </li>
        @empty
            <li class="list-group-item text-danger text-center">Product is not found</li>
        @endforelse
    </ul>
    <div class="mt-3">
        {{ $products->links() }}
    </div>
</x-app>
