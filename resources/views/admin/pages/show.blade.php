<x-app-layout>
    @section('css')
    <!-- CKeditor Styles -->
    <link rel="stylesheet" href="{{ mix('css/ckeditor.css') }}">
    <!-- HTag Styles -->
    <link rel="stylesheet" href="{{ mix('css/htag.css') }}">
    @endsection
    
    <div class="relative overflow-hidden">
        <div class="w-full py-10 px-4 flex items-center justify-end">
            <a href="{{ route('admin.pages.edit', $page->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">Edit Page</a>
        </div> 
        <div class="ck-content container py-10 md:mx-auto px-8 md:px-auto">
            {!! $page->page_content !!}
        </div>
    </div>
</x-app-layout>