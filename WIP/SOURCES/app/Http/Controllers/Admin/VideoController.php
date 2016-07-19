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
        $videoLinkChanel = '';
        $policy = '';

        if($request->method() == 'GET'){
            $videoConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE);
            $videoChanelConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE_CHANEL);
            $policyConfig = $this->configRepo->findByCode(Constants::CONFIG_POLICY);

            if($videoConfig){
                $videoLink = $videoConfig->value;
            }
            if($videoChanelConfig){
                $videoLinkChanel = $videoChanelConfig->value;
            }

            if($policyConfig){
                $policy = $policyConfig->value;
            }
        }else{
            $videoLink = $request->input('videoLink');
            $videoLinkChanel = $request->input('videoLinkChanel');
            $policy = $request->input('policy');

            $videoConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE);
            $videoChanelConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE_CHANEL);
            $policyConfig = $this->configRepo->findByCode(Constants::CONFIG_POLICY);

            if(!$videoConfig) {
                $videoConfig = new Config();
                $videoConfig->code = Constants::CONFIG_YOUTUBE;
            }
            if(!$videoChanelConfig) {
                $videoChanelConfig = new Config();
                $videoChanelConfig->code = Constants::CONFIG_YOUTUBE_CHANEL;
            }

            if(!$policyConfig) {
                $policyConfig = new Config();
                $policyConfig->code = Constants::CONFIG_POLICY;
            }

            $videoConfig->value = $videoLink;
            $videoConfig->save();

            $videoChanelConfig->value = $videoLinkChanel;
            $videoChanelConfig->save();

            $policyConfig->value = $policy;
            $policyConfig->save();
        }


        return view('admin.video.list')
            ->with('activeMenu', Constants::VIDEO)
            ->with('pageTitle', trans("messages.admin.title.video"))
            ->with('videoLinkChanel', $videoLinkChanel)
            ->with('videoLink', $videoLink)
            ->with('policy', $policy);
    }
}
