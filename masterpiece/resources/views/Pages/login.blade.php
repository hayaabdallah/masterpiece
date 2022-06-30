@extends('Layout.master')
@section('content')

     <!-- CONTACT -->
     <section >
          <div class="container" style="border-radius: 40px; margin-bottom: 6%;  padding: 5%;margin-top: 8%;background-color:#b3ecd7;width:700px">
               <div class="row">

                    <div class="col-md-12 col-sm-12" >
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="col-md-12 col-sm-12">
                                <label>Email:</label>
                                   <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                                   <label>Password:</label>
                                   <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                              </div>

                              <div class="col-md-2 col-sm-12">
                                   <input type="submit" class="form-control" name="login" value="Login">
                              </div>

                         </form>
                    </div>
<!-- 
                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="">
                         </div>
                    </div> -->

               </div>
          </div>
     </section>       


@endsection