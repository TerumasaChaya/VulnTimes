<!DOCTYPE html>

<html lang="ja">

 
<head>

       @include('main.layouts.partials.head')

</head>

 
<body>

<div class="wrapper ">

    @include('main.layouts.partials.sidebar')


    <div class="main-panel">

        @include('main.layouts.partials.navbar')

        @yield('content')

        @include('main.layouts.partials.footer')

    </div>

    @include('main.layouts.partials.fixed-plugin')

    @include('main.layouts.partials.footer-scripts')

</div>
 
</body>

</html>