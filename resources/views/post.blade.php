<x-layout>
    <article>
        <h1>{{$post->title}}</h1>

        <a

            By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}

        </a>
        <div>
            {!! $post-> body !!}
        </div>
    </article>



    <a href="/">Go Back</a>
</x-layout>



