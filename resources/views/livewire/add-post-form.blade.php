<form wire:submit.prevent="submit" class="relative" x-data="Form()">
    <div class="bg-white border border-gray-300 rounded-lg shadow-sm overflow-hidden focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
        <div class="relative" x-show="image">
            <img :src="image" class="h-96 w-full object-cover object-center" alt="" />

            <button type="button" @click="removeImage()" class="absolute top-0 right-0 mr-3 mt-3 rounded-full bg-gray-200">
                <x-heroicon-o-x class="h-6 w-6 text-gray-500"></x-heroicon-o-x>
            </button>
        </div>

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
                <div class="relative flex items-center cursor-pointer -ml-2 -my-2 rounded-full px-3 py-2 text-left text-gray-400 group">
                    <label for="post-photo" class="relative flex items-center pointer-events-none">
                        <x-heroicon-o-photograph class="-ml-1 h-6 w-6 mr-2 group-hover:text-gray-500" />

                        <span class="text-sm text-gray-500 group-hover:text-gray-600 italic">
                            Share a beautiful photo
                        </span>
                    </label>

                    <input
                        id="post-photo" 
                        name="post-photo" 
                        class="absolute inset-0 w-full h-full z-0 opacity-0 cursor-pointer border-gray-300 rounded-md"
                        type="file"
                        wire:model="photo"
                        @change="previewImage()"
                    >
                </div>
            </div>

            <div class="flex-shrink-0">
                <x-button type="submit" x-bind:disabled="!image">Post</x-button>
            </div>
        </div>
    </div>

    <script>
        function Form() {
            return {
                image: null,

                previewImage() {
                    let reader = new FileReader();
                    let file = event.target.files[0] || null;

                    reader.addEventListener('load', () => {
                        this.image = reader.result;
                    }, false);

                    if (file) {
                        reader.readAsDataURL(file);
                    }
                },

                removeImage() {
                    this.image = null;
                }
            }
        }
    </script>
</form>
