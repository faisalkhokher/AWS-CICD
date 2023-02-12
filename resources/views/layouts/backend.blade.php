<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GLYPH</title>
    @include('backend.partials.styles')
    @yield('styles')
</head>
<body>
<div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
@include('backend.partials.sidebar')
<!-- partial -->

    <div class="page-wrapper">

        <!-- partial:partials/_navbar.html -->
    @include('backend.partials.navbar')
    <!-- partial -->

        <div class="page-content">
            @yield('content')
        </div>

        <!-- partial:partials/_footer.html -->
    @include('backend.partials.footer')
    <!-- partial -->

    </div>
</div>

{{-- @include('backend.partials.scripts')
@yield('scripts') --}}

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
auth.isAuth(function(){
    @if(Auth::check())
    @isAuthAssets([
        "user"=>auth()->user(),
        //"photo"=>$user->avatar (not required) if you use avatar in your user system, pass the url of your user's avatar to "photo" key, if you don't use avatar, you can remove the key in array
    ])
    @endif
});   
<script>
swal({
                title: "A",
                icon:"A",
            })
</script>
</body>
</html>
