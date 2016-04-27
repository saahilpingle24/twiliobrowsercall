<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
        	@yield('content')
        </div>
    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>