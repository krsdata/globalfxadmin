@if($remove_header)
@include('layouts.header')
@endif
@yield('content')
@if($remove_header)
 <!---footer start her -->
@include('layouts.footer')
@endif