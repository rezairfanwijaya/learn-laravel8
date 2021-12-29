<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Fav Icon --}}
    <link rel="icon" href="img/{{ $logo }}">

    {{-- CSS External --}}
    <link rel="stylesheet" href="css/style.css">

    <title>{{ $title }}</title>
</head>

<body>
  
    {{-- include component navbar --}}
    @include('partials.nav')

    {{-- main --}}
    <section class="main my-4">
        <div class="container">
       @yield('konten')
        </div>
    </section>
    {{-- main --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    


</body>

</html>
