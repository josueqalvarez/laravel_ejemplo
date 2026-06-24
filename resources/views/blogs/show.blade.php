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
                    <p class="mt-6 text-lg/8 text-gray-300"> {{ $blog->content }}</p>
                    <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-400 lg:max-w-none">


                        @foreach ($blog->answers as $answer)
                            <x-layouts.comment_answer :lista="$answer" />


                            @foreach ($answer->comments as $comment)
                                <livewire:comment :commentable="$comment" :margin_left="'2.5em'" />
                                {{-- <x-layouts.comment_answer :lista="$comment" :margin_left="'2.5em'" /> --}}
                            @endforeach
                        @endforeach

                    </dl>
                </div>
            </div>

        </div>
    </div>


</x-layouts.index>
