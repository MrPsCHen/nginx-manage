<?php


namespace Doit\NginxManage;


class nginx_server_conf_build
{
    private nginx_server_conf_model $model;
    public function __construct(nginx_server_conf_model $model)
    {
        $this->model = $model;
    }

    function output()
    {

        $output = $this->server_default();
        $this->model->ssl_flag &&$output.= $this->server_ssl();

        return file_put_contents('./servers.conf',$output);
    }


    function server_default()
    {

        $root           = strlen($this->model->root)?"root $this->model;":"";
        $root_localtion = strlen($this->model->root_location)?"root {$this->model->root_location};":"";

        $output =
            <<<EOT
            server {
                listen {$this->model->listen};
                $root
                server_name {$this->model->getServer()};
                location / {
                    $root_localtion
                    index {$this->model->getIndex()};
                }
                
            EOT;
        /**
         * php支持
         */
        if($this->model->php_flag)
            $output.=
                <<<EOT
                location ~ \.php?.*$ { 
                        root           /share/test; 
                        fastcgi_pass   127.0.0.1:9000; 
                        fastcgi_param  SCRIPT_FILENAME  \$document_root\$fastcgi_script_name; 
                        include        fastcgi_params; 
                    } 
                EOT;

        $output .=
            <<<EOT
                
            }
            EOT;
        return $output;
    }


    function server_ssl(){
        $output =
            <<<EOT
            
            server {
                listen 443 ssl
                ssl on;
                ssl_protocols TLSv1 TLSv1.1 TLSv1.2;
                ssl_certificate {$this->model->getSslCertificatePath()};
                ssl_certificate_key {$this->model->getSslCertificateKey()};
            }
            
            EOT;
        return $output;
    }











}