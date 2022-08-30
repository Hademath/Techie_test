<!doctype html>
<html lang="en">
  <head>
    
    <link href="/css/app.css" rel="stylesheet">

  </head>
  <body>
    <style>
         .container{
          display:flex;
          flex-direction:row;
          gap: 20px;

         }
    </style>
        <section class="container">
          
          <div>
             @forelse($students as $student)
                    <ul>
                       
                        <li><a href="./record/{{ $student->id }}">{{  ucfirst($student->firstname) }} {{  ucfirst($student->lastname) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No register student  available</p>
                @endforelse
          </div>
          <div><a href="/register"><button>Register New Student </button></a></div>
</section>



    <script src="/js/app.js"></script>
  </body>
</html>