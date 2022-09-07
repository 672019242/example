<x-app-layout title="About">
    <h1>About</h1>
<script src={{asset("js/bootstrap.min.js")}}></script>
    @slot('styles')
        <style>
        body {
            background-color: indigo
        }
    </style>
    @endslot

</x-app-layout>