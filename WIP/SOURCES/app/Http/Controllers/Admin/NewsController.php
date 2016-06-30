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
use App\Libs\Constants;
use URL;

class NewsController extends Controller {

	protected $newRepo;

	public function __construct(
        INewRepo $newRepo
    ) {
        $this->newRepo = $newRepo;
    }

    public function newsList(Request $request)
    {
        $activeMenu = Constants::NEWS;

        $name 		= $request->input('name');
        $newsList = $this->newRepo->all();
        return view('admin.news.list')
            ->with('activeMenu', $activeMenu)
            ->with('newsList', $newsList)
            ->with('pageTitle', Constants::NEWS_LIST_PT)
            ->with('name', $name);
    }

    public function newsForm(Request $request) {

        $activeMenu = Constants::NEWS;
        $pageTitle  = Constants::NEWS_NEW_PT;
        // get method
        if ($request->isMethod('get')) {
            
            if ($request->has('id')) {
                    
                $news = News::find($request->get('id'));
                $pageTitle  = Constants::NEWS_UPDATE_PT;
            } else {
                $news = new News();
            }
                
            return view('admin.news.news_form')
                        ->with('activeMenu', $activeMenu)
                        ->with('pageTitle', $pageTitle)
                        ->with('news',    $news);
        }else {
            
            // get form input data
            $input = $request->all();
            
            if ($request->has('id')) {
                
                $news = News::find($request->get('id'));
                $news = $this->getGeneralInfoByInput($news, $input, $request,'1');                        
                $news->save();
            } else {             
                $validator = $this->validatorNews($request->all());
                
                if ($validator->fails()) {
                     return Redirect::back()->withErrors($validator)->withInput();

                }
                $news = new News;             
                $news = $this->getGeneralInfoByInput($news, $input, $request,'1');
                $news->save();
            }
            
            return redirect(route('admin.news.list'));
        }
    }

    public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            News::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
    }

    private function getGeneralInfoByInput($news, $input, $request, $index)
    {
        $news->title = $input['tieu_de'];
        $news->content = $input['noi_dung']; 
        $news->description = $input['mieu_ta'];
        $news->password = $input['mat_khau'];
        $news->link = $input['link'];

        $newsImgPath = FileHelper::getNewsImgPath();
        $imageName = FileHelper::getNewFileName($index);
        if (!empty($request->file('news_image_'))) {
            $imgExtension = $request->file('news_image_')->getClientOriginalExtension();
            $request->file('news_image_')->move($newsImgPath, $imageName . '.' . $imgExtension);
            $news->image = $imageName . '.' . $imgExtension;
        }
        return $news;
    }
    public function upload_image(Request $request= null)
    {   
        // print($request->file('file'));
        // die();
        // dd('upload_image');
                    

        if($request->hasFile('file')){
            $filename = str_random(20).'_'.$request->file('file')->getClientOriginalName();
            $image_path = public_path() . '/news/images/';
            $request->file('file')->move(
                $image_path, $filename
            );
            $root = URL::to('news/images/');
            echo "$root".'/'."$filename";    
        }
        else{
            echo 'Oh No! Uploading your image has failed.';
        }
    }
    private function validatorNews($data)
    {
        $messages = [
            'news_image_.image' => 'Vui lòng chọn file hình ảnh!',
            'news_image_.max' => 'Vui lòng chọn file có kích thước nhỏ hơn 2MB! '
        ];

        return Validator::make($data, [
            'news_image_' => 'image|max:2000',
        ], $messages);
    }
}
