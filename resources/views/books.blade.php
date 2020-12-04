@extends('bookscontainer')
@section('content')
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <main>
        <a href="/" style="color: black"><h1>BookFinder</h1></a>
        <form class="">
                    <div class="input-group" id="mysearch">
                        <input type="text" class="form-control mr-sm-2" placeholder="Search book by the  book title, author, or genre..."
                         autofocus   aria-label="Search" aria-describedby="basic-addon2" style ="width : 400px" >
                        <div class="input-group-append">
                            <button class="btn  btn-rounded btn-sm my-0" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
        </main>
        <div id="fictionmessage" class="rsmsg"></div>
        <div class="container">
        <div class="" id="fictionresult">
                <div class="row">

                </div>
            </div>  
        </div> 
        <div class="container-fluid">
        <div class ="row">
                        @foreach ($books as $item)
                        <div class='col-xl-3 col-md-6 mb-4'>
                            <div class='card border-left-primary shadow h-100 py-2'>
                            <div class='avatar'style=''>
                            <img alt=''width='5px' height='350px' src={{ $item['volumeInfoimageLinksthumbnail'] }} class='card-img-top' alt='...' ></div>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>
                                            <a href='#'>{{ $item['volumeInfotitle'] }}</a></div>
                                            <div class='h5 mb-0 font-weight-bold text-gray-800'>{{ $item['volumeInfoauthors0'] }}</div>
                                        </div>
                                        <div class='card-footer bottom'>
                                        <a class='btn btn-primary btn-twitter btn-sm' href={{ 'volumeInfoinfoLink' }}>View Info</a>
                                        <i class='fa fa-google-plus'></i>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        @endforeach
        </div>
        </div>
    </div>
    <!-- End of Content Wrapper -->
</div>
{{-- 
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i> --}}
</a>
@endsection