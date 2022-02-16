<x-guest-layout>
    @section('css')
    <link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
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

    <x-about-us />
</x-guest-layout>