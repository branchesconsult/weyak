<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('/clinic.partials.header')
	@stack('links')
</head>
<body class="animsition">
    <div class="page-wrapper">
   @include('/clinic/partials/sidebar')
    	  @include('/clinic/partials/navbar')
    	  <div class="main-content">
                <div class="section__content section__content--p30">
                    
                	 @yield('content')
                </div>
                </div>
    	  	
   						@include('/clinic/partials/footer')