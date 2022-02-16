<x-form-section submit="{{ route('admin.settings.store') }}">
    <x-slot name="title">
        {{ __('General Settings') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update website general information.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Site Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="site_name" value="{{ __('Site Name') }}" />
            <x-jet-input id="site_name" type="text" class="mt-1 block w-full" name="site_name" value="{{ config('settings.site_name') }}" autocomplete="site_name" />
            <x-jet-input-error for="site_name" class="mt-2" />
        </div>
         <!-- Site Title -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="site_title" value="{{ __('Site Title') }}" />
            <x-jet-input id="site_title" type="text" class="mt-1 block w-full" name="site_title" value="{{ config('settings.site_title') }}" autocomplete="site_title" />
            <x-jet-input-error for="site_title" class="mt-2" />
        </div>
         <!-- Default Email Address -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="default_email_address" value="{{ __('Default Email Address') }}" />
            <x-jet-input id="default_email_address" type="text" class="mt-1 block w-full" name="default_email_address" value="{{ config('settings.default_email_address') }}" autocomplete="default_email_address" />
            <x-jet-input-error for="default_email_address" class="mt-2" />
        </div>
         <!-- Currency Code -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="currency_code" value="{{ __('Currency Code') }}" />
            <x-jet-input id="currency_code" type="text" class="mt-1 block w-full" name="currency_code" value="{{ config('settings.currency_code') }}" autocomplete="currency_code" />
            <x-jet-input-error for="currency_code" class="mt-2" />
        </div>
        <!-- Currency Symbol -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="currency_symbol" value="{{ __('Currency Symbol') }}" />
            <x-jet-input id="currency_symbol" type="text" class="mt-1 block w-full" name="currency_symbol" value="{{ config('settings.currency_symbol') }}" autocomplete="currency_symbol" />
            <x-jet-input-error for="currency_symbol" class="mt-2" />
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
</x-form-section>