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
em{
    font-weight: bold;
    font-style: normal;
}
.col-3{width:28%; margin: 25px 0px; position: relative;} /* necessary to give position: relative to parent. */
.wrap{position:relative}
.wrap span{font: 12px "Lato", Arial, sans-serif;font-weight: bold}
label{font: 14px "Lato", Arial, sans-serif;}
input[type="text"]{font: 16px/16px "Lato", Arial, sans-serif; color: #333; width: 100%; box-sizing: border-box; letter-spacing: 1px;}
.effect-24{border: 0; padding: 5px 7px; border: 1px solid #ccc; position: relative; background: transparent;}
.effect-24 ~ .focus-bg:before,
.effect-24 ~ .focus-bg:after{content: ""; position: absolute; left: 50%; top: 50%; width: 0; height: 0; background-color: #ededed; transition: 0.3s; z-index: -1;}
.effect-24:focus ~ .focus-bg:before,
.has-content.effect-24 ~ .focus-bg:before{transition: 0.3s; width: 50%; left: 0; top: 0; height: 100%;}
.effect-24 ~ .focus-bg:after{left: auto; right: 50%; top: auto; bottom: 50%;}
.effect-24:focus ~ .focus-bg:after,
.has-content.effect-24 ~ .focus-bg:after{transition: 0.3s; width: 50%; height: 100%; bottom: 0; right: 0;}
.btn{border-radius: 4px;background-color: #aaa;border: none;color: #FFFFFF;text-align: center;
  font-size: 14px;padding: 8px;width: 110px;font: 16px "Lato", Arial, sans-serif;
}
.btn:hover, .btn:focus{
  border-radius: 4px;background-color: #777;border: none;color: #FFFFFF;text-align: center;font-size: 14px;
  padding: 8px;width: 110px;cursor: pointer;font: 16px "Lato", Arial, sans-serif;outline:0;
}
.bold{
    font: 26px "Lato", Arial, sans-serif;font-weight: bold;
}
.f{
    color:#777;
    line-height: 1.54;
}
.slp{
    display: block;
}
.fTKmHE99XE4__star-default {
    display: inline-block;
    overflow: hidden;
    top: 1px;
    position: relative;
    background-image: url(images/star.png);
    width: 65px;
    height: 13px;
    background-size: 13px 12px;
    background-repeat: repeat-x;
}
.fTKmHE99XE4__star-default span {
    display: block;
    background-image: url(images/rating-star.png);
    height: 13px;
    background-size: 13px 12px;
    background-repeat: repeat-x;
    overflow: hidden;
    position: relative;
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
                                        <div class="slp f" id="rich" style="display:none;">
                                            <g-review-stars>
                                                <span class="fTKmHE99XE4__star-default" role="img" aria-label="Rated 4.0 out of 5,">
                                                    <span style="width:53px"></span>
                                                </span>
                                            </g-review-stars> Rating: 4.2 - &lrm;1,547 votes - &lrm;Price range: ₹1400 for 2 people (approx.)
                                        </div>
                                        <span class="st" id="responseDescription"></span>
                                    </div>
                                </div>
                            </div>
                        </div><!--n-->
                    </div>
                </div><br>
                <div class="row">
                    {{Form::open(['action' => 'CalcController@calculate', 'method' => 'POST', 'id' => 'calculateForm'])}}
                        <div class="col-md-6 wrap">
                            <span style="display: inline-block;position:absolute; top:-18px"><span id="titlePixelWidth" style="color:#006621">0</span>/600 Pixels</span>
                            <div class="form-group col-3">
                                {{Form::text('title', '', ['id' => 'title', 'class' => 'form-control effect-24', 'placeholder' => 'Enter Title Here', 'autocomplete' => 'off']) }}
                                <span class="focus-bg"></span>
                            </div>
                        </div>
                        <div class="col-md-6 wrap">
                            <div class="form-group col-3">
                                {{Form::text('url', '', ['id' => 'url', 'class' => 'form-control effect-24', 'placeholder' => 'Enter URL Here', 'autocomplete' => 'off']) }}
                                <span class="focus-bg"></span>
                            </div>
                        </div>
                        
                        <div class="col-md-12 wrap">
                            <span style="display: inline-block;position:absolute; top:-18px"><span id="descriptionPixelWidth" style="color:#006621">0</span>/1600 Pixels</span>
                            <div class="form-group col-3">
                                {{Form::text('description', '', ['class' => 'form-control effect-24', 'id' => 'description', 'placeholder' => 'Enter Description Here', 'autocomplete' => 'off']) }}
                                <span class="focus-bg"></span>
                            </div>
                        </div>
                        <div class="col-md-3 wrap">
                            <div class="form-group col-3">
                                {{Form::text('highlight', '', ['class' => 'form-control effect-24', 'id' => 'highlight', 'placeholder' => 'Enter Keywords', 'autocomplete' => 'off']) }}
                                <span class="focus-bg"></span>
                            </div>
                        </div>
                        <div class="col-md-3 wrap">
                            <div class="form-group col-3">
                                {{Form::checkbox('rich', 'rich', '', ['id' => 'rich-snippet', 'onclick']) }}
                                {{Form::label('rich-snippet', 'Rich Snippet') }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::submit('Calculate', ['id' => 'calculate', 'class' => 'btn']) }}
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group"  id="status"></div>
                        </div>
                {{Form::close()}}
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
                        keywords: jQuery('#highlight').val(),
                    },
                    success: function(data){
                        $('#responseTitle').html(data.title);
                        $('#responseUrl').html(data.url);
                        $('#responseDescription').html(data.description);
                    },
                    complete: function(data){
                        $('#titlePixelWidth').html(document.getElementById('responseTitle').offsetWidth);
                        $('#descriptionPixelWidth').html(document.getElementById('responseDescription').offsetWidth);
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
                        keywords: jQuery('#highlight').val(),
                    },
                    success: function(data){
                        $('#responseTitle').html(data.title);
                        $('#responseUrl').html(data.url);
                        $('#responseDescription').html(data.description);
                    },
                    complete: function(data){
                        $('#titlePixelWidth').html(document.getElementById('responseTitle').offsetWidth);
                        $('#descriptionPixelWidth').html(document.getElementById('responseDescription').offsetWidth);
                    },
                    error: function(data){
                        
                    },
                });
            });
            jQuery('#rich-snippet').click(function (e){
                if ($(this).is(':checked')) {
                    $('#rich').show();
                }else{
                    $('#rich').hide();
                }               
            });
        </script>
    </body>
</html>
