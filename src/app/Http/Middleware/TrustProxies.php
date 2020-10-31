<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string
     */
    protected $proxies = '*';

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;

    protected function getTrustedHeaderNames()
    {
        /*
         * 1. NGINX 对代理用IP段过滤来获取真实 IP，PHP 拿到的已经是真实IP，因此这里不用再处理
         * 2. Laravel 无法对 IP 过滤，用*表示不过滤代理，此处不安全，容易被伪造IP信息
         * 3. Laravel 仍然要处理 PROTO, HOST, PORT ，以便能够生成正确的URL
         */
        return Request::HEADER_X_FORWARDED_HOST | Request::HEADER_X_FORWARDED_PROTO | Request::HEADER_X_FORWARDED_PORT;
    }
}
