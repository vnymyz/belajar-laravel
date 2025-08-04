<x-layout :title="$title">
    {{-- menggunakan directive dd dan membungkus article dengan dd menggunakan foreach--}}
    {{-- tujuannya untuk memanggil array artikel atau data collection --}}
    @foreach ( $posts as $post)
    {{-- isi content halaman blog --}}
    {{-- untuk artikel nanti kita ambil dari database --}}
    {{-- artikel 1 --}}
    <article class="py-8 max-width-screen-md border-b border-gray-300">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            By <a href="/authors/{{ $post->author->username }}" class="text-gray-900 hover:underline">{{ $post->author->name }}</a>
            in <a  href="/categories/{{ $post->category->slug }}" class="text-gray-900 hover:underline">{{ $post->category->name }}</a> | 1 Januari 2025
        </div>
        {{-- menggunakan helper class string limit untuk membatasi tulisan 100 karakter --}}
        <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
        {{-- untuk singlepost dibawah --}}
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
    </article>
    @endforeach
    
</x-layout>