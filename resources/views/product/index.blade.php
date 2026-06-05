<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    <a class="btn btn-primary mb-3" href="{{ route('product.create') }}" role="button">Create</a>
    <h1 class="fw-bold">List Products</h1>
    <ul class="list-group">
        @foreach ($product as $product)
            <li class="list-group-item">
                {{ $loop->iteration }}.
                {{ $product->name }} --
                {{ $product->category->name }} --
                {{ $product->price }} --
                {{ $product->stock }} --
                {{ $product->description }} --
                {{ $product->status ? 'Available' : 'Unavailable' }}
                <a class="btn btn-warning btn-sm" href="{{ route('product.edit', $product->id) }}" role="button">Edit</a>
                <form action="{{ route('product.delete', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit"
                        onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app>
