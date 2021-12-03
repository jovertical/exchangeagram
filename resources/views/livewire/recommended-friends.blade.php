<section aria-labelledby="who-to-follow-heading">
    <div class="bg-white rounded-lg shadow">
        <div class="p-6">
            <h2 id="who-to-follow-heading" class="text-base font-medium text-gray-900">
                Who to follow
            </h2>

            <div class="mt-6 flow-root">
                <ul role="list" class="-my-4 divide-y divide-gray-200">
                    @foreach ($users as $user)
                        <li class="flex items-center py-4 space-x-3">
                            <div class="flex-shrink-0">
                                <img
                                    class="h-9 w-9 rounded-full" 
                                    src="{{ 'https://i.pravatar.cc/150?u=' . $user->email }}" 
                                    alt=""
                                >
                            </div>

                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#">{{ $user->name }}</a>
                                </p>
                                <p class="text-sm text-gray-500">
                                    <a href="#">{{ $user->email }}</a>
                                </p>
                            </div>

                            <div class="flex-shrink-0">
                                @if (Auth::user()->following($user))
                                    <button
                                        type="button"
                                        class="inline-flex items-center px-3 py-0.5 rounded-full bg-red-50 text-sm font-medium text-red-700 hover:bg-red-100"
                                        wire:click="unFollow({{ $user->id }})"
                                    >
                                        <x-heroicon-s-minus-sm 
                                            class="-ml-1 mr-0.5 h-5 w-5 text-red-400"
                                        ></x-heroicon-s-minus-sm>
                                        
                                        <span>Unfollow</span>
                                    </button>
                                @else
                                    <button 
                                        type="button"
                                        class="inline-flex items-center px-3 py-0.5 rounded-full bg-indigo-50 text-sm font-medium text-indigo-700 hover:bg-indigo-100"
                                        wire:click="follow({{ $user->id }})"
                                    >
                                        <x-heroicon-s-plus-sm 
                                            class="-ml-1 mr-0.5 h-5 w-5 text-indigo-400"
                                        ></x-heroicon-s-plus-sm>
                                        
                                        <span>Follow</span>
                                    </button>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-6">
                <a href="#" class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    View all
                </a>
            </div>
        </div>
    </div>
</section>
