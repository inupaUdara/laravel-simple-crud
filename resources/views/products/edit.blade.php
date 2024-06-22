<x-layout>
    <h1>Edit Product</h1>

    <x-errors/>

    <form method="POST" action="{{route('products.update', $product)}}">
        @method('PATCH')
        <x-products.form :product="$product"/>
    </form>
</x-layout>
