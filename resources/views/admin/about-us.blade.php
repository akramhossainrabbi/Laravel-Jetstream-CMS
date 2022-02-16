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
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <div class="py-10 px-4">
        <div class="rounded shadow bg-white dark:bg-gray-800 dark:text-gray-900">
            <div class="p-4" x-init="init()">
                <h3 class="text-2xl font-bold dark:text-gray-100">Write about the organization here.</h3>
                <form action="{{ route('admin.about.us.update') }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <textarea class="text-gray-900 dark:text-gray-800" name="description" rows="10" id="task-textarea">{{ $about->description }}</textarea>
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