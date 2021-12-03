<div class="mt-8 grid grid-cols-1 gap-8 sm:gap-12">
    @foreach ($posts as $post)
        @include('livewire.post')
    @endforeach
</div>
