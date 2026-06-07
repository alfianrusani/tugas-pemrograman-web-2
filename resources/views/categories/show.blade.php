<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-secondary mb-3" href="{{ route('categories.index') }}" role="button">Back</a>

    <ul class="list-group">
        <h4>Category's Details</h4>
        <li class="list-group-item">Name: {{ $category->name }}</li>
        <li class="list-group-item">Code: {{ $category->code }}</li>
        <li class="list-group-item">Description: {{ $category->description }}</li>
        <li class="list-group-item">Created At: {{ $category->created_at->format('d F Y H:i:s') }}</li>
        <li class="list-group-item">Updated At: {{ $category->updated_at->format('d F Y H:i:s') }}</li>
        <li class="list-group-item">Last Update At: {{ $category->updated_at->diffForHumans() }}</li>
    </ul>
    <ul class="list-group mt-3">
        <h4>Category's Product List</h4>
        @forelse ($category->products as $product)
        <li class="list-group-item">{{ $product->name }}</li>
        @empty
        <li class="list-group-item text-danger text-center">Product is not listed yet</li>
        @endforelse
    </ul>
</x-app>
