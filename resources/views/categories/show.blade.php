<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-secondary mb-3" href="{{ route('categories.index') }}" role="button">Back</a>

    <!-- Category -->
    <ul class="list-group">
        <h4>Category's Details</h4>
        <li class="list-group-item">Name: {{ $category->name }}</li>
        <li class="list-group-item">Created At: {{ $category->created_at->format('d F Y H:i:s') }}</li>
        <li class="list-group-item">Updated At: {{ $category->updated_at->format('d F Y H:i:s') }}</li>
        <li class="list-group-item">Last Update At: {{ $category->updated_at->diffForHumans() }}</li>
        <li class="list-group-item">Code: {{ $category->code }}</li>
        <li class="list-group-item">Description: {{ $category->description }}</li>
    </ul>
    <!-- Products -->
    <ul class="list-group mt-3">
        <h4>Category's Product List</h4>
        @foreach ($category->products as $product)
        <li class="list-group-item">{{ $product->name }}</li>
        @endforeach
    </ul>
</x-app>
