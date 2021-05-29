<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('test.db');
    }
}

$db = new MyDB();
if(!$db)
{
    echo $db->lastErrorMsg();
}

$results = $db->query('SELECT * from company')->fetchArray();
echo $results['Name'];
?>    