<?php
$conn = mysqli_connect("127.0.0.1", "root", "111111", "opentutorials");
$sql = "
INSERT INTO topic (
    title,
    description,
    created
) VALUES (
    'MySQL',
    'MySQL is ....',
    NOW()
)";
$result = mysqli_query($conn, $sql);
if($result === false) {
    echo mysqli_error($conn);
}

?>