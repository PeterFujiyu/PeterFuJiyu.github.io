<?php
// 获取提交的帖子内容
if (isset($_POST['post_content'])) {
    $postContent = $_POST['post_content'];

    // 将帖子保存到 linux_tmp.md 文件中
    file_put_contents('linux_tmp.md', $postContent);

    // 提示用户帖子已提交，待审核
    echo "<p>帖子已提交，待审核。</p>";
}
?>
