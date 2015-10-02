<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of api
 *
 * @author Adam
 */
class api
{
    private $requestMethod;
    private $requestURI;
    private $arguments = Array();

    public function __construct()
    {
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestURI    = $_SERVER['REQUEST_URI'];

        $this->FindMethod();
        $this->TakeArguments();
    }

    private function TakeArguments()
    {
        $this->$arguments = explode('/', rtrim($this->requestURI, '/'));
        $this->arguments = array_shift($this->arguments);
    }

    private function FindMethod()
    {
        switch ($this->requestMethod) {
            case 'POST':

                break;
            case 'GET':

                break;
            case 'PUT':

                break;
            case 'DELETE':

                break;

            default:

                break;
        }
    }
}