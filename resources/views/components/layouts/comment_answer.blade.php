@props(['lista', 'margin_left' => 'auto', 'margin_bottom' => 'auto'])

<div class="relative pl-9" style="margin-left: {{ $margin_left }}; ">
    <dt class="inline font-semibold text-white">
        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
            class="absolute top-1 left-1 size-5 text-indigo-400">
            <path d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0
                clip-rule="evenodd" fill-rule="evenodd" />
        </svg>
        {{ $lista->user->name }}
    </dt>
    <br>
    <dd class="inline" >
        {{ $lista->content }}
    </dd>
    
</div>
