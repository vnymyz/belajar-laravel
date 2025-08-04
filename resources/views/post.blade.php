{{-- ini semua buat nampilin 1 artikel aja atau single post --}}
<x-layout :title="$title">
    {{-- menggunakan directive dd dan membungkus article dengan dd menggunakan foreach--}}
    {{-- tujuannya untuk memanggil array artikel atau data collection --}}
    {{-- isi content halaman blog --}}
    {{-- untuk artikel nanti kita ambil dari database --}}
    {{-- artikel 1 --}}
    <article class="py-8 max-width-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> | 1 Januari 2025
        </div>
        {{-- menggunakan helper class string limit untuk membatasi tulisan 100 karakter --}}
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        {{-- untuk singlepost dibawah --}}
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Kembali ke halaman blog.</a>
    </article>
    
</x-layout>