<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\INewRepo;
use App\Model\News;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Helpers\FileHelper;
use App\Http\Requests\NewsRequest;
use Validator;

class NewsController extends Controller {

	protected $newRepo;

	public function __construct(
        INewRepo $newRepo
    ) {
        $this->newRepo = $newRepo;
    }

    public function newsList(Request $request)
    {
        $name 		= $request->input('name');
        $news = $this->newRepo->search($name);
        $pagination     = $news->appends($request->all());
        return view('admin.news.list')
            ->with('news', $news)
            ->with('pagination',    $pagination)
            ->with('name', $name);
    }

    public function newsForm(Request $request) {
    
        // get method
        if ($request->isMethod('get')) {
            
            if ($request->has('id')) {
                    
                $news = News::find($request->get('id'));
            } else {
                $news = new News();
            }
                
            return view('admin.news.news_form')
                        ->with('news',    $news);
        }else {
            
            // get form input data
            $input = $request->all();
            
            if ($request->has('id')) {
                
                $salary = Salary::find($request->get('id'));
                $salary->name = $input['name'];
                
                $salary->save();
            } else {
                
                $validator = $this->validatorSalary($request->all());
                
                if ($validator->fails()) {
                        
                    $this->throwValidationException(
                            $request, $validator
                    );
                }
                
                $salary = new Salary;
                $salary->name = $input['name'];
                
                $salary->save();
            }
            
            return redirect(route('admin.salary.list'));
        }
    }


}
