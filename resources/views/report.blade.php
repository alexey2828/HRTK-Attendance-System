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
                <li class="active">Звіт</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Звіт</h1>
                <div class="row" style="overflow: auto; white-space: nowrap; width: 100%;">
                    <div class="col-md-2" style="background: white; box-shadow: 0 0 2px rgba(0,0,0,0.1); margin-left: 2px">
                        <details>
                            <summary><h3><b>KI-417</b></h3></summary>
                            @foreach($dataOutputReportGroup1 as $dataOutputReportGroupItem)
                                <h4>{{ $dataOutputReportGroupItem->studentName }}</h4>
                                
                                пропусків - <a id="a{{ $dataOutputReportGroupItem->studentName }}"></a><br>
                                відвідувань - <a>{{ $dataOutputReportGroupItem->attendance }}</a><br>
                                <details><summary><b>Оцінки</b></summary>
                                    <h style="margin-left: 10px">Середній бал: <a id="b{{ $dataOutputReportGroupItem->studentName }}"></a></h><br>
                                </details>
                                
                                <script type="text/javascript">
                                    allAt = 100;
                                    sum = allAt - '<?php echo $dataOutputReportGroupItem->attendance; ?>';
                                    document.getElementById("a<?php echo $dataOutputReportGroupItem->studentName; ?>").innerHTML = sum;

                                    gradesSum = '<?php echo $dataOutputReportGroupItem->grade; ?>' / '<?php echo $dataOutputReportGroupItem->semester; ?>';
                                    document.getElementById("b<?php echo $dataOutputReportGroupItem->studentName; ?>").innerHTML = gradesSum.toFixed(2);
                                </script>
                                <div style="border-bottom: 1px solid #e3e6e9; margin-top: 10px"></div>
                            @endforeach
                            <br>
                        </details>
                    </div>
                 
                    <div class="col-md-2" style="background: white; box-shadow: 0 0 2px rgba(0,0,0,0.1); margin-left: 2px">
                        <details>
                            <summary><h3><b>KI-427</b></h3></summary>
                            @foreach($dataOutputReportGroup2 as $dataOutputReportGroupItem)
                                <h4>{{ $dataOutputReportGroupItem->studentName }}</h4>
                                
                                пропусків - <a id="a{{ $dataOutputReportGroupItem->studentName }}"></a><br>
                                відвідувань - <a>{{ $dataOutputReportGroupItem->attendance }}</a><br>
                                <details><summary><b>Оцінки</b></summary>
                                    <h style="margin-left: 10px">Середній бал: <a id="b{{ $dataOutputReportGroupItem->studentName }}"></a></h><br>
                                </details>
                                <script type="text/javascript">
                                    allAt = 100;
                                    sum = allAt - '<?php echo $dataOutputReportGroupItem->attendance; ?>';
                                    document.getElementById("a<?php echo $dataOutputReportGroupItem->studentName; ?>").innerHTML = sum;

                                    gradesSum = '<?php echo $dataOutputReportGroupItem->grade; ?>' / '<?php echo $dataOutputReportGroupItem->semester; ?>';
                                    document.getElementById("b<?php echo $dataOutputReportGroupItem->studentName; ?>").innerHTML = gradesSum.toFixed(2);
                                </script>
                                <div style="border-bottom: 1px solid #e3e6e9; margin-top: 10px"></div>
                            @endforeach
                            <br>
                        </details>
                    </div>
                 
                    <div class="col-md-2" style="background: white; box-shadow: 0 0 2px rgba(0,0,0,0.1); margin-left: 2px">
                        <details>
                            <summary><h3><b>KI-437</b></h3></summary>
                            @foreach($dataOutputReportGroup3 as $dataOutputReportGroupItem)
                                <h4>{{ $dataOutputReportGroupItem->studentName }}</h4>
                                
                                пропусків - <a id="a{{ $dataOutputReportGroupItem->studentName }}"></a><br>
                                відвідувань - <a>{{ $dataOutputReportGroupItem->attendance }}</a><br>
                                <details><summary><b>Оцінки</b></summary>
                                    <h style="margin-left: 10px">Середній бал: <a id="b{{ $dataOutputReportGroupItem->studentName }}"></a></h><br>
                                </details>
                                <script type="text/javascript">
                                    allAt = 100;
                                    sum = allAt - '<?php echo $dataOutputReportGroupItem->attendance; ?>';
                                    document.getElementById("a<?php echo $dataOutputReportGroupItem->studentName; ?>").innerHTML = sum;

                                    gradesSum = '<?php echo $dataOutputReportGroupItem->grade; ?>' / '<?php echo $dataOutputReportGroupItem->semester; ?>';
                                    document.getElementById("b<?php echo $dataOutputReportGroupItem->studentName; ?>").innerHTML = gradesSum.toFixed(2);
                                </script>
                                <div style="border-bottom: 1px solid #e3e6e9; margin-top: 10px"></div>
                            @endforeach
                            <br>
                        </details>
                    </div>

                </div>
            </div>
        </div><!--/.row-->
        <div class="row">
        </div><!--/.row-->
        

    </div>  
</body>
</html>



