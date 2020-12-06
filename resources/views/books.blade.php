@extends('bookscontainer')
@section('content')
<body>
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <main>
        <a href="/" style="color: black"><h1>BookFinder</h1></a>
        <form class="">
                    <div class="input-group" id="fictionsearch">
                        <input type="text" class="form-control mr-sm-2" id="fictionalbooks" placeholder="Search book by the  book title, author, or genre..."
                         autofocus   aria-label="Search" aria-describedby="basic-addon2" style ="width : 400px" >
                        <div class="input-group-append">
                            <button id="search" class="btn  btn-rounded btn-sm my-0" type="submit">
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
<script>
    $(document).ready(function(){
          var result = document.getElementById("fictionresult");
          var message = document.getElementById("fictionmessage");
          var url = '';
          var image = '';
          var title = '';
          var author = '';
          var category = '';
          var googleAPI = "https://www.googleapis.com/books/v1/volumes?maxResults=40&q=''+subject: ";
          var placeHldr = '<img src="https://via.placeholder.com/150">';

          $("#fictionsearch").click(function(){
              var searchItem = $("#fictionalbooks").val();
              if (searchItem =='') 
              {
                  alert('please make sure you are typing in something ')
              }
              else {
                  

                  $.get(googleAPI + searchItem, function(response){
                      if (response.totalItems === 0) {
                          alert("no results found, try with different keywords")
                      }
                      else{   
                              message.innerHTML ="<center><h3>Here are the search results for :  "+ "'" +searchItem +"'"+"</h3></center>";
                              for (i=0; i < response.items.length; i+=2)
                              {
                                  item = response.items[i];

                                  title1= item.volumeInfo.title ; 
                                  author1= item.volumeInfo.authors ;  
                                  category1= item.volumeInfo.categories;  
                                  image1 = item.volumeInfo.infoLink ;
                                  url1= item.volumeInfo.imageLinks.thumbnail;   
                                  

                                  item2 = response.items[i+1];

                                  title2= item2.volumeInfo.title ; 
                                  author2= item2.volumeInfo.authors ;  
                                  category2= item2.volumeInfo.categories;  
                                  image2 = item2.volumeInfo.infoLink ;
                                  
                                  url2= (item2.volumeInfo.imageLinks) ? item2.volumeInfo.imageLinks.thumbnail : placeHldr;      
                                  
                                  result.innerHTML += '<div class="row mt-4">'+
                                                      formatOutput(image1,title1,author1,category1,url1)+
                                                      formatOutput(image2,title2,author2,category2,url2) +
                                                      '</div>'; 

                                  console.log(result);
                              }
                          }
                  });
              }
              return false;
          });
      

      function formatOutput(image,title, author,category,Url) {
          var htmlCard = `<div class="col-lg-6">
          <div class="card" style="">
              <div class="row no-gutters">
              <div class="col-md-4">
                  <img src="${Url}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                  <div class="card-body">
                  <h5 class="card-title">${title}</h5>
                  <p class="card-text">Author: ${author}</p>
                  <p class="card-text">Category: ${category}</p>
                  <a target="_blank" href="${image}" class="btn btn-secondary">Read Book</a>
                  </div>
              </div>
              </div>
          </div>
          </div>`
          return htmlCard;
      }
  
  });
  </script>
</body>
@endsection