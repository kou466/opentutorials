<?php
$conn = mysqli_connect(
    '127.0.0.1', 
    'root', 
    '111111', 
    'opentutorials');

settype($_POST['id'], 'integer');
$filtered = array(
    'id'=>mysqli_real_escape_string($conn, $_POST['id']),
    'title'=>mysqli_real_escape_string($conn, $_POST['title']),
    'description'=>mysqli_real_escape_string($conn, $_POST['description']),
    'author_id'=>mysqli_real_escape_string($conn, $_POST['author_id'])
);

$sql = "
  UPDATE topic
    SET
        title = '{$filtered['title']}',
        description = '{$filtered['description']}',
        author_id = '{$filtered['author_id']}'
    WHERE
        id = {$filtered['id']}
";
$result = mysqli_query($conn, $sql);
if($result === false) {
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요<a href="index.php">돌아가기</a>';
    error_log(mysqli_error($conn));
} else {
    header('Location: index.php');
}
?>