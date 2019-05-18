<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">PixelCalculate</h2>
                </div>
                <div class="row">
                    {{Form::open(['action' => 'CalcController@calculate', 'method'=> 'POST'])}}
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::text('title', '', ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'Enter title here']) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::text('url', '', ['id' => 'url', 'class' => 'form-control', 'placeholder' => 'Enter url here']) }}
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::textarea('description', '', ['class' => 'form-control', 'id' => 'description', 'cols' => 30, 'rows' => 7, 'placeholder' => 'Enter description here']) }}
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::submit('Calculate', ['id' => 'calculate', 'class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group"  id="status"></div>
                        </div>
                {{Form::close()}}
        </div>
    </body>
</html>
