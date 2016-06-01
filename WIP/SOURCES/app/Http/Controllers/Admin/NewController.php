<?php 

namespace App\Http\Controllers\Admin;

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

class NewController extends Controller {

	protected $newRepo;

	public function __construct(
        INewRepo $newRepo
    ) {
        $this->newRepo = $newRepo;
    }

    public function newsList(Request $request)
    {
        $params = $request->all();

        $pageSize = config('front.pageSize');
        $news = $this->newRepo->search($params, $pageSize);

        return view('admin/news/list')
            ->with('news', $news);
    }


    public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            News::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
    }

    public function newForm(Request $request){
    	
    	if ($request->isMethod('get')){
	    	// if ($request->has('id')) {
      //           $new = $this->newRepo->findById($request->get('id'));

      //           if ($new == null) {
      //               $new = new News;
      //           }
      //       } else {
      //           $new = new News;
      //       }
            $new = new News;
	        return view('front/new/new_form')->with('new',$new);
        } else {
     //    	$validator = Validator::make($request->all(), [
		   //          'tieu_de' => 'required|max:1000',
					// 'noi_dung' => 'required',
					// 'news_image_' => 'image|max:300',
					// 'link' => 'URL',
	    //     ]);
	     //    if($validator->fails()) {
	        	
	     //        $errors = $validator->errors()->all();
	     //        return redirect(route('new.form'))
	     //                ->withErrors($validator)
	     //                ->withInput();

		    // }else{

	        	$input = $request->all();
	        	$new = new News;
	            $new = $this->getGeneralInfoByInput($new, $input, $request,'1');

	            $new->save();
	            if ($new->id) {
	                $new->save();
	            }
	            return redirect(route('new.form'));
	        }
	    // }
    }

        /**
     * @param $candidate
     * @param $input
     * @return mixed
     */
    private function getGeneralInfoByInput($new, $input, $request, $index)
    {
        $new->title = $input['tieu_de'];
        $new->content = $input['noi_dung'];	
        $new->description = $input['mieu_ta'];
        $new->password = $input['mat_khau'];
        $new->link = $input['link'];

        $newImgPath = FileHelper::getNewsImgPath();
        $imageName = FileHelper::getNewFileName($index);
        if (!empty($request->file('news_image_'))) {
            $imgExtension = $request->file('news_image_')->getClientOriginalExtension();
            $request->file('news_image_')->move($newImgPath, $imageName . '.' . $imgExtension);
            $new->image = $imageName . '.' . $imgExtension;

        }
        return $new;
    }


}
