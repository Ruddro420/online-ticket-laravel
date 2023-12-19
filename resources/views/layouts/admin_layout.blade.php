<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- Link Css --}}
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>StoreKepper</title>
</head>

<body>
  <input type="checkbox" name="" id="menu-toggle">
  <div class="overlay"><label for="menu-toggle">
    </label></div>
  <div class="sidebar">
    <div class="sidebar-container">
      <div class="brand">
        <h1>
          StoreKepper
        </h1>
      </div>
      <br>
      <div class="sidebar-menu">
        <ul>
          <li><a href="#" class="active"><span class="las la-adjust"></span><span>Dashboard</span></a></li>
          <li><a href="#"><span class="las la-video"></span><span>Add Products</span></a></li>
          <li><a href="#"><span class="las la-chart-bar"></span><span>Sale Product</span></a></li>
          {{-- <li><a href="#"><span class="las la-calendar"></span><span>Schedule</span></a></li>
          <li><a href="#"><span class="las la-user"></span><span>Account</span></a></li> --}}
        </ul>
      </div>

    </div>
  </div>
  <div class="main-content">
    <header>
      <div class="header-wrapper">
        <label for="menu-toggle">
          <span class="las la-bars"></span>
        </label>
        <div class="header-title">
          <h1>Analytics</h1>
          <p>Display analytics about your Channel <span class="las la-chart-line"></span></p>
        </div>
      </div>
      <div class="header-action">
        <button class="btn btn-main">
          <span class="las la-video"></span>
          Logout
        </button>
      </div>
    </header>
    {{-- Main Content --}}
    <main>
      @yield('content')
    </main>

  </div>
  {{-- Js --}}
  <script src="{{ asset('admin/js/main.js')}} "></script>
</body>

</html>