<?php

namespace Bootcamp\Demo\Storage;

class SQLStorage implements Storage
{

    try {
        $db = new PDO('mysql:host=localhost;port=80;dbname=bootcamp', 'homestead', 'secret', array( PDO::ATTR_PERSISTENT => false));

        echo '<h2>connected to bootcamp DB</h2>';

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    $sql = "INSERT INTO Comments(author,comment) VALUES (:author, :comment)";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':author', $_REQUEST['myname']);
}
