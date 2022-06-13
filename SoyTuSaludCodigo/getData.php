<?php

require_once '/db.php';
if (isset($_POST['search_param'])) {
    $search_param = mysqli_real_escape_string($conn, $_POST['search_param']);
    $query = mysqli_query($con, "SELECT * FROM users where username like '%$search_param%' order by id limit 20");
    $output = '';
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $output .= '<tr>
    <td>' . $row['name'] . '</td>
    <td>' . $row['email'] . '</td>
    <td>' . $row['username'] . '</td>
    <td>' . $row['mobile'] . '</td>
  </tr>';
        }
    } else {
        $output = '
  <tr>
    <td colspan="4"> No result found. </td>   
  </tr>';
    }
    echo $output;
}
?>