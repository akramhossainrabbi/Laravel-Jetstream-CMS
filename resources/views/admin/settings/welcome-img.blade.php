<x-form-section submit="{{ route('admin.settings.store') }}">
    <x-slot name="title">
        {{ __('Welcome Image') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update welcome image of the top of home page.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-3 sm:col-span-3">
            @if (config('settings.welcome_image') != null)
                <img src="{{ asset('storage/'.config('settings.welcome_image')) }}" id="welcomeImg" style="width: 150px; height: auto;">
            @else
                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="welcomeImg" style="width: 150px; height: auto;">
            @endif
        </div>
        <!-- Welcome Image -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="welcome_image" value="{{ __('Welcome Image') }}" />
            <x-jet-input id="welcome_image" type="file" class="mt-1 block w-full" name="welcome_image" value="{{ config('settings.welcome_image') }}" onchange="loadFile(event,'welcomeImg')" />
            <x-jet-input-error for="welcome_image" class="mt-2" />
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