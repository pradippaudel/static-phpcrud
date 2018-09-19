<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-09-06 17:00:32
 * @Organization: Knockout System Pvt. Ltd.
 */

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_NAME = "test_php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('Error establishing database connection');
mysqli_select_db($conn, DB_NAME);


?>
