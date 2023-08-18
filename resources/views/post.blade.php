<x-layout>
    <body>
        <article>
            <h1>
                {{ $post->title }}
            </h1>

            <p>
                By <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>

            <div style = "line-height:35px;">
                {!! $post->body !!}
            </div>
        </article>

        <p>
            By <a href="/authors{{ $post->author->username }}"></a> {{ $post->author->name }} 
            in{{ $post->category->name }}</a>
        </p>
        

        <a href="/posts" style="
        line-height: 3rem;
        ">Go Back</a>
</x-layout>