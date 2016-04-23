<? PHP
<!-- this means we dont have to type out the sql details every time we want to link something by the way _ Seamus just experimenting here -->

include mysql.php;

$table = "ENTRIES";
mysql_query ("CREATE TABLE IF NONE EXISTS '$table' ('ID' INT NOT NULL AUTO_INCREMENT , PRIMARY KEY ('id')) ");
mysql_query ("ALTER TABLE '$table' ADD 'TITLE' TEXT NOT NULL");
mysql_query ("ALTER TABLE '$table' ADD 'CONTENT' TEXT NOT NULL");
mysql_query ("ALTER TABLE '$table' ADD 'VOTES' varchar(255) NOT NULL");


?>