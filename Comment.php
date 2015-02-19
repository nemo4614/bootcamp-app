<?php

class Comment
{
  public $author;

  public $comment;

  public function __construct($name, $text)
  {
    $this->author = $name;
    $this->comment = $text;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setName($newName)
  {
    $this->author = $newName;
  }

}

$comment = new Comment('Tom','abc');

var_dump($comment->getAuthor());

$comment2 = new Comment('Carl','zxc');

$comment2->setName('Timmy');

// $comment->author = 'John';
//
// $comment2->author='Bill';

var_dump($comment, $comment2);
