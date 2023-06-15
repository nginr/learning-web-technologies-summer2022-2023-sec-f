<?php

print("<table>");
    print("<tr>");

print("<td>");
for ($i = 10; $i < 40; $i++) {
    if (!($i % 2 == 0)) {
        print( "<p>" . "The Number: " . $i . " is <b> ODD </b> </p>");
    }
}
print("</td>");

print("<td>");
for ($i = 40; $i < 70; $i++) {
    if (!($i % 2 == 0)) {
        print( "<p>" . "The Number: " . $i . " is <b> ODD </b> </p>");
    }
}
print("</td>");

print("<td>");
for ($i = 70; $i <= 100; $i++) {
    if (!($i % 2 == 0)) {
        print( "<p>" . "The Number: " . $i . " is <b> ODD </b> </p>");
    }
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
  print("width: 600px;");
print("}");
print("</style>");

?>
