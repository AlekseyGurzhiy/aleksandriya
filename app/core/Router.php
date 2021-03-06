<?php
require_once('app/config/Pages.php');
require_once('app/model/PageInfo.php');

class Router
{
    public function run(){
        $pages = new Pages();
        $activePages = $pages->getActivePages();
        $rolePages = $pages->getRolePages();
        $errorPages = $pages->getErrorPages();
        $textPages = $pages->getTextPages();

        $page = $this->getCurrentPage();

        if (array_key_exists($page, $activePages)){
            $pageInfo = new PageInfo();
            $pageInfo->setCode($page);
            $pageInfo->setTitle($activePages[$page]);
            $pageInfo->setRole($rolePages[$page]);
            $pageInfo->setText($textPages[$page]);

            $this->render($pageInfo, $activePages, $rolePages, $textPages);
        } else {
            $this->error('404');
        }
    }

    public function getCurrentPage(){
        return $_GET['page'] ?? 'main';
    }

    public function render($pageInfo, $activePages, $rolePages, $textPages){
        require('app/views/template.php');
    }

    public function error($error){
        require('app/views/error.php');
    }
}