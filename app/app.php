<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/PingPongGenerator.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });

  $app->post("/generate", function() use ($app) {
    $number = $_POST['number'];
    $newPingPong = new PingPongGenerator();
    $generated = $newPingPong->generatePingPongArray($number);
    return $app['twig']->render('generate.twig', array('number' => $number, 'generated' => $generated));
  });

  return $app;
?>
