<!DOCTYPE html>

<html lang="ja">

 
<head>

       @include('layouts.partials.head')

</head>

 
<body>

<div class="wrapper ">

    @include('layouts.partials.sidebar')


    <div class="main-panel">

        @include('layouts.partials.navbar')

        @yield('content')

        @include('layouts.partials.footer')

    </div>

    @include('layouts.partials.fixed-plugin')

    @include('layouts.partials.footer-scripts')

</div>
 
</body>

</html>