<?php

/**
 * Class Page
 *
 */
class Page{
    //总的记录数
    private $totalNums;
    //每页条数
    private $pageSize;
    //共多少页
    private $totalPages;
    //当前页码
    private $nowPage;
    //首页
    private $firstPage;
    //尾页
    private $lastPage;
    //上一页
    private $prevPage;
    //当前页左侧页码
    private $lList;
    //当前页右侧页码
    private $rList;
    //下一页
    private $nextPage;
    //url
    private $url;
    //左侧几个页码
    private $lmax;
    //右侧几个页码
    private $rmax;
    //构造方法
    public function __construct($totalNums,$pageSize,$lmax=2,$rmax=2)
    {
        $this->totalNums = $totalNums;
        $this->pageSize = $pageSize;
        $this->totalPages = $this->totalPages();
        $this->nowPage = $this->getPage();
        $this->firstPage = $this->firstPage();
        $this->lastPage = $this->lastPage();
        $this->url = $this->url();
        $this->prevPage = $this->prevPage();
        $this->nextPage = $this->nextPage();
        $this->lmax = $lmax;
        $this->rmax = $rmax;
        $this->lList = $this->lList();
        $this->rList = $this->rList();

    }
    //共几页
    private function totalPages(){
        $totalPages = ceil($this->totalNums/$this->pageSize);
        return $totalPages;
    }
    //获取当前的页码
    private function getPage(){
        $nowPage = isset($_GET['page'])?$_GET['page']:1;
        return $nowPage;
    }
    //首页
    private function firstPage(){
        if($this->nowPage>1){
            return "<a href='{$this->url}?page=1'>首页</a>";
        }else{
            return '';
        }

    }
    //上一页
    private function prevPage(){
        //可以上一页 当前页要大于1
        if($this->nowPage>1){
            $prevPage = $this->nowPage-1;
            return "<a href='{$this->url}?page={$prevPage}'>上一页</a>";
        }else{
            return '';
        }

    }
    //当前页左侧
    private function lList(){
        $str = '';
        for($i=$this->lmax;$i>=1;$i--){
                $p = $this->nowPage-$i;
                if($p>=1){
                    $str.=" <a href='{$this->url}?page=$p'>$p</a> ";
            }

        }
        return $str;
    }
    //当前页右侧
    private function rList(){
        $str = '';
        for($i=1;$i<=$this->rmax;$i++){
            $p = $this->nowPage+$i;
            if($p<=$this->totalPages){
                $str.=" <a href='{$this->url}?page=$p'>$p</a> ";
            }
        }
        return $str;
    }
    //下一页
    private function nextPage(){
        //可以下一页 当前页小于最大页
        if($this->nowPage<$this->totalPages){
            $nextPage = $this->nowPage+1;
            return "<a href='{$this->url}?page=$nextPage'>下一页</a>";
        }else{
            return "";
        }
    }
    //尾页
    private function lastPage(){
        if($this->nowPage < $this->totalPages){
            return "<a href='{$this->url}?page={$this->totalPages}'>尾页</a>";
        }else{
            return '';
        }
    }
    //url
    private function url(){
        $url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        return $url;
    }
    //显示页码
    public function show(){
        return "当前一共有{$this->totalNums}条记录，每页显示{$this->pageSize}条记录，一共{$this->totalPages}页，当前是第{$this->nowPage}页 <br>{$this->firstPage} {$this->prevPage}
 {$this->lList}{$this->nowPage}{$this->rList} {$this->nextPage} {$this->lastPage} ";
    }
    public function test(){
        echo $this->lmax;
        echo $this->rmax;
    }
}


