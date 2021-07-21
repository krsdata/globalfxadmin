@if(isset($remove_header) && $remove_header === true)
@include('layouts.header')
@endif
@yield('content')
@if(isset($remove_header) && $remove_header === true)
 <!---footer start her -->
@include('layouts.footer')
@endif