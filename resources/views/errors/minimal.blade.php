@include('admin.layouts.header')

<div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="mx-auto error" data-text="404">@yield('code')</div>
        <p class="mb-5 text-gray-800 lead">@yield('message')</p>
    </div>

</div>
</body>

</html>
