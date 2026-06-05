<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category's Name</label>
            <input type="string" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Category's Code</label>
            <input type="string" class="form-control @error('code') is-invalid @enderror" id="code" name="code">
            @error('code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Category's Description</label>
            <input type="text" class="form-control" id="description" name="description">
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <a class="btn btn-warning" href="{{ route('categories.index') }}" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
