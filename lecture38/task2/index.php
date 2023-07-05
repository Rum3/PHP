<?php
$xml = simplexml_load_file("file.xml");
echo "<table>";

foreach($xml->children() as $book) {
  echo "<tr>";
  echo "<td>" . $book->title . "</td>";
  echo "<td>" . $book->author . "</td>";
  echo "<td>" . $book->year . "</td>";
  echo "<td>" . $book->price . "</td>";
  echo "</tr>";
}

echo "</table>";
?>


