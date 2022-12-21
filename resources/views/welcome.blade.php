<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')



</head>

<body>
    <div class="container">
        {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"> --}}
        <div class="grid grid-cols-4 grid-rows-3   gap-4">
            {{--   <div class="bg-emerald-200 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  col-span-2">A</div> --}}
            <div class="bg-emerald-200 col-span-2 col-start-2">A</div>
            <div class="bg-emerald-300">B</div>
            <div class="bg-emerald-400 col-span-2 row-span-3">C</div>
            <div class="bg-emerald-500">D</div>
            <div class="bg-emerald-200">A</div>
            <div class="bg-emerald-300">B</div>


        </div>
    </div>

</body>

</html>
