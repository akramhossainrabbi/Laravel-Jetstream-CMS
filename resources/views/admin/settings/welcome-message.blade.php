<x-form-section submit="{{ route('admin.settings.store') }}">
    <x-slot name="title">
        {{ __('Welcome Message') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update the homepage top left message here.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Welcome Message Title -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="welcome_message_title" value="{{ __('Welcome Message Title') }}" />
            <x-jet-input id="welcome_message_title" type="text" class="mt-1 block w-full" name="welcome_message_title" value="{{ config('settings.welcome_message_title') }}" autocomplete="welcome_message_title" />
            <x-jet-input-error for="welcome_message_title" class="mt-2" />
        </div>
         <!-- Welcome Message -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="welcome_message" value="{{ __('Welcome Message') }}" />
            <textarea id="welcome_message" type="textarea" class="form-textarea mt-1 block w-full border border-gray-300 text-gray-900 dark:bg-gray-800 dark:text-gray-50 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-3 rounded-md shadow-sm" rows="3" name="welcome_message" autocomplete="welcome_message">{{ config('settings.welcome_message') }}</textarea>
            <x-jet-input-error for="welcome_message" class="mt-2" />
        </div>
         <!-- Welcome Message Description -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="welcome_message_description" value="{{ __('Welcome Message Description') }}" />
            <textarea id="welcome_message_description" type="textarea" class="form-textarea mt-1 block w-full border border-gray-300 text-gray-900 dark:bg-gray-800 dark:text-gray-50 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-3 rounded-md shadow-sm" rows="3" name="welcome_message_description" autocomplete="welcome_message_description">{{ config('settings.welcome_message_description') }}</textarea>
            <x-jet-input-error for="welcome_message_description" class="mt-2" />
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