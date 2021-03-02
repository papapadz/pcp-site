@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('material') }}/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="rose">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
  @if(session()->has('not_verified'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Oops!</strong> Your email address has yet to be verified, please wait for our verification through your registered email address and log in again.
  </div>
  @endif
    @yield('content')
    @include('layouts.footers.guest')
  </div>
</div>
