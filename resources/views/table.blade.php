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
				<li class="active">Таблиця</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Таблиця</h1>
			</div>
		</div><!--/.row-->
		
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Прізвище</th>
      <th scope="col">1 Пара</th>
      <th scope="col">2 Пара</th>
      <th scope="col">3 Пара</th>
      <th scope="col">4 Пара</th>
    </tr>
  </thead>

    <form id="ddd" method="post" action="{{ route('upload_data') }}" enctype="multipart/form-data">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    <script type="text/javascript">
    	function change(identifier) {
 			identifier.style.background = "#30a5ff";
 			identifier.style.color = "#ffffff";
 			identifier.value = "Пораховано";
		}
    </script>
    <input type="button" class="check btn btn-outline-secondary" title="Порахувати" value="Порахувати" onclick="change(this)" id="btn">
		@foreach ($dataOutput as $dataOutputItem)
		<tbody>
		  <tr>
		    <td>{{ $dataOutputItem->studentName }}</td>
		    <input style="display: none" class="form-check-input" type="text" value="{{ $dataOutputItem->studentName }}" name="studentName[]">
		    <td class="a{{ $dataOutputItem->id }}"><input type="checkbox" id="{{ $dataOutputItem->id }}" value="1"></td>
		    <td class="a{{ $dataOutputItem->id }}"><input type="checkbox" id="{{ $dataOutputItem->id }}" value="1"></td>
	  		<td class="a{{ $dataOutputItem->id }}"><input type="checkbox" id="{{ $dataOutputItem->id }}" value="1"></td>
		    <td class="a{{ $dataOutputItem->id }}"><input type="checkbox" id="{{ $dataOutputItem->id }}" value="1"></td>
		    
	  		<td style="display: none;" class="a{{ $dataOutputItem->id }}"><input id="b{{ $dataOutputItem->id }}" value="" name="attendance[]"></td>
	  
		    <script>
				document.querySelector('input.check').addEventListener('click', function(e){	  
				  const checked = document.querySelectorAll('.a<?php echo $dataOutputItem->id;?> input:checked');
				  let sum = <?php echo $dataOutputItem->attendance;?>;
				  checked.forEach(box => sum += +box.value);
				  console.log(sum);
				  document.getElementById("b<?php echo $dataOutputItem->id;?>").innerHTML = sum;
				  var el = document.getElementById('b{{ $dataOutputItem->id }}');
				  el.value = sum;
				});
		    </script>
	  
		  </tr>
		</tbody>
		@endforeach
	
	<button class="btn btn-primary" style="margin-left: 10px" id="btn" type="submit" type="button">Відправити</button>
	</form>

</table>

	</div>	<!--/.main-->
</body>

</html>

