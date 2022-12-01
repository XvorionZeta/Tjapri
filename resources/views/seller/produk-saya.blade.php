@extends('layouts.app')
@section('content')
<div class="flex justify-center gap-4 px-4 py-10 mx-auto lg:px-36">
    @include('layouts.user-nav')
    <div class="w-full px-3 py-4 overflow-hidden bg-white rounded-lg shadow-lg md:p-6 drop-shadow-lg">
        {{-- Header --}}
        <h5 class="mb-2 text-lg font-bold leading-tight text-gray-900 border-b-2">Produk Saya</h5>
        {{-- Table --}}
        @livewire('components.table-product-saya')
    </div>
</div>
@endsection
