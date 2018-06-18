@extends('layouts.default')
@section('content')
   <h1>Hello World! Welcome to my Homepage</h1>


   <style>
      table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 100%;
      }

      td, th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
      }

      tr:nth-child(even) {
         background-color: #dddddd;
      }
   </style>
   </head>
   <body>

   <h2>HTML Table</h2>

   <table>
      <tr>
         <th>Company</th>
         <th>Contact</th>
         <th>Country</th>
         <th>Phone</th>
         <th>Sex</th>
      </tr>
      <tr>
         <td>Alfreds Futterkiste</td>
         <td>Maria Anders</td>
         <td>Germany</td>
         <td>732-277-6790</td>
         <td>Female</td>
      </tr>
      <tr>
         <td>Centro comercial Moctezuma</td>
         <td>Francisco Chang</td>
         <td>Mexico</td>
         <td>732-277-6790</td>
         <td>Female</td>
      </tr>
      <tr>
         <td>Ernst Handel</td>
         <td>Roland Mendel</td>
         <td>Austria</td>
         <td>732-277-6790</td>
         <td>male</td>
      </tr>
      <tr>
         <td>Island Trading</td>
         <td>Helen Bennett</td>
         <td>UK</td>

         <td>732-277-6790</td>
         <td>Female</td>
      </tr>
      <tr>
         <td>Laughing Bacchus Winecellars</td>
         <td>Yoshi Tannamuri</td>
         <td>Canada</td>

         <td>732-277-6790</td>
         <td>Male</td>
      </tr>

   </table>

   <a href="http://www.yahoo.com">here</a> to go to yahoo.


   <img src="flag.jpj" width="100" height="100">


   



@stop