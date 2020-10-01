<?php

    require_once('vendor/autoload.php');
    use Facebook\WebDriver\Remote\RemoteWebDriver;
    use Facebook\WebDriver\WebDriverBy;

    $web_driver = RemoteWebDriver::create(
    "http://localhost:81/WeatherApp",
        array("platform"=>"WINDOWS", "browserName"=>"chrome", "version" => "latest", "name" => "First Test"), 120000
    );
    $web_driver->get("http://google.com");

    $element = $web_driver->findElement(WebDriverBy::name("q"));
    if($element) {
      $element->sendKeys("TestingBot");
      $element->submit();
    }
    print $web_driver->getTitle();
    $web_driver->quit();
?>