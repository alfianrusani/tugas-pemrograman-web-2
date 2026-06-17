<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-secondary mb-3" href="{{ route('product.index') }}" role="button">Back</a>

    <ul class="list-group">
        <h4>Product's Details</h4>
        <li class="list-group-item">Name: {{ $product->name }}</li>
        <li class="list-group-item">Category: {{ $product->category->name }}</li>
        <li class="list-group-item">Price: Rp.{{ $product->price }}</li>
        <li class="list-group-item">Stock: {{ $product->stock }}</li>
        <li class="list-group-item">Description: {{ $product->description }}</li>
        <li class="list-group-item">Brand: {{ $product->brand }}</li>
        <li class="list-group-item">Status: {{ $product->status ? 'Available' : 'Unavailable' }}</li>
        <li class="list-group-item">Created At: {{ $product->created_at->format('d F Y H:i:s') }}</li>
        <li class="list-group-item">Updated At: {{ $product->updated_at-> format('d F Y H:i:s') }}</li>
        <li class="list-group-item">Last Update At: {{ $product->updated_at->diffForHumans() }}</li>
    </ul>
</x-app>
