<?php
include('./requires/db.php');
$i = 0;
while($i < 753){
    $tags = $status_cache;
    $tag = array_rand($tags, 1);
    $created = mt_rand(time() - (7 * 24 * 60 * 60),time());
    $deadline = mt_rand($created + (7 * 24 * 60 * 60), time() + (14 * 24 * 60 * 60));
    $progress = rand(0, 100);
    $priority = rand(1, 7);
    $r = $db->prepare("INSERT INTO `issues` (`title`, `progress`, `priority`, `status`, `label`, `tags`, `description`, `deadline`, `creation`, `author`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $r->execute(array(
        "Some sample issue",
        $progress,
        $priority,
        $tag,
        "I'm an " . $tag . " issue :D",
        "sample,lorem-ipsum",
        "Lorem ipsum dolor sit amet conjectur",
        $deadline,
        $created,
        1
    ));
    $r->closeCursor();
    $i++;
}