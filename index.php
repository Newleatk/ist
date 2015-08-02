<?php
require_once __DIR__.'./vendor/autoload.php';
require_once __DIR__.'./functions/params.php';
require_once __DIR__.'./functions/global.php';

use Symfony\Component\HttpFoundation\Request;


$timer = microtime();


$app = new Silex\Application();

/*---------------------------------------------------------------------------------------
--------------------------------------REGISTERING TWIG-----------------------------------
---------------------------------------------------------------------------------------*/

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
    'twig.options' => array("cache" => __DIR__.'/cache'),
    'auto_reload' => true
));

/*---------------------------------------------------------------------------------------
------------------------------------REGISTERING URL SERVICE------------------------------
---------------------------------------------------------------------------------------*/

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

/*---------------------------------------------------------------------------------------
---------------------------------------SILEX DEBUGGING-----------------------------------
---------------------------------------------------------------------------------------*/

$app['debug'] = true;

/*---------------------------------------------------------------------------------------
-----------------------------------DATABASE DECLARATION----------------------------------
---------------------------------------------------------------------------------------*/

include_once("requires/db.php");

/*---------------------------------------------------------------------------------------
---------------------------------------NAV DEFINITION------------------------------------
---------------------------------------------------------------------------------------*/

$app['twig'] = $app->share($app->extend('twig', function($twig) {
    $twig->addGlobal('nav', array(
        array(
            "text" => "Home",
            "url" => "index",
            "children" => array(
                array(
                    "text" => "Dashboard",
                    "url" => "index"
                )
            )
        ),
        array(
            "text" => "Issues",
            "url" => "issues",
            "children" => array(
                array(
                    "text" => "Show on hold issues",
                    "url" => "issues",
                    "params" => array(
                        "tag" => "on_hold"
                    )
                ),
                array(
                    "text" => "Show open issues",
                    "url" => "issues",
                    "params" => array(
                        "tag" => "open"
                    )
                ),
                array(
                    "text" => "Show resolved issues",
                    "url" => "issues",
                    "params" => array(
                        "tag" => "resolved"
                    ),
                    "separator" => true
                ),
                array(
                    "text" => "Show latest issues",
                    "url" => "issues",
                    "params" => array(
                        "sort_by" => "latest"
                    )
                )
            )
        )
    ));
    $twig->addGlobal('timestamp_now', time());
    return $twig;
}));

/*---------------------------------------------------------------------------------------
----------------------------------------ROUTING NAME-------------------------------------
---------------------------------------------------------------------------------------*/

$app->before(function (Request $request) use ($app) {
    $app['twig']->addGlobal('current_page_name', $request->get("_route"));
});

/*---------------------------------------------------------------------------------------
-----------------------------------------INDEX PAGE--------------------------------------
---------------------------------------------------------------------------------------*/

$app->get('/', function() use ($db, $app){
    return $app['twig']->render('index.twig', array());
})->bind("index");

/*---------------------------------------------------------------------------------------
-----------------------------------ISSUES LISTING PAGE-----------------------------------
---------------------------------------------------------------------------------------*/

$app->get('/issues/{tag}', function(Request $request, $tag) use ($db, $timer, $app){

    $counts = array(10, 25, 50, 100, 250, 500);

    if(null !== $request->query->get('page')){
        $start = $request->query->get('page');
    }else{
        $start =  1;
    }
    if(null !== $request->query->get('show') && in_array($request->query->get('show'), $counts)) {
        $count = @intval($request->query->get('show'));
    }else{
        $count = 25;
    }
    if($count == 0){
        $count = 1;
    }
    $base_start = $start;
    $start = $start - 1;
    $start *= $count;

    $sortable = array("deadline", "tag", "creation", "id");

    if(null !== $request->query->get('sort_by') && in_array($request->query->get('sort_by'), $sortable)){

    }

    $sql = "SELECT * FROM `issues`";
    $n = "SELECT COUNT(*) FROM `issues`";
    $add = ($tag == "all") ? false : " WHERE `status`  = ?";
    $sql .= $add;
    $n .= $add;
    $sql .= " ORDER BY `deadline` ASC LIMIT " . $start . "," . $count;


    $n = $db->prepare($n);
    $n->execute(array($tag));
    $d = $n->fetch()['COUNT(*)'];
    $n->closeCursor();
    $n = intval($d);


    if((intval($base_start - 1) * intval($count)) > $n){
        $base_start = ceil(($n / $count));
        $sql = "SELECT * FROM `issues`";
        $add = ($tag == "all") ? false : " WHERE `status`  = ?";
        $sql .= $add;
        $sql .= " ORDER BY `deadline` ASC LIMIT " . 0 . "," . $count;
    }

    $r = $db->prepare($sql);
    $r->execute(array($tag));

    $issues = array();

    if($r->rowCount() > 0){
        require_once('classes/class.user.php');
        require_once('classes/class.status.php');
        require_once('classes/class.time.php');
    }

    $priority = array(1 => "trivial", 2 => "very-low",  3 => "low", 4 => "normal", 5 => "high", 6 => "very-high", 7 => "urgent");

    while($d = $r->fetch()){
        $issues[formatId($d['id'])] = $d;
        $issues[formatId($d['id'])]['deadline_has_passed'] = ($d['deadline'] < time() ? true : false);
        $issues[formatId($d['id'])]['author'] = (new User($d['author']))->informations();
        $issues[formatId($d['id'])]['status'] = $GLOBALS['status_cache'][$d['status']];
        $issues[formatId($d['id'])]['priority'] = $priority[$d['priority']];
        $diff = new time();
        $diff->setDiffTime($d['creation']);
        $issues[formatId($d['id'])]['formated'] = $diff->textTimeDiff();
    }

    $params = $request->query->all();

    $params["show"] = $count;
    $params["page"] = $base_start;
    $params['tag'] = $tag;

    $time = floor((microtime() - $timer) * 100)/100;

    $time = ($time < 0) ? 0 : $time;

    return $app['twig']->render('issues.twig', array("global_start" => IST_BUG_LABEL_START, "show_allowed" => $counts, "time_elapsed" => $time, "issues" => $issues, "issues_count" => $n, "params" => $params));

})->value('tag', 'all')->bind("issues");

/*---------------------------------------------------------------------------------------
------------------------------------ISSUE VIEWING PAGE-----------------------------------
---------------------------------------------------------------------------------------*/

$app->get('/issue/{id}', function(Request $request, $id) use ($db, $timer, $app){

   return "You are viewing issue " . $id . ". Have a nice day";

})->bind("issue");


/*---------------------------------------------------------------------------------------
-----------------------------------ISSUES LISTING PAGE-----------------------------------
---------------------------------------------------------------------------------------*/

$app->get('/blog/{id}', function ($id)  {
    return $output;
});

/*---------------------------------------------------------------------------------------
-----------------------------------ISSUES LISTING PAGE-----------------------------------
---------------------------------------------------------------------------------------*/

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

/*---------------------------------------------------------------------------------------
-----------------------------------ISSUES LISTING PAGE-----------------------------------
---------------------------------------------------------------------------------------*/

$app->run();