<?php
    require_once 'vendor/autoload.php';

    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler;
    use Symfony\Component\CssSelector;

    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('index.html');
    $title = "Name Page";
    $res = new Client();
    $responce = $res->request('GET',"http://lepton.stageserver.org/");
    $document_body = $responce->getBody();
    $crawler = new Crawler();
    $crawler->addContent($document_body);
    $crawler = $crawler->filter('body section#imp_info')->html();
    $crawler2 = new Crawler();
    $crawler2->addContent($document_body);
    $crawler2 = $crawler2->filter('head')->html();
    $crawler3 = new Crawler();
    $crawler3->addContent($document_body);
    $crawler3 = $crawler3->filter('footer')->html();

    echo $template->render(array('title'=>$title, 'body_page'=>$crawler, 'head'=>$crawler2, 'footer'=>$crawler3));


?>



