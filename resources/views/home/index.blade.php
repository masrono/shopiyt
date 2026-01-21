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
<table width="100%" cellpadding="10">
    <tr allign="center">
        <td>
            <img src="public/images/p1.webp" width="200"><br>
            <b>Deck BAKER 8,25</b><br>
            Rp 750.000
        </td>
        <td>
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIHBhUSBxMWFhMVFxgZGRcYGCMdHhwbIBogGh4YHiEaJjQiGx4lHx0eIjIhJSo3OjouICAzODQwOSotLisBCgoKDg0OGhAQGi0lHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSstLS0tNS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAwEAAwEAAAAAAAAAAAAABQYHBAIDCAH/xABBEAACAQIFAwIEAgcGAwkAAAABAgADEQQFEiExBiJBE1EHMmFxFIEVIzNCUpGhFiRiscHxctHhNENzgpKis8Lw/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAIBA//EABsRAQEBAQEBAQEAAAAAAAAAAAABAjEREiFB/9oADAMBAAIRAxEAPwDcYiICIiAiIgIiICIiAiJ4u4RbtA8p4s4X5iBKxmHVOqpVp5eparSYJouAWYqGsu+/IudhvzOB8Zj6uNvh6Q9HVsSoU6b0yCwqMDfSagIG91XjzXyn6XVagbgiecpGGxOPw60xjaeuy3qMFUksL3UBDte40m3g33sD15d1WF0LmKPTqM1tJGwBIAa54F2AN+CDHyerZE8UbWNp5SVEREBERAREQEREBERAREQEREBERAREQEREBERASvZpn9LD1mGI9QBDb9mxBPuCBx4ubDY+N5P1G0UyfYSJq0hVQirx53twb8jx9PveVlOnHleYYfMKhbAOjPYarW1j6MORb2P+s7sR+xI23BG4uOPI8j33lM6myOnhsXTq5Wy0a7N21C1tz8oA4YX8Db32tLJUBx+EFLGgpUdWDaWtupW+lhvzZhtwDcciVUvbk9JaOBVcO2pOVO26nddxs222ryB7ztamtQj1ACQbi4vY+49px5bgUynBaUNkW53Ymwvc7nhRwBwAABPTR15qQ1YNToWuq3Ku/szad0W3CXvv3W+WBLJjEo1tNV1B9iwB+9p3yLweEp4NLYRFQHc6Ra59z7n6mduCxAxWGDpbf2N/y+8nSsvfERJUREQEREBERAREQEREBERAREQEREBERAREQK38RM7/ALP9I1sRpLadA0q+gnU6r8wBI58b/bmYNmXxLxWOyypQFNESopBIeqzjyCHdydj44P22mw/G0X+Hdb/xKH/yrPnjD5c+LX+7U3f/AIVLf5CbBqHQHV9DB5P+B6teuKpawFZSFVT3J3MdQ3N7m3i2wmkZljlp5lhUe4JqMR5uPSqr45F9P/qX8vmfEVKjVj+LZ2awU6yS1gQQvduLWG00b4b41s0VBjhqXA0q2h7XKagpQLfYldD2B2tYeJUTY1pcXTznCKMKwZHPf5sBYsh+puFI+pnnTrVBnZp3LIaevcABTfSFWwu19yb8dsp/SmDrU8pWvSGpn0u1mO55sABupJ4J8Hm15Y8RX/F4NhTbTWei6grs1/DJe+wOog77iUlSutfih6FU0OmtyLh6pU2BvbSgPJ9yRbi195afhHnVbO8gqvmLanWsw1e4Kq35bkjbxMQzHKzlhAxGxJIsdv8AY/l5/nsXwQoMnT1V2+V6vafeygH+u35GTpcaNERIaREQEREBERAREQEREBERAREQEREBERAREQOHOsFSzDA6MciumpTpYXFwbi4PNiLzlBXC0P3URRc8AADz7AAT3dRZjTynKHrYy+hLX0i5O9gABySTMQ6i+LT45KlHCYZUpMNN6hJe3vZdlP0uZUTZ+rL8RcipdTmk+FT0qpdEFeoRTDqxOxVu5+O0kDf5dV7SdTJaHR/TNZcCG2psQzMBqcp9SAL6Qd9v8phmdYitUxIGaVqjsjMqa2JZVDnvN9xve1/vxaaDkmcr1Hk9L+0L+o1BmovTZtIrNU7aWpvqQy3+p8TTxoGU03xHS1I4m4coukUyUtcWGym1t72/5T34jDDH4ir6TWqIQg3sLEBr7C97EicnTFYUA+EZifTCMnqG5NKopsoJN20srKb+AJ+4egi9S4tX/aVaaOredOnQU237SFax/iFuDKSqXxF6cfE5Y9ekjM9P9WqjuuLliygdxIFzY3tc24vNI6OwAyvpqhRT9ykgP1NrsfzJJ/ORWEzajmOLC0WUVAhfTffV3U2IHnQUI9t5I9L4lsV6rM4NO6emoQrpXQNtwCRe+9z/AKCdcVE7ERIUREQEREBERAREQEREBERAREQEREBERAREQOPNaS1sERVAIuNj95iHxU6RpYaicRgQFse4W2a/j8voPP3m09Q13w2VM+FQOwsdJfQLX3NyDaw3mddSVmp4BcXnZUL2mnhwDqZyOxGa/gkEkbDfnaVOJvVCoZI+e9KvVqA/iUqFt9tSv+st9CATt4EqxxjvgrBrDUgI25UMVb/3N+e817pPCsMrq1k+RmRVHGo00NInby5BF/YX42mUYqgK2OqU8FYq+IAQA+Dq0i/kAG1/+s2tjaencyTPcrwmLsrVaJ01LqNQuCKjA39wrb+Fc29rTmS06VQPibJcqBWFgVa5Cgn2Ooix23IPzTFvhjmrYfqQYSgqvRrMLseQyI1nB9mJsV9m/nuFepSq5c3rlfSKsrauLHtIYH+VvympqrZ30bVqY84zL3UYm4JVU0hwLi4uSVcg772NhceZZOi61Wpg3XG02p6SAqstrC1rfW1rXEpjZxVyUrSwuFc0FBdVFeoarKAe/tNlBt+zsQNS8XtLr0Zm36Zyw1FYspOwdQrqPZrbH7jnn6BrjYsERE5qIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIHDnILYAhQGuQCGNgQTv4PjxMe+IeSvjcwFfFkG1VFpJr09oexFxvqb5u3cbexvqvV2ZrlGTGriCFXXSUseAGcLq/K8wfMepK2Y9TiklY1MOa9NVa/8AjXuubbH22A2IA81Gf1P5bg6OZUsMr0fwbVFBofrGqpUS1gpZraXAFip5VgRuNvDHdMvkuFeouEUsC6PUVmKsCCDUsz3TkHn3BPiWLqt1yXJKD4KxNKrRNPt/dAUEfXUNQ3+w4Blv/DmpRWmHZCbVN7Ow79TrdwRp7gn2va0pLLuhunauQ4Stj8TT3BUUU/ebc7L4s7mmobe4BI5BmhYnC/gumqdKoRqPpK2prdxcM7XGwcnUQ3AbT4nZVo6cQpxpXQGDAM1z6hFhztsTYKBzvzOfN8yp4PEUqWKCmnXcUh5Pqs3bceF2a59/zhnrlqUCuO/UVl+UoysistzcksgdWR7E3I2IY7Da1i6Ywn4LAle25NzoXSu/gD/qZA18qo1KSHHodYGkC6Eqd+1HqAOR7b/lJ7pun6OHZUR1UHbWQb/bTxGuNiYiInNZERAREQEREBERAREQEREBERAREQEREBERAhurDSXJWOZKGpAqWBFxz9frPnr8OuM6pRcvspNa6AWACrd7d3k/KL230/Zdw+Krmn0VVKtp7qW43NvUXYfUzGegaww/UjV6tNClBQTrexpox0tVW/zMt9THwt7eBKjKs+JybG5hjD+mGNPRXoladMn09KlHd1BF2A1hfHeWJ4tLX1Ov6AK4+kHdxUtVAuxam9kChQbDSwSwt5N7klpV16pxOXZamLq18PiErDSq7J6D2BBa3zopsHtx7GeGY5jielKuFxWMxWIejXZWrCogFzsGAUXKdguF5sP4gZSVlzfJamZrRrYtnp1lqJ6CayRSt3Xc3/WM1rG97XAHkmLrZdSzPrOrXDuWSrQsAboLoyWa57WWouqw9h7yK/SAp4SlmGKZquIpelVqWxBJVWK66YokekF0sN1YnUVJsZJ4Y1cD0WcSlLSDUWvWLk+pU7gGqewAUCynkLe48hb8uatiMyqLmNNPw7fskIuVCHSCwI4exYbm1hxeWDKmRFanRCgpp1KosASL/l72+o95mVPMcXjlbGYCvXWhSckLYCi1IObgDQS3buSSoHyg7XGh9NZtTzalUOB3po+kPfZyNiR5Ivtc8kGZrhOpmIiQsiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgUz4vsV6ErFDbupb/T1Fv8A09pmvSuTqnRlXFKP1taqKVMn+EuMOVP/ABMz/bY+Jpnxat/YirrIAD0Tc/SoplA6MzpswyilhsJQa+GajUqEt3MDUJLItu7e5NyPeVGVac7yOjVGX4VFASlWBA/wJSclf/NYX/5zx+KOVnOMgpU6fzHFUADa9tTGmTbyAHMg6/VlXGZrQxWXYVnoCoaShnVajvpqodAuQFuwuT/h95+531pjMZk1WpluBNNaFRA1SrVXtqI6kjQPnHi4bzNSnet8iSp0X+HwY0Kj0dJBsf2qhjcb6iGa58kmdHW7qPh/ivSFk/DNpHsCtlH+UzTF/FbE47LAlShTFQPTcVEYgHQ4cqUN9ja3zeZY+u86V/hzh6WHYasXTpDb+BVDudvFwF+7CaeVbcjwVHNMtA7hQRRRp0lZkCqFHedJF2YEMCeFK2sS1/d8LMrqZTk1alXN1XEVUT3Kq5XWTySxBJ+vFuJRsm+JRyytUXPMMxqsyD+7gFTamBfvYEHSBt9Jffhrny57gK5o0qlNUr1LeoLEh2NT/wCxvM1wi4RESFkREBERAREQEREBERAREQEREBERAREQERECtfETLWzfpV6VC2otTO/0cH+e3+3MzWv01ienMUmK6dHqaKR9QOdJcG5ZCPFtiLDYg3vczYs3/wCxH7j/ADmd9WdRjKsIUrXFWoLU6aWL24LMSCqg3tx+fNqibVQo5NRwHRanMUKVbgrXbYX27BzubfmdweJXM0zj0MOaWVmoqsP1ik3DP/HpGybW53+k680xTuwbOqxNRVACk/IvFrLa3t2hSfJWSHT+By7Pl0YjGJSvYLRvpZmBOln12Ui5PYlri1zeUKfkmXHMMTppi5vufA33++1z9pdsBkrZXiqKVKrO1gBcXVAXvoUA3Uarknblb7SZwuW1Oh8wGJxPpPh3GgtTUqEJvoZhwi2susXsLDYEmSuBwbYzqWr69RQaZQqFNzZtJbT7KQNPvubW5KRlqnZ9lwoZ4KbU6np+mBT9MG5JuGW42S91F2IFmc8EGaJ8HlZcrr/iAFb1FGkfu6V06SbnURbkH2GxBnbjkCUz6ZF7Hza+97G1uWP9eD49vw8ComIVGBOtCwFuwlB2CwG1gCL35vyTGuGat8RE5rIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIFX+JebPknR1WvgwpdSgGrgXcLf62vxPn+vnD0KpxGOYviam/NiARsb/urbwPGw2O+6/F4Meg63pLqIakQtr8VFPHm3Np8x4hzUJLm5O5PvN9Hux+OOLYWFlH3JJ8sSeT/AKT35dnlfL8I9HD1XFKoGDUwRYki17MD+drE+45kYvE9tAAsTUBICk7MFN+Adwbi5FwBe1+OQF36C61q4CqmEzEethqjBdLblbkC42Osf4Prt7S206FPp7qj0MDUtTrUlrUQVLBDqZdAPOgqAvJNiQBuJja1PROpDZlsQR4I3BmufErLjjMhwmKogJUACvYWstS1ztwA5HHhjKlTepbGZpX6lq+jkYCKLitXNiARtop32dhc9x4sLje0u3QOWUsowD0sGSe4MzMQWYsOWYfMdufsBsJl2ZZm+EyGlhMbR339J6LBAngDWB2WuBq0k7+Cby9fCavVxFHEnMCpbWny3t8pHk7n62H2i8Zlf4iJCyIiAiIgIiICIiAiIgIiICIiAiIgIiICIiBX+u8QuG6aqGtfSSqkjkBmCavyvf8AKfOP9icUaBY+npAspD39RtGsIluSQDzxbfbefTXUrtSyhmoLqIKnTxfuFxv9P/3iVbM8X+Fua9JmpaSWdBqIFvIHdwT8oP5eak9Tb4+aHQ0nK1QVIJBBFiCNiCDwbz9YAKNJ387cTVcdWwyZuamKegyG2lWBDhTbZg63fSbqDzuNr3k5VyrKvwyvUaiuuxU3Uk3FhpA+a43sAfPk3m/J9MPUAq3qEg2225P19ha8+jMpwC5r0dQpZgCVeimoe908/wA7/e0qlToCjiQ9bHA0aNtlY6SqAbu5PFgNl+xbysl8364pZRWZRTYU0RSrEWV78aD5UKCfc9oHvNk8Tq+8Q3VuW18my9HrBK1OnqRCx7jrPaCP3j/I3uRY7y2fBDL6uFyCrVxnNd0dd79ugaQPpa39fuYTHYOv1ThDiMaho0wtqFJz3C47qri+zN8oHIW/8UsvwfzF8VkL0cUmk4VxRBHDKFGk25BC2H9fMyz8blfYiJCyIiAiIgIiICIiAiIgIiICIiAiIgIiICIiBEdVYhsLkjvh6ZqMCtkBAJNxsCxA/rKZlGb1caPSxlE0q1wSrtbVSvvUpslwxFxsD7XIk98U8ybKOia1agqsVNPtYXBBcAg7+x58czOelPiDgqqrTxwai2rYWuguPBJJXc22t425l5RqJ/qPHYfI6Y/SuMqoWPaQiu1jewNqZNubaubed5xZd+Ar0zVw+JqGm5/7mmKdv8LGigdSTc7kH+V57us8lOOK4zLgtVdDLVTUw9RPFioO6EHt2G59zIrLsiTCY6nVy4mhtepU5DPUK2woDftrC/uLknY7CmJ7EY3DZLQ1VayClqA5esxHLKVYsV8En6byq9W51hs6NLE9PYml69BiRTqjSX2BGlag522JHki4n71JlFKv1Z6OXUu3Z8RY7llX1PTXe+1wxHuye0hn6aes7LUIatUFN9lsHLKN9rkWJB9gB9YItuN61oYqktTKjWOIK6fw5RlDXG2vWNChSQdYN+R5kx8Da9WvgsYcwbU/rr9AL01PaOAu+1pnGI6cxGVZVTqYKs2tDewN1AABJsePHg339yBpHwPSqMDi2xrs7PVQ6mNz+zAAPtsBt7EeLSdcbnxpsREhZERAREQEREBERAREQEREBERAREQEREBERAr/AF/gDmXRmKp0gS3pMygclk71A+5UCfO6ZbhM36fWthAErFyhQE/NsdW9yVsVtbyQObX+qOeZ87ddVsR0Nn9Sjh0pmi3fS1UE0tTYnsLKAx0E6dJPgE7WlZZU78Ka9ShlJo1V2/Emna1xoakanhrCxudv4vO0tGG6eo4bNhVqOS1yidttIttT1Hf5dgwsT5JnP0VmlLPciQ4b+71ar+oyqR3FWRn0X5Q2CH23HInZnOI/SmQVWoE0mpk1VLrswpkupB8qwTexvY+NjLc0bl2V/ozG4irjgCwNWtfgMGZlZd/ColP+Y+05s3zhMGy4bK6NR3akEphSdR9NiFPHy9oOst43FjczuHx6dRZZqxiKMMoJrFyNJK/NTINjpBFzqAuANrGVTGpSx2bKenqgw5FB2da+pLIro6WvfsIF9C+F3txNHRmuR43McLTNdFoCnchKTh6jXT0ypLAU1WxOwDbXHmXn4cZKcl6aC11C1KjtUcXLbk2W7Nux0Ktz738SNy4Y3NM0otXoihT0ksQ5cEGxsVIUqdti3Fzsby9AWG0jaskREhZERAREQEREBERAREQEREBERAREQEREBERASD6t6Xw/VWXinmK7odVN7XKNa199iPcH/MAiciBjv4LEdI444apQR0rVf7vUdb01uA1QEqNSuxUFRfc/XnpxGeYvM8uq0qVCkq0V016QYuShYpZSq9llBbSQSRtzNYIuN5x0sqo0cU9SigV6mnUQTvYkjbj94/zlzSblm36ObOemqOLw5DnsapTIAFdKfbocqBfURfuuBfgCWPFZJS6jw2GqoO5dNWk6iyglQ3cOdDDYrfg+9jLJhsppYZqnpg2qNqZSe25FiQPF+SPe55Jv14eguGoKmHUKigBVUWAA2AAHAi6Z8vyhS9NN+fM9sRIWREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERA//2Q==" width="200"><br>
            <b>Deck STCL X LAWLESS 8,0</b><br>
            Rp 550.000
        </td>
        <td>
            <img src="https://shopee.co.id/Subs-Skateboard-Deck-Pro-Model-RH-8.0-8.25-i.159410276.43806619473?extraParams=%7B%22display_model_id%22%3A260559621652%2C%22model_selection_logic%22%3A3%7D&sp_atk=690fb13c-96f2-463b-86da-c0f3d92004ae&xptdk=690fb13c-96f2-463b-86da-c0f3d92004ae" width="200"><br>
            <b>Asbak Stainless</b><br>
            Rp 560.000
        </td>
        <td>
            <img src="https://down-id.img.susercontent.com/file/id-11134258-7ra0h-mbese5hzr5cp90" width="200"><br>
            <b>Deck Scratch skateboard</b><br>
            Rp 635.000
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