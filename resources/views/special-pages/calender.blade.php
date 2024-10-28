<x-app-layout :assets="$assets ?? []">
    @push('scripts')
        <script src="{{ asset('public/vendor/fullcalendar/core/main.js') }}"></script>
        <script src="{{ asset('public/vendor/fullcalendar/daygrid/main.js') }}"></script>
        <script src="{{ asset('public/vendor/fullcalendar/timegrid/main.js') }}"></script>
        <script src="{{ asset('public/vendor/fullcalendar/list/main.js') }}"></script>
        <script src="{{ asset('public/vendor/fullcalendar/interaction/main.js') }}"></script>
    @endpush
    <div>
        <x-header-breadcrumb class="btn btn-primary" />
        <div id="calendar1" class="calendar-s"></div>
</x-app-layout>
