<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PixelCalculator</title>

        <!-- Fonts -->
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <style>
            .r{
                line-height: 1.54;
                font-size: small;
                font-weight: normal;
                margin: 0
            }
            .g{
                font-family: arial,sans-serif;
                text-align: left;
                margin-top: 0;
                margin-bottom: 26px;
                line-height: 1.2;
                text-align: left;
                font-size: small;
            }
            .rc{
                position: relative;
            }
            a{
                text-decoration: none;
            }
            a:link{
                cursor: pointer;
                color: #1a0dab;
            }
            h3{
                font-size: 18px;
    line-height: 1.33;
    font-weight: normal;
    margin: 0;
    padding: 0;
    margin-block-start: 1em;
            }
            .LC20lb{
                display: inline-block;
            }
            .TbwUpd{
                padding-bottom: 1px;
    padding-top: 1px;
    line-height: 1.54;
    display: inline-block;
            }
            .iUh30 {
    font-size: 14px;
    padding-top: 1px;
    line-height: 1.43;
}
cite{
    color: #006621;
    font-style: normal;
}
.s{
    color: #545454;
    max-width: 48em;
    line-height: 1.54;
}
.st {
    line-height: 1.54;
    word-wrap: break-word;
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">PixelCalculator</h2>
                </div>
                <div class="row">
                    {{Form::open(['action' => 'CalcController@calculate', 'method' => 'POST', 'id' => 'calculateForm'])}}
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::text('title', '', ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'Enter title here', 'autocomplete' => 'off']) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::text('url', '', ['id' => 'url', 'class' => 'form-control', 'placeholder' => 'Enter url here', 'autocomplete' => 'off']) }}
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::textarea('description', '', ['class' => 'form-control', 'id' => 'description', 'cols' => 30, 'rows' => 7, 'placeholder' => 'Enter description here', 'autocomplete' => 'off']) }}
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
            <div class="row">
                <div class="g"><!--m-->
                    <div data-hveid="CAAQAA" data-ved="2ahUKEwiL8azV1KTiAhWHuI8KHV0sCcgQFSgAMAF6BAgAEAA">
                        <div class="rc">
                            <div class="r">
                                <a href="#" id="responseUrlAnchor">
                                    <h3 class="LC20lb" id="responseTitle"></h3><br>
                                    <div class="TbwUpd">
                                        <cite class="iUh30 bc" id="responseUrl"></cite>
                                    </div>
                                </a>
                            </div>
                            <div class="s">
                                <div>
                                    <span class="st" id="responseDescription"></span>
                                </div>
                            </div>
                        </div>
                    </div><!--n-->
                </div>
            </div>
        <script>
            function delay(callback, ms) {
                var timer = 0;
                return function() {
                    var context = this, args = arguments;
                    clearTimeout(timer);
                    timer = setTimeout(function () {
                    callback.apply(context, args);
                    }, ms || 0);
                };
            }
            jQuery('#calculateForm').keyup(delay(function (e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                    }
                });
                jQuery.ajax({
                    url: "{{ url('calculate') }}",
                    method: 'post',
                    data: {
                        title: jQuery('#title').val(),
                        url: jQuery('#url').val(),
                        description: jQuery('#description').val(),
                    },
                    success: function(data){
                        if(data.title)
                            $('#responseTitle').html(data.title);
                        if(data.url)
                            $('#responseUrl').html(data.url);
                        if(data.description)
                            $('#responseDescription').html(data.description);
                    },
                    error: function(data){
                        
                    },
                });
            },300));
            jQuery('#calculate').click(function (e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                    }
                });
                jQuery.ajax({
                    url: "{{ url('calculate') }}",
                    method: 'post',
                    data: {
                        title: jQuery('#title').val(),
                        url: jQuery('#url').val(),
                        description: jQuery('#description').val(),
                    },
                    success: function(data){
                        if(data.title)
                            $('#responseTitle').html(data.title);
                        if(data.url)
                            $('#responseUrl').html(data.url);
                        if(data.description)
                            $('#responseDescription').html(data.description);
                    },
                    error: function(data){
                        
                    },
                });
            });
        </script>
    </body>
</html>
