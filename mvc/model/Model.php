<?php
include_once ("model/Book.php");

class Model{

    public function getBooklist(){
        //بخشی جهت شبیه سازی داداه های موجود در دیتابیس
        return array(
            "Jungle Book"=> new Book("Jungle Book", "R. Kipling", "A classic book."),
            "Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
            "PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
        );

    }

    public function getBook($title){
        //استفاده کردن از یک تابع برای دسترسی به تمام کتاب های موجود در دیتابیس
        $allBooks = $this->getBooklist();
        return $allBooks[$title];
    }

}