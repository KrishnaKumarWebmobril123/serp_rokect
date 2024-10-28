<!-- Backend Bundle JavaScript -->
<script src="{{ asset('public/js/libs.min.js')}}"></script>
@if(in_array('data-table',$assets ?? []))
<script src="{{ asset('public/vendor/datatables/buttons.server-side.js')}}"></script>
@endif
@if(in_array('chart',$assets ?? []))
    <!-- apexchart JavaScript -->
    <script src="{{asset('public/js/charts/apexcharts.js') }}"></script>
    <!-- widgetchart JavaScript -->
    <script src="{{asset('public/js/charts/widgetcharts.js') }}"></script>
    <script src="{{asset('public/js/charts/dashboard.js') }}"></script>
@endif

<!-- mapchart JavaScript -->
<script src="{{asset('public/vendor/Leaflet/leaflet.js') }} "></script>
<script src="{{asset('public/js/charts/vectore-chart.js') }}"></script>


<!-- fslightbox JavaScript -->
<script src="{{asset('public/js/plugins/fslightbox.js')}}"></script>
<script src="{{asset('public/js/plugins/slider-tabs.js') }}"></script>
<script src="{{asset('public/js/plugins/form-wizard.js')}}"></script>

<!-- settings JavaScript -->
<script src="{{asset('public/js/plugins/setting.js')}}"></script>

<script src="{{asset('public/js/plugins/circle-progress.js') }}"></script>
@if(in_array('animation',$assets ?? []))
<!--aos javascript-->
<script src="{{asset('public/vendor/aos/dist/aos.js')}}"></script>
@endif

@if(in_array('calender',$assets ?? []))
<!-- Fullcalender Javascript -->
{{-- {{-- <script src="{{asset('public/vendor/fullcalendar/core/main.js')}}"></script>
<script src="{{asset('public/vendor/fullcalendar/daygrid/main.js')}}"></script>
<script src="{{asset('public/vendor/fullcalendar/timegrid/main.js')}}"></script>
<script src="{{asset('public/vendor/fullcalendar/list/main.js')}}"></script>
<script src="{{asset('public/vendor/fullcalendar/interaction/main.js')}}"></script> --}}
<script src="{{asset('public/vendor/moment.min.js')}}"></script>
<script src="{{asset('public/js/plugins/calender.js')}}"></script>
@endif

<script src="{{ asset('public/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('public/js/plugins/flatpickr.js') }}" defer></script>
{{-- <script src="{{asset('public/vendor/vanillajs-datepicker/dist/js/datepicker-full.js')}}"></script> --}}

@stack('scripts')

<script src="{{asset('public/js/plugins/prism.mini.js')}}"></script>

<!-- Custom JavaScript -->
<script src="{{asset('public/js/hope-ui.js') }}"></script>
<script src="{{asset('public/js/modelview.js')}}"></script>
