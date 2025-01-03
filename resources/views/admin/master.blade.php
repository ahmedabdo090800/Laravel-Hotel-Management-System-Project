
@include('admin.partials.head')
  <body>
@include('admin.partials.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
@include('admin.partials.nav')

      <!-- Sidebar Navigation end-->
@yield('content')
    </div>
    <!-- JavaScript files-->
@include('admin.partials.scripts')
