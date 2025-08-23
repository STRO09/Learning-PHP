<?php

require 'vendor/autoload.php';
include 'db.php';

$result = $conn->query("select * from user");

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->setFont("helvetica", "I", 10);
$pdf->Cell(0, 10, "Users List", 0, 1, 'C'); 

$html = '<table>
<tr>
<td>ID</td>
<td>Name</td>
<td>Salary</td>
<td>Address</td>
</tr>';

while ($row = $result->fetch_assoc()) {
    $html .= '
    <tr>
<td>' . $row['id'] . '</td>
<td>' . $row['name'] . '</td>
<td>' . $row['salary'] . '</td>
<td>' . $row['address'] . '</td>
</tr>
    ';
}

$html .= '</table>';


$pdf ->writeHTML($html,true,false,true,false);
$pdf -> Output('Users.html','I');



?>