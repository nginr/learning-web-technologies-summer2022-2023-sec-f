<?php

$rows = 5;

print("<table>");
    print("<tr>");

print("<td>");
for ($i = 0; $i < $rows; $i++) {
    for ($k = 0; $k <= $i; $k++) {
        print("*");
    }
    print("<br>");
}
print("</td>");

print("<td>");
for ($i = $rows; $i > 0; $i--) {
    for ($k = 1; $k <= $i; $k++) {
        print($k);
    }
    print("<br>");
}
print("</td>");

print("<td>");
for ($i = 0; $i < $rows; $i++) {
    for ($k=65+$i; $k <= $i+$i+65; $k++) {
        print( utf8_encode( chr($k) ) );
    }
    print("<br>");
}
print("</td>");

    print("</tr>");
print("</table>");

print("<style>");
print("table, th, td {");
  print("border: 1px solid black;");
  print("border-collapse: collapse;");
print("}");
print("table {");
  print("width: 200px;");
  print("height: 100px;");
print("}");
print("</style>");

?>
