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
				<li class="active">Головна</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Головна</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			@foreach($dataOutputIndex as $dataOutputIndexItem)
			
			<a href="{{ url('table') }}" style="text-decoration: none;">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div class="panel panel-blue panel-widget ">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<img width="50" src="https://img.icons8.com/ios-glyphs/50/ffffff/student-male.png"/>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">KI - {{ $dataOutputIndexItem->course }}</div>
								<div class="text-muted">{{ $dataOutputIndexItem->courseDetails }} курс</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			@endforeach

		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">Відповідальні старости</h1>
						</div>
					</div><!--/.row-->
					<div>
						@foreach($headmanList as $headmanListItem)
							<h4>{{ $headmanListItem->name }} - {{ $headmanListItem->role }}</h4>
						@endforeach
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
</body>

</html>

