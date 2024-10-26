<!DOCTYPE html>
<html lang="en">
    <head>
     
        {{--Aqui é o meu head--}}

    </head>
    <body>

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        </nav>    

        <div id="layoutSidenav">

            <div id="layoutSidenav_nav">

                 {{--Aqui é a minha sidebar--}}

            </div>
            <div id="layoutSidenav_content">


                <main>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Static Navigation</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Static Navigation</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                    This page is an example of using static navigation. By removing the
                                    <code>.sb-nav-fixed</code>
                                    class from the
                                    <code>body</code>
                                    , the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.
                                </p>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>

                </main>


                <footer class="py-4 bg-light mt-auto">

                  {{--Aqui é o meu footer--}}
                   
                </footer>
            </div>


        </div>

        @stack('scripts')

        @push('scripts')

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>

        @endpush

        
    </body>
</html>