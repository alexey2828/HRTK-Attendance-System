<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>XRTK</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
@include('layouts.header')  
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Профіль</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ Auth::user()->name }}</h1>
                почта - {{ Auth::user()->email }}<br>
                группа - {{ Auth::user()->role }}<br>
            </div>
        </div><!--/.row-->
        <div class="row">
        </div><!--/.row-->
        

    </div>  
</body>
</html>
