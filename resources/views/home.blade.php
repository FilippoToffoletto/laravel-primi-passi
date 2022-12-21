<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Filippo's blog</title>
</head>
<body>
    <header class="ft-container">
        <img src="./img/logo.jpeg" alt="">
        <h1>{{ $home }}</h1>
    </header>

    <nav>
        <ul>
        @foreach ($links as $link)
                <li>
                    <a href="#">{{$link}}</a>
                </li>
        @endforeach
        </ul>
    </nav>

    <main class="ft-container">
        <div class="ft-container">

            <section>

                <!-- Background image -->
                <div
                  class="jumbo"
                >
                  <div
                    class="ft-img"
                    style="background-color: rgba(0, 0, 0, 0.6)"
                  >
                    <div class="ft-text">
                      <div class="text-white">
                        <h2 class="font-semibold text-4xl mb-4">Welcome</h2>
                        <h4 class="font-semibold text-xl mb-6">In my blog</h4>

                      </div>
                    </div>
                  </div>
                </div>
                <img src="" alt="">
            </section>


        </div>
    </main>

</body>
</html>
