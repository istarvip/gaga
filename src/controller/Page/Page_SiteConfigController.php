<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 20/08/2018
 * Time: 5:24 PM
 */

class Page_SiteConfigController extends  HttpBaseController
{
    public function doIndex()
    {
//        parent::doIndex(); // TODO: Change the autogenerated stub
        $this->index();
    }

    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        $configData = $this->getSiteConfigFromDB();
        $configData = json_encode($configData);
        $callBack = $_GET['callback'];
        $configDataJson = json_encode($configData);
        echo "$callBack($configDataJson);";
    }

    /**
     * 查库操作
     */
    private function getSiteConfigFromDB()
    {
        try {
            $results = $this->ctx->SiteConfigTable->selectSiteConfig(['enableInvitationCode', 'enableRealName', 'siteIdPubkPem']);
            return $results;
        } catch (Exception $e) {
            $tag = __CLASS__ . "-" . __FUNCTION__;
            $this->ctx->Wpf_Logger->error($tag, " errorMsg = " . $e->getMessage());
            return [];
        }
    }
}