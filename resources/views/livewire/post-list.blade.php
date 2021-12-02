<div class="mt-8 grid grid-cols-1 gap-8 sm:gap-12">
    @foreach ($posts as $post)
        <x-post :post="$post"></x-post>
    @endforeach
</div>

