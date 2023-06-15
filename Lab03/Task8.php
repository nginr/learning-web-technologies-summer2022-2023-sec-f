<?php

$nums = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

$rows = count($nums);

print("<table style=\"width: 200px; height: 100px\" border=\"1\">");
    print("<tr>");

print("<td>");
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < count($nums[$i]); $j++) {
        if (is_int($nums[$i][$j])) {
            print($nums[$i][$j]);
        }
    }
    print("<br>");
}
print("</td>");

print("<td>");
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < count($nums[$i]); $j++) {
        if (is_string($nums[$i][$j])) {
            print($nums[$i][$j]);
        }
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
print("</style>");

?>
