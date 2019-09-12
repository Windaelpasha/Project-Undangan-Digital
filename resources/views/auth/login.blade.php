@extends('layouts.app')

@section('content')
<style type="text/css">
    body{
    background: url(https://c.pxhere.com/photos/99/d8/bokeh_blur_blue_yellow_calm_night_light_effect-1280051.jpg!d);

    /*background-color: #444;*/
    /*background: url(http://mymaplist.com/img/parallax/pinlayer2.png) no-repeat center center fixed,url(http://mymaplist.com/img/parallax/pinlayer1.png) no-repeat center center fixed,url(http://www.istartedsomething.com/bingimages/cache/AKHumpbacks_EN-AU1914968143.jpg) no-repeat center center fixed;    */
      /*-webkit-background-size: auto auto;*/
      /*-moz-background-size: auto auto;*/
      /*-o-background-size: auto auto;*/
      background-size: cover;
      opacity: 0.9;
}

.vertical-offset-100{
    padding-top:70px;
}
</style>

<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Undangan Digital</h3>
                </div>
                        
                <h4 class="_title" align="center" >Masuk Sebagai Admin</h4>
            <p class="sub-title" align="center" >Masukan Email dan kata sandi pada form di bawah.</p>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukan email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success" style="width: 150px;">
                                    Masuk
                                </button>

                                <script type="text/javascript">
                                    $(document).ready(function(){
                                    $(document).mousemove(function(e){
                                    TweenLite.to($('body'), 
                                        .5, 
                                     { css: 
                                        {
                                            'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"
                                        }
                                            });
                                        });
                                    });
                                </script>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>   
    </div>
</div>
@endsection








