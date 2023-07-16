<!DOCTYPE html>
<html>
    <head>
        <title>Comments</title>
    </head>
    <body>
        <h1>Comments</h1>
        <?php
        $comments=[];
        if(file_exists('comments.txt')){
            $comments=unserialize(file_get_contents('comments.txt'));
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $NAME=$_POST['name'];
            $comment=$_POST['comment'];
            $comments[]=['name'=>$name,'comment'=>$comment];
            file_put_contents('comments.txt',serialize($comments));
        }
        ?>
        <ul>
            <?php foreach($comments as $comment):?>
            <li>
                <strong><?=$comment['name']?>:</strong>
                <?=$comment['comment']?>
            </li>
            <?php endforeach; ?>
        </ul>
        <form method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            <br>
            <label for="comment">Comment:</label>
            <textarea name="comment" required></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
