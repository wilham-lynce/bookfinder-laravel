@extends('bookscontainer')
@section('content')
<body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
       
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          
            <!-- Main Content -->
            <main>
                
            <form class="">
                        <div class="input-group" id="mysearch">
                            <input type="text" class="form-control mr-sm-2" placeholder="Search book by the  book title, author, or genre..."
                             autofocus   aria-label="Search" aria-describedby="basic-addon2" style ="width : 400px" id ="books" >
                            <div class="input-group-append">
                                <button class="btn  btn-rounded btn-sm my-0" type="submit" id ="search">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="nav justify-content-center">
                        @foreach ($collection as $item)
                        <li  class='nav-item'><a class="nav-link" href="books/{{$item['volumeInfocategories0'] }}"> {{ $item['volumeInfocategories0'] }} </a> </li>            
                        @endforeach
                    </ul>
            </main>
           
            <div id="resultmessage" class="rsmsg"></div>
                <div class="container">
                    <div class="" id="result">
                        <div class="row">

                        </div>
                    </div>  
               </div>  
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    {{-- <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> --}}

    <!-- Bootstrap core JavaScript-->
    {{-- <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Core plugin JavaScript-->
    {{-- <script src={{ asset("js/jquery.easing.min.js") }}></script> --}}

    <!-- Custom scripts for all pages-->
    {{-- <script src="{{ URL::asset(js/sb-admin-2.min.js) }}"></script> --}}
    <script type="text/javascript" src="{{asset('js/bookfinder.js')}}"></script>
    {{-- <script type="text/javascript" src="js/bookfinder"></script> --}}

   

</body>

@endsection