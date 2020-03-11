<?php
class Route {
   public static $validRouters = array();

   public static function set($route, $function) {
      self::$validRouters[] = $route;
      print_r(self::$validRouters);
   }
}