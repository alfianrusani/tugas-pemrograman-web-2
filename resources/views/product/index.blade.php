<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    <h1 class="fw-bold">List Products</h1>
    <ul class="list-group">
        @foreach ($product as $product)
            <li class="list-group-item">
                {{ $loop->iteration }}.
                {{ $product->name }} --
                {{ $product->price }} --
                {{ $product->stock }} --
                {{ $product->description }} --
                {{ $product->status ? 'Available' : 'Unavailable' }}
            </li>
        @endforeach
    </ul>
</x-app>
