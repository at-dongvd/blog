<!DOCTYPE html>
<html lang="en">
<head>
@include('partials._head')
</head>
  <body>

    @include('partials._nar')

    <div class="container">

      @include('partials._messages')

      @yield('content')

    </div>
    <!-- end of .container -->

    @include('partials._javascript')
    
    @include('partials._foot')
  </body>

</html>