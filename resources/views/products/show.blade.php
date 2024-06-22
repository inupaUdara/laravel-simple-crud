<x-layout>
    <h1>{{ $product-> name }}</h1>
    <p>{{ $product-> description }}</p>
    <p>{{ $product-> size }}</p>
    <a href="{{route('products.edit', $product-> id) }}">Edit</a>

    <form action="{{route('products.destroy', $product )}}" method="post">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</x-layout>
