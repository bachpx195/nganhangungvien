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
        $pageSize = config('front.pageSize');
        $news = $this->newRepo->search($name, $pageSize);

        return view('admin/news/list')
            ->with('news', $news)
            ->with('name', $name);
    }

}
