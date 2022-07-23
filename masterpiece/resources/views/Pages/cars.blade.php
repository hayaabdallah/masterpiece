@extends('Layout.master')

@section('content')

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Car Listing</h1>

                    <br>

                    <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p> -->
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">

               <div class="row">
                    
                    {{-- <div class="col-lg-3 col-xs-12">
                         <div class="form">
                              <form action="#">
                         

                                   <div class="form-group">
                                        <label>Model:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Price:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>color:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>


                                   <div class="form-group">
                                        <label>Number of seats:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <button type="submit" class="section-btn btn btn-primary btn-block">Search</button>
                              </form>
                         </div>
                    </div> --}}

                    <div class="col-lg-9 col-xs-12">
                         <div class="row">
                              <div class="col-lg-6 col-md-4 col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="assets/images/product-1-720x480.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                                  <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                                  <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="/cardetails">Lorem ipsum dolor sit amet</a></h3>

                                             <p class="lead"><small></small> <strong>$111</strong></p>

                                             <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp; Used vehicle</p>
                                        </div>

                                        <div class="courses-info">
                                             <a href="/cardetails" class="section-btn btn btn-primary btn-block">View More</a>
                                        </div>
                                   </div>
                              </div>

                            
                         </div>
                    </div>
               </div>
          </div>
     </section>

@endsection