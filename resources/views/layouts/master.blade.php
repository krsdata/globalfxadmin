@if(isset($remove_header) && $remove_header==false)
@include('layouts.header')
@endif
@yield('content')
@if(isset($remove_header) && $remove_header==false)
 <!---footer start her -->
@include('layouts.footer')
@endif