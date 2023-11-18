@include('layouts.head')
@include('layouts.navbar')


<div class="container">
    
        <main class="py-4">
           
            @yield('content')
        </main>
    </div>
 
    @include('layouts.footer-scrpt')

