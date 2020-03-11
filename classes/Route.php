<?php
class Route {
   public static $validRouters = array();

   public static function set($route, $function) {
      self::$validRouters[] = $route;

      if($_GET['url'] == $route) {
         $function->__invoke();
      }
   }
}