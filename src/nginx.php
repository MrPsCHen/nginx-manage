<?php


namespace Doit\NginxManage;


class nginx
{
    public nginx_server_conf_model $nginx_server_conf;
    public function __construct()
    {
        $this->nginx_server_conf = new nginx_server_conf_model();
    }

    public function create(){
        $this->nginx_server_conf = new nginx_server_conf_model();
        $this->nginx_server_conf->setListen();
        $this->nginx_server_conf->setServer("192.168.123.1");
    }
    public function output()
    {
        $this->nginx_server_conf->setServer(["www.test.com",'www.back.com']);
        $this->nginx_server_conf->php_flag = true;
        $this->nginx_server_conf->ssl_flag = true;
        $this->nginx_server_conf->setIndex(["index.php",'index.html']);
        return (new nginx_server_conf_build($this->nginx_server_conf))->output();
    }

}