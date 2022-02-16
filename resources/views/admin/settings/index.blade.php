<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div 
        x-data="{
        openTab: 1,
        activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
        inactiveClasses: 'text-blue-500 hover:text-blue-800'
        }" 
        class="p-6">
        <ul class="md:flex flex-none border-b">
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                <a :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white dark:bg-gray-800 inline-block py-2 px-4 font-semibold">
                General
                </a>
            </li>
            <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white dark:bg-gray-800 inline-block py-2 px-4 font-semibold">
                Site Logos
                </a>
            </li>
            <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white dark:bg-gray-800 inline-block py-2 px-4 font-semibold">
                Welcome Message
                </a>
            </li>
            <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
                <a :class="openTab === 4 ? activeClasses : inactiveClasses" class="bg-white dark:bg-gray-800 inline-block py-2 px-4 font-semibold">
                Welcome Image
                </a>
            </li>
            <li @click="openTab = 5" :class="{ '-mb-px': openTab === 5 }" class="mr-1">
                <a :class="openTab === 5 ? activeClasses : inactiveClasses" class="bg-white dark:bg-gray-800 inline-block py-2 px-4 font-semibold">
                Featured Card
                </a>
            </li>
        </ul>

        @if(Session::has('success'))
        <div class="flex justify-center items-center m-1 font-medium py-1 px-2 rounded-md text-green-700 bg-green-100 border border-green-300 ">
            <div slot="avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>
            <div class="text-xl font-normal  max-w-full flex-initial">
                {{ Session::get('success') }}</div>
            <div class="flex flex-auto flex-row-reverse">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
            </div>
        </div>
        @endif

        <div class="w-full pt-4">
            <div x-show="openTab === 1">
                @include('admin.settings.general')
            </div>
            <div x-show="openTab === 2">
                @include('admin.settings.logos')
            </div>
            <div x-show="openTab === 3">
                @include('admin.settings.welcome-message')
            </div>
            <div x-show="openTab === 4">
                @include('admin.settings.welcome-img')
            </div>
            <div x-show="openTab === 5">
                @include('admin.settings.featured')
            </div>
        </div>
    </div>
</x-app-layout>