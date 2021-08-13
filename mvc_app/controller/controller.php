<?php
//(A)database connection
require "../model/model.php";
$DB = new DB();

// (B) search ofr users
$results = $DB->select(
    "SELECT * FROM `users` WHERE `name` LIKE ? ",
    ["%{$_POST['search']}%"]
);

//(C)output results
echo json_encode(count($results) == 0 ? null : $results);
?>