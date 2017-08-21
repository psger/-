<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Excel;
use App\News;
use DB;

class ExcelController extends Controller
{

		//Excel文件导入功能 By Laravel学院
		public function import_page(){
		    // $filePath = 'storage/exports/'.iconv('UTF-8', 'GBK', '学生成绩').'.xls';
		    // Excel::load($filePath, function($reader) {
		    //     $data = $reader->all();
		    //     dd($data);
		    // });
		    return view('import');
		}

		public function import_insert(){
			Excel::load(Input::file('excel_file'), function($reader) {
		        $reader->each(function ($sheet) {
		        	News::firstOrCreate($sheet->toArray());
		        	return $sheet;
		        });
		      });
            \Session::flash('flash_message', '添加成功');
            return redirect()->back();
		}

		public function export_excel(){
		    $results = DB::select("select * from news,grade where news.stu_id = grade.stu_id");
		    //dd($results);
            $output= [
                ['年级编号','班级编号','班级名称','学号','姓名','民族代码','性别','出生日期','学生来源','身份证号','家庭住址','身高','体重','肺活量','50米跑','立定跳远','坐位体前屈','800米跑','1000米跑','一分钟仰卧起坐','引体向上','左眼视力','右眼视力'],
            ];
            foreach ($results as $result){
                //dd($result->num);
                array_push($output,[$result->num,$result->class_id,$result->class_name,$result->stu_id,$result->stu_name,
                    $result->stu_nation,$result->stu_sex,$result->stu_birth,$result->stu_source,$result->stu_identity,$result->stu_address,
                    $result->height,$result->weight,$result->gas,$result->fm,$result->jump,$result->sit_flexion,$result->em,
                    $result->sit_ups,$result->bodyup,$result->left_eye,$result->right_eye
                ]);
            }
		//dd($output);
		Excel::create('学生成绩',function($excel) use ($output){
			$excel->sheet('score', function($sheet) use ($output){
				$sheet->rows($output);
			});
		})->export('xls');
	
		
	}
    
 }
