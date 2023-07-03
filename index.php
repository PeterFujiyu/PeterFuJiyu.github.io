<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Peter的主页</title>
    </head>
    <body>
        <h1>欢迎来到Peter的主页</h1>

        <h2>Linux</h2>
        <p>在这个部分，你可以了解有关Linux的信息。</p>

        <h3>帖子列表</h3>
        <?php
        // 从 linux.md 文件中加载帖子列表
        $posts = file_get_contents('linux.md');
        echo $posts;
        ?>

        <h3>添加帖子</h3>
        <form action="save_post.php" method="POST">
            <textarea name="post_content" rows="4" cols="50" placeholder="请输入帖子内容"></textarea><br>
            <input type="submit" value="提交">
        </form>
    </body>
</html>
