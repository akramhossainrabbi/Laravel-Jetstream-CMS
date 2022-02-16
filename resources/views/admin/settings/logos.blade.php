<x-form-section submit="{{ route('admin.settings.store') }}">
    <x-slot name="title">
        {{ __('Site Logo') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update site logo and fovicon.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-3 sm:col-span-3">
            @if (config('settings.site_logo') != null)
                <img src="{{ asset('storage/'.config('settings.site_logo')) }}" id="logoImg" style="width: 80px; height: auto;">
            @else
                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">
            @endif
        </div>
        <!-- Site Logo -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="site_logo" value="{{ __('Site Logo') }}" />
            <x-jet-input id="site_logo" type="file" class="mt-1 block w-full" name="site_logo" value="{{ config('settings.site_logo') }}" onchange="loadFile(event,'logoImg')" />
            <x-jet-input-error for="site_logo" class="mt-2" />
        </div>
        <div class="col-span-3 sm:col-span-3">
            @if (config('settings.site_favicon') != null)
                <img src="{{ asset('storage/'.config('settings.site_favicon')) }}" id="faviconImg" style="width: 80px; height: auto;">
            @else
                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="faviconImg" style="width: 80px; height: auto;">
            @endif
        </div>
         <!-- Site Favicon -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="site_favicon" value="{{ __('Site Favicon') }}" />
            <x-jet-input id="site_favicon" type="file" class="mt-1 block w-full" name="site_favicon" value="{{ config('settings.site_favicon') }}" onchange="loadFile(event,'faviconImg')" />
            <x-jet-input-error for="site_favicon" class="mt-2" />
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