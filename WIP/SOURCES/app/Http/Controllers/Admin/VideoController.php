<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Libs\Constants;
use App\Model\Config;
use App\Repositories\IConfigRepo;
use Illuminate\Http\Request;
use Validator;
use App\Helpers\FileHelper;

class VideoController extends Controller {

    protected $configRepo;

    public function __construct(IConfigRepo $configRepo) {
        $this->configRepo = $configRepo;
    }

    public function manageVideo(Request $request){
        $videoLink = '';
        $videoLinkChanel = '';
        $policy = '';
        $bannerLeftImage = '';
        $bannerRightImage = '';
        $newsBannerImage = '';

        if($request->method() == 'GET'){
            $videoConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE);
            $videoChanelConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE_CHANEL);
            $policyConfig = $this->configRepo->findByCode(Constants::CONFIG_POLICY);
            $bannerLeftImageConfig = $this->configRepo->findByCode(Constants::CONFIG_LEFT_BANNER);
            $bannerRightImageConfig = $this->configRepo->findByCode(Constants::CONFIG_RIGHT_BANNER);
            $newsBannerImageConfig = $this->configRepo->findByCode(Constants::CONFIG_NEWS_BANNER);

            if($videoConfig){
                $videoLink = $videoConfig->value;
            }
            if($videoChanelConfig){
                $videoLinkChanel = $videoChanelConfig->value;
            }

            if($policyConfig){
                $policy = $policyConfig->value;
            }
            if($bannerLeftImageConfig){
                $bannerLeftImage = $bannerLeftImageConfig->value;
            }if($bannerRightImageConfig){
                $bannerRightImage = $bannerRightImageConfig->value;
            }if($newsBannerImageConfig){
                $newsBannerImage = $newsBannerImageConfig->value;
            }
        }else{
            $videoLink = $request->input('videoLink');
            $videoLinkChanel = $request->input('videoLinkChanel');
            $policy = $request->input('policy');

            $videoConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE);
            $videoChanelConfig = $this->configRepo->findByCode(Constants::CONFIG_YOUTUBE_CHANEL);
            $policyConfig = $this->configRepo->findByCode(Constants::CONFIG_POLICY);
            $bannerLeftImageConfig = $this->configRepo->findByCode(Constants::CONFIG_LEFT_BANNER);
            $bannerRightImageConfig = $this->configRepo->findByCode(Constants::CONFIG_RIGHT_BANNER);
            $newsBannerImageConfig = $this->configRepo->findByCode(Constants::CONFIG_NEWS_BANNER);

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

            if(!$bannerLeftImageConfig) {
                $bannerLeftImageConfig = new Config();
                $bannerLeftImageConfig->code = Constants::CONFIG_LEFT_BANNER;
            }
            if(!$bannerRightImageConfig) {
                $bannerRightImageConfig = new Config();
                $bannerRightImageConfig->code = Constants::CONFIG_RIGHT_BANNER;
            }

            if(!$newsBannerImageConfig) {
                $newsBannerImageConfig = new Config();
                $newsBannerImageConfig->code = Constants::CONFIG_NEWS_BANNER;
            }


            $bannerImgPath = FileHelper::getBannerPath();
            // dd($bannerImgPath );
            // dd($imageName);

            if (!empty($request->file('banner_left_image_'))) {
                $imageName = FileHelper::getNewFileName();

                $imgExtension = $request->file('banner_left_image_')->getClientOriginalExtension();
                $request->file('banner_left_image_')->move($bannerImgPath, $imageName . '.' . $imgExtension);
                $bannerLeftImageConfig->value = $imageName . '.' . $imgExtension;
                // dd($bannerLeftImageConfig->value);
                $bannerLeftImageConfig->save();
            }
            if (!empty($request->file('banner_right_image_'))) {
                $imageName = FileHelper::getNewFileName();

                $imgExtension = $request->file('banner_right_image_')->getClientOriginalExtension();
                $request->file('banner_right_image_')->move($bannerImgPath, $imageName . '.' . $imgExtension);
                $bannerRightImageConfig->value = $imageName . '.' . $imgExtension;
                $bannerRightImageConfig->save();
            }
            if (!empty($request->file('news_banner_image_'))) {
                $imageName = FileHelper::getNewFileName();
                $imgExtension = $request->file('news_banner_image_')->getClientOriginalExtension();
                $request->file('news_banner_image_')->move($bannerImgPath, $imageName . '.' . $imgExtension);
                $newsBannerImageConfig->value = $imageName . '.' . $imgExtension;
                $newsBannerImageConfig->save();
            }
        }


        return view('admin.video.list')
            ->with('activeMenu', Constants::VIDEO)
            ->with('pageTitle', trans("messages.admin.title.video"))
            ->with('videoLinkChanel', $videoLinkChanel)
            ->with('videoLink', $videoLink)
            ->with('policy', $policy)
            ->with('bannerLeftImageConfig', $bannerLeftImageConfig)
            ->with('bannerRightImageConfig', $bannerRightImageConfig)
            ->with('newsBannerImageConfig', $newsBannerImageConfig);
    }
}
