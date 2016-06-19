<?php namespace App\Http\Controllers\Front;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Constants;

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

	protected $newsRepo;

	public function __construct(
        INewRepo $newsRepo
    ) {
        $this->newsRepo = $newsRepo;
    }

    public function index(){
        $activeHeaderMenu = Constants::NEWS;

        $news = News::orderBy('updated_at','decs')->paginate(10);

        return view('front/news/index')
                ->with('activeHeaderMenu',$activeHeaderMenu)
                ->with('news',$news);

    }

    public function profile(Request $request, $slug, $id)
    {
        $activeHeaderMenu = Constants::NEWS;
        $news = News::find($id);
        if(!$news){
            return $this->errorView();
        }
        
        return view('front/news/profile')
            ->with('activeHeaderMenu',$activeHeaderMenu)
            ->with('news',$news);
    }

   
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
