<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    <form method="POST" action="{{ route('product.update', $product->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Product's Name</label>
            <input type="string" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Product's Price</label>
            <input type="unsignedInteger" class="form-control @error('price') is-invalid @enderror" id="price"
                name="price" value="{{ old('price', $product->price) }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Product's Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock"
                name="stock" value="{{ old('stock', $product->stock) }}">
            @error('stock')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Product's Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $product->description) }}">
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="hidden" name="status" value="0">
            <input class="form-check-input" type="checkbox" name="status" value="1"
                {{ old('status', $product->status) ? 'checked' : '' }}>
            <label class="form-check-label">
                Available
            </label>
        </div>
        <a class="btn btn-warning" href="{{ route('product.index') }}" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
