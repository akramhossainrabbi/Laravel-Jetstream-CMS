<x-app-layout>
    @section('css')
    <style>
        h1{
            font-size: 2em;
            font-weight: bolder;
        }
        h2{
            font-size: 1.5em;
            font-weight: bolder;
        }
        h3{
            font-size: 1.17em;
            font-weight: bolder;
        }
    </style>
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    <div class="py-10 px-4">
        <div class="rounded shadow bg-white dark:bg-gray-800 dark:text-gray-900">
            <div class="p-4">
                <h3 class="text-2xl font-bold dark:text-gray-100">Create a new page.</h3>
                <form action="{{ route('admin.pages.store') }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <x-jet-label for="title" value="{{ __('Title') }}" />
                        <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                        <x-jet-input-error for="title" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="page_content	" value="{{ __('Page Content') }}" />
                        <textarea class="text-gray-900 dark:text-gray-800" name="page_content" rows="10" id="task-textarea"></textarea>
                    </div>
                    <div class="mt-3">
                        <x-jet-button>
                            {{ __('Save') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    @include('admin.ckeditor')
    @endpush
</x-app-layout>