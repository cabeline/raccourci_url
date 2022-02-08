<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Racourciceur Url</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link type="text/css" rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    </head>
    <body>
    <div class="container mt-5">
            <div class="row mb-5">
                <div class="col col-md-5">
                    <label for="url">Initial Url</label>
                    <input type="text" readonly class="form-control" id="init_url" value="{{$initUrl}}">
                </div>
            </div>
        
            <div class="row mb-5">
                <div class="col col-md-5">
                    <label for="url">Short Url</label>
                    <input type="text" readonly class="form-control" id="short_url" value="{{$shortURL}}">
                </div>
            </div>
            <div class="row text-center">
                <div class="col col-md-5">
                    <a href="{{url('/')}}" class="btn btn-danger">Back</a>
                </div>
            </div>
    </div>
    
    </body>
</html>
