<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>Recap h154</title>
</head>
<body>
    {{-- l'assenza nel componente della pseudo variabile $slot fa si che il tag sia autoconclusivo, ergo non abbraccia ulteriore codice --}}
    <x-navbar/>

    <div class="min-vh-100">
        {{-- blade consente di inserire codice php all'interno di codice html in modo più armonioso rispetto agli anno 80 --}}
        {{$slot}}
    </div>

</body>
</html>