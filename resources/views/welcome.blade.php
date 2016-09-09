<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        {!!Html::style ('assets/css/bootstrap.min.css')!!}
        {!!Html::style ('assets/css/bootstrap.css')!!}
        {!!Html::style ('assets/js/bootstrap.min.js')!!}
        <style>
            .message{
                color: red;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to('/')}}">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            {!!Form::text('search',null,array('class'=>'form-control input-sm','placeholder'=>'Search'))!!}
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Search</button>
                        <li><a href="{{ URL::to('logout') }}"></a></li>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
        <br><br><br>
        <div class="container">
            <div class="panel panel-default">
               <div class="panel-body">
                   @yield('content')
               </div>
            </div>
        </div>
    </body>
</html>
