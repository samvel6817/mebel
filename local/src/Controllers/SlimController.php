<?

namespace Local\Controllers;


class SlimController {
    protected $params;

    public function __construct($container)
    {
        $req = $container->request;
        $this->params = $req->isGet() ? $req->getQueryParams() : $req->getParsedBody();
    }
}