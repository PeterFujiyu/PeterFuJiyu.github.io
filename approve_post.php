<?php
// 从 linux_tmp.md 文件中加载待审核的帖子
$pendingPost = file_get_contents('linux_tmp.md');

// 如果有待审核的帖子
if (!empty($pendingPost)) {
    // 追加待审核的帖子到 linux.md 文件
    file_put_contents('linux.md', $pendingPost, FILE_APPEND);

    // 清空 linux_tmp.md 文件
    file_put_contents('linux_tmp.md', '');

    echo "<p>帖子已审核通过。</p>";
} else {
    echo "<p>没有待审核的帖子。</p>";
}
?>
