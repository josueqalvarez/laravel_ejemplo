<x-forum.layouts.index>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:py-32">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Questions</h2>
        <div class="mt-10 grid gap-6 ">
          @foreach ($questions as $question)
            <div class="rounded-3xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
              <a 
                class="text-xl font-semibold text-gray-900"
                href="{{ route('questions.show', $question) }}">
                {{ $question->title }}
              </a>
              <p class="mt-3 text-sm leading-6 text-gray-600">{{ $question->body }}</p>
              <div class="mt-5 flex flex-wrap items-center gap-2 text-xs text-gray-500">
                <span class="rounded-full px-3 py-1 text-white"
                      style="background-color: {{ $question->category->color }};" >
                      {{ $question->category->name }}
                </span>
                <span class="text-gray-400">•</span>
                <span>{{ $question->user->name }}</span>
                <span> {{ $question->created_at->diffForHumans() }} </span>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
</x-forum.layouts.index>