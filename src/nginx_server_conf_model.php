<?php


namespace Doit\NginxManage;


class nginx_server_conf_model
{

    /**
     * @var string 端口设置
     */
    public string   $listen             = "80";

    /**
     * @var string 日志路径
     */
    public string   $access_log_path    = "";

    /**
     * @var bool 日志开关
     */
    public bool     $access_log_flag    = false;

    /**
     * @var string 访问地址 [域名|ip]
     */
    public string $server               = "";

    /**
     * @var string 静态资源
     */
    public string $location_static      = "";

    /**
     * @var string 反向代理
     */
    public string $location_proxy_pass  = "";

    /**
     * @var bool php支持
     */
    public bool $php_flag               = false;

    public string $document_root        = '$document_root';

    /**
     * @var bool 是否开启ssl
     */
    public bool $ssl_flag               = false;

    /**
     * @var string 证书地址
     */
    public string $ssl_certificate_path = "";

    /**
     * @var string 私钥
     */
    public string $ssl_certificate_key  = "";

    /**
     * @var string 根目录
     */
    public string $root                 = "";

    public string $root_location        = "";

    /**
     * @var string 默认
     */
    public string $index                = "index.html";

    /**
     * @return string
     */
    public function getRoot(): string
    {
        return $this->root;
    }

    /**
     * @param string $root
     */
    public function setRoot(string $root): void
    {
        $this->root = $root;
    }

    /**
     * @return string
     */
    public function getRootLocation(): string
    {
        return $this->root_location;
    }

    /**
     * @param string $root_location
     */
    public function setRootLocation(string $root_location): void
    {
        $this->root_location = $root_location;
    }

    /**
     * @return string
     */
    public function getIndex(): string
    {
        return $this->index;
    }

    /**
     * @param string | array $index
     */
    public function setIndex($index): void
    {

        $this->index = is_array($index)?implode(' ',$index):$index;
    }

    /**
     * @return string
     */
    public function getListen(): string
    {
        return $this->listen;
    }

    /**
     * 设置要监听的端口
     * @param string $listen
     */
    public function setListen(string $listen = '80'): void
    {
        $this->listen = $listen;
    }

    /**
     * @return string
     */
    public function getAccessLogPath(): string
    {
        return $this->access_log_path;
    }

    /**
     * @param string $access_log_path
     */
    public function setAccessLogPath(string $access_log_path): void
    {
        $this->access_log_path = $access_log_path;
    }

    /**
     * @return bool
     */
    public function isAccessLogFlag(): bool
    {
        return $this->access_log_flag;
    }

    /**
     * @param bool $access_log_flag
     */
    public function setAccessLogFlag(bool $access_log_flag): void
    {
        $this->access_log_flag = $access_log_flag;
    }

    /**
     * @return string
     */
    public function getServer(): string
    {
        return $this->server;
    }

    /**
     * @param string|array $server
     */
    public function setServer($server): void
    {

        $this->server = is_array($server)?implode(' ',$server):"";
    }

    /**
     * @return string
     */
    public function getLocationStatic(): string
    {
        return $this->location_static;
    }

    /**
     * @param string $location_static
     */
    public function setLocationStatic(string $location_static): void
    {
        $this->location_static = $location_static;
    }

    /**
     * @return string
     */
    public function getLocationProxyPass(): string
    {
        return $this->location_proxy_pass;
    }

    /**
     * @param string $location_proxy_pass
     */
    public function setLocationProxyPass(string $location_proxy_pass): void
    {
        $this->location_proxy_pass = $location_proxy_pass;
    }

    /**
     * @return bool
     */
    public function isPhpFlag(): bool
    {
        return $this->php_flag;
    }

    /**
     * @param bool $php_flag
     */
    public function setPhpFlag(bool $php_flag): void
    {
        $this->php_flag = $php_flag;
    }

    /**
     * @return string
     */
    public function isSslFlag(): string
    {
        return $this->ssl_flag?'ssl':'';
    }

    /**
     * @param bool $ssl_flag
     */
    public function setSslFlag(bool $ssl_flag): void
    {
        $this->ssl_flag = $ssl_flag;
    }

    /**
     * @return string
     */
    public function getSslCertificatePath(): string
    {
        return $this->ssl_certificate_path;
    }

    /**
     * @param string $ssl_certificate_path
     */
    public function setSslCertificatePath(string $ssl_certificate_path): void
    {
        $this->ssl_certificate_path = $ssl_certificate_path;
    }

    /**
     * @return string
     */
    public function getSslCertificateKey(): string
    {
        return $this->ssl_certificate_key;
    }

    /**
     * @param string $ssl_certificate_key
     */
    public function setSslCertificateKey(string $ssl_certificate_key): void
    {
        $this->ssl_certificate_key = $ssl_certificate_key;
    }

    /**
     * @return string
     */
    public function getDocumentRoot(): string
    {
        return $this->document_root;
    }

    /**
     * @param string $document_root
     */
    public function setDocumentRoot(string $document_root): void
    {
        $this->document_root = $document_root;
    }


}