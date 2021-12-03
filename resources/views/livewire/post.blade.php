<div class="bg-white py-6 shadow sm:rounded-lg">
    <article :aria-labelledby="{{ 'post-title-' . $post->id }}">
        <div class="space-y-4">
            <!-- Author Details -->
            <div class="px-4 sm:px-6">
                <div class="flex space-x-3">
                    <div class="flex-shrink-0">
                        <span class="inline-block h-10 w-10 rounded-full overflow-hidden bg-gray-100">
                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </span>
                    </div>

                    <div class="min-w-0 flex-1">
                        <p class="text-sm font-medium text-gray-900">
                            <a href="#" class="hover:underline">
                                {{ $post->author->name }}
                            </a>
                        </p>

                        <p class="text-sm text-gray-500">
                            <a href="#" class="hover:underline">
                                <time datetime="{{ $post->created_at }}">
                                    {{ $post->created_at->diffForHumans() }}
                                </time>
                            </a>
                        </p>
                    </div>

                    <div class="flex-shrink-0 self-center flex">
                        <button class="-m-2 p-2 rounded-full flex items-center text-gray-400 hover:text-gray-600">
                            <x-heroicon-s-dots-horizontal class="h-5 w-5"></x-heroicon-s-dots-horizontal>
                        </button>
                    </div>
                </div>
            </div>
            <!--/. Author Details -->

            <div class="flex-shrink-0">
                <img class="h-96 w-full object-cover"
                    src="{{ '/storage/' . $post->photo }}"
                    alt="" />
            </div>

            <div class="flex-shrink-0 px-4 sm:px-6">
                <div class="mt-2 text-sm text-gray-700 space-y-4">
                    {{ $post->body }}
                </div>

                <div class="mt-6 flex justify-between space-x-8">
                    <div class="flex space-x-6">
                        <span class="inline-flex items-center text-sm">
                            <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                <x-heroicon-s-heart class="h-5 w-5" aria-hidden="true" />
                                <span class="font-medium text-gray-900">0</span>
                                {{-- <span class="sr-only">likes</span> --}}
                            </button>
                        </span>

                        <span class="inline-flex items-center text-sm">
                            <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                <x-heroicon-s-chat-alt class="h-5 w-5" aria-hidden="true" />
                                <span class="font-medium text-gray-900">0</span>
                                {{-- <span class="sr-only">replies</span> --}}
                            </button>
                        </span>

                        <span class="inline-flex items-center text-sm">
                            <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                <x-heroicon-s-eye class="h-5 w-5" aria-hidden="true" />
                                <span class="font-medium text-gray-900">0</span>
                                {{-- <span class="sr-only">views</span> --}}
                            </button>
                        </span>
                    </div>

                    <div class="flex text-sm">
                        <span class="inline-flex items-center text-sm">
                            <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                <x-heroicon-s-share class="h-5 w-5" aria-hidden="true" />
                                {{-- <span class="font-medium text-gray-900">Share</span> --}}
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>