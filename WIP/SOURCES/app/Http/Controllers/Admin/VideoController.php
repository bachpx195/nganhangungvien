<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Libs\Constants;
use App\Model\Config;
use App\Repositories\IConfigRepo;
use Illuminate\Http\Request;
use Validator;

class VideoController extends Controller {

    protected $configRepo;

    public function __construct(IConfigRepo $configRepo) {
        $this->configRepo = $configRepo;
    }

    public function manageVideo(Request $request){
        $videoLink = '';

        if($request->method() == 'GET'){
            $videoConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE);
            if($videoConfig){
                $videoLink = $videoConfig->value;
            }
        }else{
            $videoLink = $request->input('videoLink');
            $videoConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE);
            if(!$videoConfig) {
                $videoConfig = new Config();
                $videoConfig->code = Constants::CONFIG_YOUTUBE;
            }
            $videoConfig->value = $videoLink;
            $videoConfig->save();
        }


        return view('admin.video.list')
            ->with('activeMenu', Constants::VIDEO)
            ->with('pageTitle', trans("messages.admin.title.video"))
            ->with('videoLink', $videoLink);
    }
}
