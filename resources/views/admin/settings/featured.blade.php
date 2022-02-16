<x-form-section submit="{{ route('admin.settings.store') }}">
    <x-slot name="title">
        {{ __('Featured') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update the featured card image, title and description.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-3 sm:col-span-3">
            @if (config('settings.featured_image') != null)
                <img src="{{ asset('storage/'.config('settings.featured_image')) }}" id="featuredImg" style="width: 150px; height: auto;">
            @else
                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="featuredImg" style="width: 150px; height: auto;">
            @endif
        </div>
        <!-- Featured Image -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="featured_image" value="{{ __('Featured Image') }}" />
            <x-jet-input id="featured_image" type="file" class="mt-1 block w-full" name="featured_image" value="{{ config('settings.featured_image') }}" onchange="loadFile(event,'featuredImg')" />
            <x-jet-input-error for="featured_image" class="mt-2" />
        </div>
        <!-- Featured Message Title -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="featured_title" value="{{ __('Featured Message Title') }}" />
            <x-jet-input id="featured_title" type="text" class="mt-1 block w-full" name="featured_title" value="{{ config('settings.featured_title') }}" autocomplete="featured_title" />
            <x-jet-input-error for="featured_title" class="mt-2" />
        </div>
         <!-- Featured Message -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="featured_description" value="{{ __('Featured Message') }}" />
            <textarea id="featured_description" type="textarea" class="form-textarea mt-1 block w-full border border-gray-300 text-gray-900 dark:bg-gray-800 dark:text-gray-50 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-3 rounded-md shadow-sm" rows="3" name="featured_description" autocomplete="featured_description">{{ config('settings.featured_description') }}</textarea>
            <x-jet-input-error for="featured_description" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        {{-- <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message> --}}

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
    @push('scripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    @endpush
</x-form-section>