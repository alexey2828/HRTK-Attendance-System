<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getFormData(){
        return view('upload_data');
    }

    public function uploadData(Request $request){

    	$groupTableUpdate = Auth::user()->role;
		$date = date("d.m.Y");
		$a = 0;
	
		foreach ($request->studentName as $studentNameItem) {
    	    \DB::table($groupTableUpdate)->where('studentName', $studentNameItem)->update(
			[
				'studentName' => $studentNameItem,
				'attendance' => $request->attendance[$a++],
				'date' => $date
			]);
    	}
    	return view('home');
    }

    public function getFormDataGrades(){
        return view('upload_grade');
    }

    public function uploadDataGrades(Request $request){

    	$groupTableUpdate = Auth::user()->role;
		$date = date("d.m.Y");
		$a = 0;
		
		foreach ($request->studentName as $studentNameItem) {
    	    \DB::table($groupTableUpdate)->where('studentName', $studentNameItem)->update(
			[
				'studentName' => $studentNameItem,
				'grade' => $request->grade[$a++],
				'date' => $date,
				'semester' => $request->semester + 1
			]);
    	}

    	return view('home');
    }

    public function dataOutput(){

    	$groupTableOutput = Auth::user()->role;

    	$dataOutput = DB::table($groupTableOutput)
        	->select('*')
			->get();
	

	return view('table', compact('dataOutput'));
	}

    public function dataOutputGrade(){

    	$groupTableOutput = Auth::user()->role;

    	$dataOutput = DB::table($groupTableOutput)
        	->select('*')
			->get();
	

	return view('grades', compact('dataOutput'));
	}


    public function dataOutputIndex(){
    	$dataOutputIndex = DB::table('courses')
        	->select('*')
			->get();

		$headmanList = DB::table('users')->where('role', '<>', null)
        	->select('*')
			->get();
	
	return view('index', compact('dataOutputIndex', 'headmanList'));
	}

    public function dataOutputReport(){
    	$dataOutputReportGroup1 = DB::table('ki-418')
        	->select('*')
			->get();
    	$dataOutputReportGroup2 = DB::table('ki-118')
        	->select('*')
			->get();
    	$dataOutputReportGroup3 = DB::table('ki-417')
        	->select('*')
			->get();
	
	return view('report', compact('dataOutputReportGroup1', 'dataOutputReportGroup2', 'dataOutputReportGroup3'));
	}

}
