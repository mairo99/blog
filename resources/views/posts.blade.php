<x-layout>

    @foreach ($posts as $post)
        <article>

            <a href="/posts/{{$post->slug}}"><h1>
                {!!$post->title !!}

            </a>
            </h1>
            By <a href="#">{{$post->user->name}}</a> in
            <a

                href="/categories/{{$post->category->slug}}">{{$post->category->name}}

            </a>

            <div>

                {{$post->excerpt}}

            </div>

        </article>
    @endforeach
</x-layout>
