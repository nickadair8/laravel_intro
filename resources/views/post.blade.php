<x-layout>

  <body>
    <article>
      <h1>{!! $post->title !!}</h1>

      <div>{!!$post->body!!}</div>
    </article>

    <p>
      <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    </p>

    <a href="/">Go back!</a>
  </body>
</x-layout>