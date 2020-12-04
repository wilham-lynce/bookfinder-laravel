$(document).ready(function(){
    var result = document.getElementById("result");
    var message = document.getElementById("resultmessage");
    var url = '';
    var image = '';
    var title = '';
    var author = '';
    var category = '';
    var googleAPI = "https://www.googleapis.com/books/v1/volumes?maxResults=40&q=";
    var placeHldr = '<img src="https://via.placeholder.com/150">';

            $("#search").click(function(){
                var searchItem = $("#books").val();
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

 