<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccoLink</title>
</head>
<body>
    <!-- top header start -->
     include('front.includes.top-header')
     <!-- top header end -->

     <!-- main header start -->
     include('front.includes.main-header')
      <!-- main header end -->

       <!-- Banner start -->
       include('front.includes.banner')
        <!-- Banner end -->

        <!-- Content start -->
        @yield('content')
        <!-- Content end -->

        <!-- Footer start -->
        include('front.includes.footer')
         <!-- footer end -->
</body>
</html>