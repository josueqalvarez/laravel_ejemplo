<x-layouts.index>

    <div class="overflow-hidden bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="lg:pt-4 lg:pr-8">

                <div class="">
                    <h2 class="text-base/7 font-semibold text-white w-fit px-4 rounded-md"
                        style="background: {{ $blog->category->color }};"> 
                        {{ $blog->category->name }} </h2>
                    <h4 class="my-2 font-semibold text-white"> {{ $blog->user->name }} </h4>
                    <time class="text-sm text-gray-400"> {{ $blog->created_at->format('F j, Y') }} </time>
                    <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">
                        {{ $blog->title }}</p>
                    <p class="mt-6 text-lg/8 text-gray-300"> {{ $blog->body }}</p>
                    <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-400 lg:max-w-none">


                        @foreach ($blog->comments as $comment)
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-white">
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                        class="absolute top-1 left-1 size-5 text-indigo-400">
                                        <path
                                            d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                    {{ $comment->user->name }} </dt>
                                    <br>
                                <dd class="inline">
                                    {{ $comment->content }}
                                </dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            </div>

        </div>
    </div>


</x-layouts.index>
