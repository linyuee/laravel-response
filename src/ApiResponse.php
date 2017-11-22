<?php
/**
 * Created by PhpStorm.
 * User: yuelin
 * Date: 2017/11/22
 * Time: 下午12:05
 */

class ApiResponse
{
    private $responseData;
    public function __construct()
    {
        $this->responseData = array(
            'data'=>[],
            'message'=>'',
            'is_page'=>false,
            'status_code'=>200
        );

    }

    public function json($data){
        $this->responseData['data'] = $data;
        return json_encode($this->responseData);
    }

    public function jsonPage($data){

    }

    public function xml(){

    }
}