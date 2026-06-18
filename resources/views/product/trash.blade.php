<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    <a class="btn btn-secondary mb-3" href="{{ route('product.index') }}" role="button">Back</a>
    <form action="">
        <div class="row g-3 mb-3">
            <div class="col-md-8">
                <input class="form-control" id="keyword" type="text" name="keyword" placeholder="Search Products"
                    value="{{ request('keyword') }}">
            </div>
            <div class="col-md-4">
                <button class="btn btn-success" type="submit">Search</button>
                <a class="btn btn-warning" href="{{ route('product.trash') }}" role="button">Refresh</a>
            </div>
        </div>
    </form>
    <h1 class="fw-bold">Deleted Products</h1>
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
                <a class="btn btn-warning btn-sm" href="{{ route('product.restore', $product->id) }}"role="button"
                    onclick="return confirm('Are you sure you want to restore this data?')">Restore</a>
            </li>
        @empty
            <li class="list-group-item text-danger text-center">Product is not found</li>
        @endforelse
    </ul>
    <div class="mt-3">
        {{ $products->links() }}
    </div>
</x-app>
