@extends('main.main')

@section('title','Cart')

@section('content')
<!--Section: Block Content-->
<section>

    <!--Grid row-->
    <div class="row">
  
      <!--Grid column-->
      <div class="col-lg-8 ">
  
        <!-- Card -->
        <div class="card wish-list mb-3">
          <div class="card-body">
  
            <h5 class="mb-4">Cart (<span>2</span> items)</h5>
  
            <div class="row mb-4">
              <div class="col-md-5 col-lg-3 col-xl-3">
                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                  <img class="img-fluid w-100"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                </div>
              </div>
              <div class="col-md-7 col-lg-9 col-xl-9">
                <div>
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5>Blue denim shirt</h5>
                      <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                      <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                      <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                    </div>
                    <div>
                      <div class="def-number-input number-input safari_only mb-0 w-100">
                        
                        <input class="quantity" min="0" name="quantity" value="1" type="number" readonly>
                        
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0"><span><strong>$17.99</strong></span></p>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="row mb-4">
              <div class="col-md-5 col-lg-3 col-xl-3">
                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                  <img class="img-fluid w-100"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                </div>
              </div>
              <div class="col-md-7 col-lg-9 col-xl-9">
                <div>
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5>Red hoodie</h5>
                      <p class="mb-3 text-muted text-uppercase small">Shirt - red</p>
                      <p class="mb-2 text-muted text-uppercase small">Color: red</p>
                      <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                    </div>
                    <div>
                      <div class="def-number-input number-input safari_only mb-0 w-100">
                        
                        <input class="quantity" min="0" name="quantity" value="1" type="number" readonly>
                        
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0"><span><strong>$35.99</strong></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
  
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      {{-- <div class="col-lg-4">
  
        
  
      </div> --}}
      <!--Grid column-->
  
    </div>
    <!--Grid row-->
  
  </section>
  <!--Section: Block Content-->
    
@endsection