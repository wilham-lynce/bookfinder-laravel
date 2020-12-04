@extends('master')
@section('content')
<body>
<section class="contact-section my-3" style="padding-left: 10%; padding-right:15%; padding-top:5%">

    <!-- Form with header -->
    <div class="card" style="padding-left: 10%" >
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-lg-7" style="padding-left: 25%">
        <form action="rough" name="form1" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body form">
  
            <!-- Header -->
            <h3 class="mt-4"><i class="fas fa-book"></i>  Add book to list of records</h3>
  
            <!-- Grid row -->
            <div class="row">
  
              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="form-contact-name" name="title" class="form-control">
                  <label for="form-contact-name" class="">book title</label>
                </div>
              </div>
              <!-- Grid column -->
  
              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="form-contact-email" name="etag" class="form-control">
                  <label for="form-contact-email" class="">etag</label>
                </div>
              </div>
              <!-- Grid column -->
  
            </div>
            <!-- Grid row -->
  
            <!-- Grid row -->
            <div class="row">
  
              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="form-contact-phone" name="genre" class="form-control">
                  <label for="form-contact-phone" class="">category</label>
                </div>
              </div>
              <!-- Grid column -->
  
              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="form-contact-company" name="author" class="form-control">
                  <label for="form-contact-company" class="">author(s)</label>
                </div>
              </div>
              <!-- Grid column -->
  
            </div>
            <!-- Grid row -->
  
            <!-- Grid row -->
            <div class="row">
  
              <!-- Grid column -->
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input id="form-contact-message" class="form-control md-textarea" name="infolink" rows="1">
                  <label for="form-contact-message">info link</label>
                </div>
              </div>
            </div>
              <!-- Grid column -->
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input id="form-contact-message" class="form-control md-textarea" name="imagelink" rows="1">
                  <label for="form-contact-message">image link</label>
                </div>
                <div class="col-md-1 col-md-5 d-flex align-items-start">
                    <div class="text-center">
                      <button type="submit" class="btn btn-grey btn-rounded z-depth-1a">Add !</button>
                    </div>
                  </div>
                {{-- <input type="submit" class="btn-floating btn-lg blue "  name="add" value="add!"><span>
                <a style="color: blanchedalmond" >
                    <i class="far fa-paper-plane"></i>
                </a></span> --}}
              </div>
  
            </div>
            <!-- Grid row -->

          </div>
        </form> 
  
        </div>
        <!-- Grid column -->  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Form with header -->
  
  </section>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php?logout=true">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        
</body>
@endsection