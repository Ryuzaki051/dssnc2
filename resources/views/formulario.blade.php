<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>data</h1>
    <form action="{{route('detector.store')}}" method="POST">
        @csrf
        
        <label for="">ID</label>
        <input type="text" name="id" id="name"><br/>
        <label for="">IP</label>
        <input type="text" name="ip" id="ip"><br/>
        <label for="">MAM</label>
        <input type="text" name="mam" id="mam"><br/>
        <label for="">Storage</label>
        <input type="text" name="storage" id="storage"><br/>
        <label for="">OPT</label>
        <input type="text" name="opt" id="opt"><br/>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>