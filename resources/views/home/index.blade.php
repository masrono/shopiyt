@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">

    {{-- ================= HERO SECTION ================= --}}
    <div class="relative bg-gradient-to-r from-blue-500 to-black rounded-2xl p-10 mb-12 text-white overflow-hidden">
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide">
                WEER SKATE STORE
            </h1>
            <p class="mt-3 text-lg text-red-100 max-w-xl">
                Skateshop Jakarta Barat
            </p>
        </div>

        {{-- Decorative --}}
        <div class="absolute right-0 top-0 opacity-10 text-[180px] font-black select-none">
            SK8
        </div>
    </div>

    {{-- ================= FILTER ================= --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-10">
        <h2 class="text-2xl font-bold text-gray-800">
            Produk Terbaru
        </h2>
        <!-- PRODUK TERBARU -->
<h2>Produk Terbaru</h2>
<p>Temukan produk terbaik sesuai kebutuhanmu</p>

<table width="100%" cellpadding="10">
    <tr align="center">
        <td>
            <img src="https://cf.shopee.co.id/file/7b24004b49e5ccc927f61c1e8b60a5c0" width="200"><br>
            <b>Asbak Kaca</b><br>
            Rp 15.500
        </td>
        <td>
            <img src="https://lzd-img-global.slatic.net/g/ff/kf/S9452a72d70ce4376a77458b8faa31b29O.jpg_720x720q80.jpg_.webp"" width="200"><br>
            <b>Asbak Putar Portable</b><br>
            Rp 76.000
        </td>
        <td>
            <img src="https://lzd-img-global.slatic.net/g/p/1af295e1326ba603e52a6abac8d2d663.jpg_720x720q80.jpg" width="200"><br>
            <b>Asbak Stainless</b><br>
            Rp 20.000
        </td>
        <td>
            <img src="https://th.bing.com/th/id/R.73bf85a150c9791d931775be05a52d53?rik=qoIoXqDelx%2f8fg&riu=http%3a%2f%2fashtrayplanet.com%2fcdn%2fshop%2fproducts%2fashtray-large-stainless-steel-thick-ash-tray-metal-3_1200x1200.jpg%3fv%3d1645358334&ehk=InkaUo4uv6EIbkwOx9xY72ps%2fDp36pHJ549qGhP2VYM%3d&risl=&pid=ImgRaw&r=0" width="200"><br>
            <b>Ashtray Square</b><br>
            Rp 45.000
        </td>
    </tr>
</table>

        <form method="GET">
            <select
                name="category"
                onchange="this.form.submit()"
                class="border border-gray-300 rounded-xl px-5 py-3 text-gray-700 focus:ring-2 focus:ring-red-600 focus:outline-none"
            >
                <option value="">🔴 Semua Kategori</option>
                @isset($categories)
                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->slug }}"
                            {{ request('category') == $category->slug ? 'selected' : '' }}
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach
                @endisset
            </select>
        </form>
    </div>

    {{-- ================= PRODUCT GRID ================= --}}
    @isset($products)
        @if ($products->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                @forelse ($products as $product)
                    <a href="{{ route('product.show', $product->slug) }}"
                        class="group bg-white dark:bg-gray-900 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition">

    {{-- IMAGE WRAPPER --}}
             <div class="relative h-56 bg-gray-100 flex items-center justify-center">
             <img
            src="{{ $product->image
                ? asset($product->image)
                : asset('images/no-image.png') }}"
            class="h-full object-contain transition-transform group-hover:scale-105"
            alt="{{ $product->name }}">

        {{-- CATEGORY BADGE --}}
        <span class="absolute top-3 left-3 bg-red-600 text-white text-xs px-3 py-1 rounded-full">
            {{ $product->category->name ?? 'MU' }}
        </span>
    </div>

    {{-- CONTENT --}}
    <div class="p-5">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white line-clamp-2">
            {{ $product->name }}
        </h3>

        <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
            Mulai dari
        </p>

        <p class="text-xl font-extrabold text-red-600 dark:text-red-500 mt-1">
            Rp {{ number_format($product->variants->min('price')) }}
        </p>

        <div class="mt-4">
            <span class="inline-block text-sm font-medium text-white bg-black px-4 py-2 rounded-lg">
                Lihat Produk
            </span>
        </div>
    </div>
</a>
@empty
@endforelse


            </div>
        @else
            <div class="text-center py-24">
                <p class="text-gray-500 text-lg">
                    Produk belum tersedia
                </p>
            </div>
        @endif

        {{-- ================= PAGINATION ================= --}}
        <div class="mt-12">
            {{ $products->withQueryString()->links() }}
        </div>
    @endisset

</div>
@endsection