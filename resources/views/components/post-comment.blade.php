@props(['comment'])
<article class="flex bg-gray-100 rounded-xl p-6 border border-gray-200 space-x-4">
  <div class="flex-shrink-0">
      <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="Avatar image for a dummy comment" class="rounded-xl" width="60" height="60">
  </div>

  <div class="mb-5">
      <header>
          <h3 class="font-bold">{{ $comment->author->username }}</h3>
          <p class="text-xs">Posted <time>{{ $comment->created_at->diffForHumans() }}</time></p>
      </header>

      <p>
          {{ $comment->body }}
      </p>
  </div>
</article>