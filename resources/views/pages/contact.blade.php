@extends('layouts.default')
@section('content')
   <h1>Hello World! Welcome to my contact page</h1>

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
         <a href="#" class="btn btn-primary">Link</a>
      </div>
   </div>


   <h3>Contact Form</h3>

   <div class="container">
      <form action="/action_page.php">
         <label for="fname">Email</label>
         <input type="text" id="fname" name="Email" placeholder="Email..">

         <label for="lname">Subject</label>
         <input type="text" id="lname" name="Subject" placeholder="Subject..">


         <label for="subject">Message</label>
         <textarea id="subject" name="Message" placeholder="Write something.." style="height:200px"></textarea>


         <input type="submit" value="Submit"  href="contact1" />

         <a href='{!! url('/contact1'); !!}'>Submit</a>













      </form>
   </div>









@stop