<?php

namespace Lib;

class Route
{
   private static $routes = [];

   public static function get($uri, $callback)
   {
      $uri = trim($uri, '/');
      self::$routes['GET'][$uri] = $callback;
   }

   public static function post($uri, $callback)
   {
      $uri = trim($uri, '/');
      self::$routes['POST'][$uri] = $callback;
   }

   public static function dispatch()
   {
      // Con virtual hosts

      /*

      $uri = $_SERVER['REQUEST_URI'];
      $uri = trim($uri, '/');

      $method = $_SERVER['REQUEST_METHOD'];

      foreach(self::$routes[$method] as $route => $callback){

         if (strpos($route, ':') !== false) {
            $route = preg_replace('#:[a-zA-Z0-9]+#', '([a-zA-Z0-9]+)', $route);
         }

         if(preg_match("#^$route$#", $uri, $matches)){

            $params = array_slice($matches, 1);
            //$response = $callback(...$params);
            
            if(is_callable($callback)){
               $response = $callback(...$params);
            }

            if(is_array($callback)){
               $controller = new $callback[0];
               $response = $controller->{$callback[1]}(...$params);
            }
            
            if(is_array($response) || is_object($response)){
               header('Content-Type: application/json');
               echo json_encode($response);
            } else {
               echo $response;
            }

            return;
         }
      }

      echo '404 Not Found';
      */

      // Sin virtual hosts

      $uri = $_SERVER['REQUEST_URI'];
      $uri = trim($uri, '/');

      $uriSplited = explode("/", $uri);

      if (count($uriSplited) === 4) {
         $uriSplited = $uriSplited[2] .  '/' . $uriSplited[3];
      } elseif (count($uriSplited) === 2) {
         $uriSplited = '';
      } else {
         $uriSplited = $uriSplited[2];
      }

      $method = $_SERVER['REQUEST_METHOD'];

      foreach (self::$routes[$method] as $route => $callback) {

         if (strpos($route, ':') !== false) {
            $route = preg_replace('#:[a-zA-Z0-9]+#', '([a-zA-Z0-9]+)', $route);
         }

         if (preg_match("#^$route$#", $uriSplited, $matches)) {

            $params = array_slice($matches, 1);
            // $response = $callback(...$params);

            if (is_callable($callback)) {
               $response = $callback(...$params);
            }

            if (is_array($callback)) {
               $controller = new $callback[0];
               $response = $controller->{$callback[1]}(...$params);
            }

            if (is_array($response) || is_object($response)) {
               header('Content-Type: application/json');
               echo json_encode($response);
            } else {
               echo $response;
            }

            return;
         }
      }

      echo '404 Not Found';
   }
}
