<form wire:submit.prevent="submit" class="relative">
    <div class="bg-white border border-gray-300 rounded-lg shadow-sm overflow-hidden focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
        <div class="py-2.5" aria-hidden="true"></div>

        <label for="body" class="sr-only">
            Caption
        </label>

        <textarea 
            wire:model.debounce.600ms="body"
            rows="5" 
            name="body" 
            id="body"
            class="block w-full border-0 py-0 resize-none placeholder-gray-400 focus:ring-0 sm:text-sm"
            placeholder="Write a caption..."></textarea>

        <!-- Spacer element to match the height of the toolbar -->
        <div aria-hidden="true">
            <div class="py-2">
                <div class="h-9"></div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 inset-x-px">
        <div class="border-t border-gray-200 px-2 py-2 flex justify-between items-center space-x-3 sm:px-3">
            <div class="flex">
                <button 
                    type="button"
                    class="-ml-2 -my-2 rounded-full px-3 py-2 inline-flex items-center text-left text-gray-400 group"
                >
                    <x-heroicon-o-photograph class="-ml-1 h-6 w-6 mr-2 group-hover:text-gray-500" />

                    <span class="text-sm text-gray-500 group-hover:text-gray-600 italic">
                        Attach an image
                    </span>
                </button>
            </div>

            <div class="flex-shrink-0">
                <x-button type="submit" disabled="{{ !$body }}">Post</x-button>
            </div>
        </div>
    </div>
</form>
