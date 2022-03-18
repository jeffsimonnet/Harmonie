<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;

class SiteDataProvider
{

    public $sitename = 'Harmonie';
    public $siteurl = 'https://www.harmonie.fr';
    public $description = '';
    public $social = [
        "twitter" => "https://www.twitter.com/sas_harmonie",
        "facebook" => "https://www.facebook.com/harmonie.entreprise.ravalement/",
        "linkedin" => "https://www.linkedin.com/company/harmonie-s.a.s"
    ];
    public $contact = [
        "address" => "6 bis, rue du Maréchal Foch",
        "zipcode" => "78600",
        "city" => "MAISONS-LAFFITE",
        "phone" => "01 34 93 10 60",
        "fax" => "01 34 93 10 65",
        "email" => "contact@harmonie.fr"
    ];
    protected $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function getHost()
    {
        $domain = explode('.', $_SERVER['HTTP_HOST']);
        return str_replace('127', 'local', $domain[0]);
    }

    public function getOffuscateBypass() {
        return in_array($this->requestStack->getCurrentRequest()->attributes->get('_route'), ['home', 'blog_index', 'blog_index_page', 'blog_category', 'blog_category_page']);
    }
}
