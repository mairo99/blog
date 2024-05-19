<x-layout>

    @foreach ($posts as $post)
        <article>

            <a href="/posts/{{$post->slug}}"><h1>
                {!!$post->title !!}

            </a>
            </h1>

            <a

                href="#">{{$post->category->name}}

            </a>

            <div>

                {{$post->excerpt}}

            </div>

        </article>
    @endforeach
</x-layout>
