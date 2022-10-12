<?php 

class App {
    protected $controler = 'Home';
    protected $method = 'index';
    protected $param = [];

    public function __construct() {
        $url = $this->parseUrl();
        
        //Controller
        if ( $url == null ) {
            $url = [$this->controler];
        }
        if(file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controler = $url[0];
            unset($url[0]);
        }
        

        require_once '../app/controllers/' . $this->controler . '.php';
        $this->controler = new $this->controler;

        //Method
        if(isset($url[1])) {
            if(method_exists($this->controler, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //Parameter
        if(!empty($url)) {
            $this->param = array_values($url);
        }

        //jalankan controler & method, serta kirimkan params jika ada
        call_user_func_array([$this->controler, $this->method], $this->param);

    }

    public function parseUrl() {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}