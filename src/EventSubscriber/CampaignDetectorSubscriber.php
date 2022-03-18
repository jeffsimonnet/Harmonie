<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class CampaignDetectorSubscriber implements EventSubscriberInterface {

    public function onKernelRequest(RequestEvent $event) {
        $request = $event->getRequest();
        $data = $this->getCampaignData($request);
        if (!empty($data))
            $request->getSession()->set('_campaign', $data);
    }

    private function getCampaignData($request) {
        $data = [];

        $gclid = $request->query->get('gclid');
        $utm_source = $request->query->get('utm_source');

        if ($gclid) {
            $data["provenance"] = 'cpc';
            $data["campaign"] = 8;
        }
        elseif ($utm_source) {
            $data["utm_source"] = $utm_source;

            switch ($utm_source) {
                case '1': //retargeting
                    $data["provenance"] = '1';
                    $data["campaign"] = 35;
                    break;
                case 'taboola':
                    $data["provenance"] = 'taboola';
                    $data["campaign"] = 2;
                    break;
                case 'outbrain':
                    $data["provenance"] = 'outbrain';
                    $data["campaign"] = 5;
                    break;
                case 'Adwords':
                case 'adwords':
                    $data["provenance"] = 'adwords';
                    $data["campaign"] = 8;
                    break;
                case 'facebook':
                    $data["provenance"] = 'facebook';
                    $data["campaign"] = 10;
                    break;
                case 'facebookADS':
                    $data["provenance"] = 'facebookADS';
                    $data["campaign"] = 46;
                    break;
                case 'ligatus':
                    $data["provenance"] = 'ligatus';
                    $data["campaign"] = 3;
                    break;
                case 'bing':
                case 'bingCPC':
                case 'BingCPC':
                    $data["provenance"] = 'bing';
                    $data["campaign"] = 27;
                    break;
                case 'linkedin':
                    $data["provenance"] = 'linkedin';
                    $data["campaign"] = 26;
                    break;
                case 'Instagram':
                    $data["provenance"] = 'Instagram';
                    $data["campaign"] = 36;
                    break;
                case 'Gmail':
                    $data["provenance"] = 'Gmail';
                    $data["campaign"] = 37;
                    break;
                case 'GDN': //Google Display
                    $data["provenance"] = 'GDN';
                    $data["campaign"] = 38;
                    break;
                case 'sendinblue':
                    $data["provenance"] = 'sendinblue';
                    $data["campaign"] = 39;
                    break;
                case 'rtg_socman':
                    $data["provenance"] = 'rtg_socman';
                    $data["campaign"] = 40;
                    break;
                case 'BFMapp':
                    if ($request->query->get('utm_campaign') == "scpi-bfmbusi") {
                        $data["provenance"] = 'BFM Business';
                        $data["campaign"] = 43;
                    }
                    else {
                        $data["provenance"] = 'BFM TV';
                        $data["campaign"] = 45;
                    }
                    break;
                case 'BFM-Busi':
                    $data["provenance"] = 'BFM Business';
                    $data["campaign"] = 43;
                    break;
                case 'BFM':
                    $data["provenance"] = 'BFM TV';
                    $data["campaign"] = 45;
                    break;
                case 'LeadGen':
                    $data["provenance"] = 'LeadGen';
                    $data["campaign"] = 48;
                    break;
            }
        }

        return $data;
    }

    public static function getSubscribedEvents() {
        return [
            'kernel.request' => 'onKernelRequest',
        ];
    }

}
