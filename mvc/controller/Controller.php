<?php
include_once ("model/Model.php");

class Controller{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function invoke()
    {
        if (!isset($_GET['book'])){
            // در صورتیکه کتابی درخواست نشد لیست تمام کتاب ها را نمایش دهد
            $books = $this->model->getBooklist();
            include 'view/booklist.php';
        }
        else{
            //ارسال و نمایش کتاب درخواستی
            $book = $this->model->getBook($_GET['book']);
            include  'view /viewbook.php';
        }
    }

}