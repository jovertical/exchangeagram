<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
        <img 
            class="h-[400px] w-full object-cover" 
            src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" 
            alt="" 
        />
    </div>

    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <p class="text-base text-gray-500">
            {{ $post->body }}
        </p>
    </div>
</div>
