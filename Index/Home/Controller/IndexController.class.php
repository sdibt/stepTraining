<?php
namespace Home\Controller;
use Domain\Person;
use Home\Fetcher\FetcherBoot;
use Think\Controller;

class IndexController extends Controller {

    public function index(){
        $person1 = new Person("11171228", "11171228", "11171228", "11171228", "11171228", "11171228");
        $personList = array($person1);
        // todo get person from db

        foreach($personList as $person) {
            FetcherBoot::instance()->fetchPageHtml($person);
        }
    }
}