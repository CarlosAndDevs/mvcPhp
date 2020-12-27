<?php 

namespace App\Http;

class Response
{
    
    protected $view;//array,json,pdf etc ...

    public function __construct($view)
    {
        $this->view = $view; // home,contact etc ....
    }

    public function getView()
    {
        return $this->view;
    }

    public function send()
    {
        $view = $this->getView();

        //home
        $content = file_get_contents(__DIR__."/../../views/$view.php");

        require viewPath('layout');
    }
}