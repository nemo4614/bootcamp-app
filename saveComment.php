<?php

  $file = 'comment.json';

  $comments = json_decode(file_get_contents($file),true);

  $newComment = [
    'author' => $_REQUEST['myname'],
    'comment' => $_REQUEST['mycomment'],
  ];

  $comments[] = $newComment;

  file_put_contents($file, json_encode($comments));

  header('Location:/');
