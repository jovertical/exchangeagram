<div class="grid grid-cols-1 gap-8 sm:gap-12">
    @foreach ($posts as $post)
        <livewire:post :post="$post"></livewire:post>
    @endforeach
</div>
