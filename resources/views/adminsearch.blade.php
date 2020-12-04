@extends('master')
@section('content')
<div class=" custom-books">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Searched items </h1>
        </div>
        <div class="row">
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
@endsection