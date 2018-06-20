@extends('layouts.default')
@section('content')


   <br>
   <h1>Please use the form below to contact the site owner.</h1>

   <style>
      body {font-family: Arial, Helvetica, sans-serif;}

      input[type=text], select, textarea {
         width: 100%;
         padding: 12px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
         margin-top: 6px;
         margin-bottom: 16px;
         resize: vertical;
      }

      input[type=submit] {
         background-color: #4CAF50;
         color: white;
         padding: 12px 20px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
      }

      input[type=submit]:hover {
         background-color: #45a049;
      }

      .container {
         border-radius: 5px;
         background-color: #f2f2f2;
         padding: 20px;
      }
   </style>
   </head>
   <body>


   <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="flag.jpj" alt="Card image cap">
      <div class="card-body">
         <h5 class="card-title">Peter Kelini</h5>
         <p class="card-text">Contact me anytime!.</p>
         <a href="contact1" class="btn btn-primary">Contact</a>
      </div>
   </div>






               <div class="card mt-3 pl-2 pr-2">
                  <div class="card-title"><h1>Contact</h1>
                     <p class="lead">Please use this form to contact the site owner.</p></div>

                  <div class="card-body">


                     <form action="/contact" mehthod="post">
                        {{ csrf_field() }}
                         <div class="form-group">
                           <label for="email">Email address</label>
                           <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                           <label for="subject">Subject</label>
                           <input name="subject" type="subject" class="form-control" id="subject" placeholder="subject">
                        </div>

                        <div class="form-group">
                           <label for="body">Message</label>
                           <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                        </div>

                        <!--<button type="submit" class="btn btn-primary mb-2">Submit</button>  -->

                        <a href="contact1" class="btn btn-primary">Submit!</a>
                     </form>
                  </div>
               </div>

            </main>






      </form>
   </div>









@endsection