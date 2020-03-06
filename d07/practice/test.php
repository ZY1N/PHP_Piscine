<?php
	class Post {
    const TABLE = 'posts';
    const TYPE = 'post';

    static public function all() {
        $select = "SELECT * FROM `%s` WHERE `type` = '%s'\n";
        echo sprintf($select, self::TABLE, self::TYPE);
    }
	}

class Comment extends Post {
    const TYPE = 'comment';
}

Comment::all();

Post::all();
?>
