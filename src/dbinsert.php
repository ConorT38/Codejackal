<?PHP

<!-- how to insert the blog fields into the database -->


$table = ENTRIES
$sql = INSERT INTO $table SET
TITLE = '$_POST(title)',
CONTENT = '$_POST(content)',
VOTES = '$_POST(votes)';
$query = @msql_query($sql);


?>
