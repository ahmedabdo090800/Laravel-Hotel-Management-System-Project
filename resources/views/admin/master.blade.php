
@include('admin.partials.head')
  <body>
@include('admin.partials.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
@include('admin.partials.nav')

      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
              <h2 class="h5 no-margin-bottom">@yield('title')</h2>
            </div>
          </div>
@yield('content')
      </div>

    </div>
    <!-- JavaScript files-->
@include('admin.partials.scripts')
