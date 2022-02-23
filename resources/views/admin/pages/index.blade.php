<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    <div class="py-10 px-4">
        <div class="rounded shadow bg-white dark:bg-gray-800 dark:text-gray-900">
            <div class="p-4">
                <div class="w-full px-2 flex items-center justify-between">
                  <h3 class="text-2xl font-bold dark:text-gray-100">All pages</h3>
                  <a href="{{ route('admin.pages.create') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-2 border border-gray-500 rounded">Add Page</a>
                </div>              
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                      <table class="w-full">
                        <thead>
                          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Page Title</th>
                            <th class="w-1/6 px-4 py-3">Action</th>
                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                          @foreach($pages as $page)
                          <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                              <p class="font-semibold">{{ $page->title }}</p>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <a href="{{ route('admin.pages.show', $page->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 border border-yellow-500 rounded">View</a>
                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">Edit</a>
                                <form class="inline-block relative" action="{{ route('admin.pages.destroy', $page->id) }}" method="POST">
                                  @csrf

                                  @method('DELETE')
                                  <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>