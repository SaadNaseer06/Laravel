@props(['posts'])
@if($posts->count())
    <x-post-featured-card :posts="$posts[0]" />
        <div class="lg:grid lg:grid-cols-6">
            @foreach($posts->skip(0) as $post)
            <x-post-card
            :posts="$post"
            class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
            />
            @endforeach
        </div>
    @endif
