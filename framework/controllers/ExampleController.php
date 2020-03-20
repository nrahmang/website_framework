<?php namespace Controller;

class ExampleController
{

    public static function test(){
        $data = array(
            'h1'    =>  \Model\ExampleModel::test()
        );
        \View::page('home',$data);
    }

}