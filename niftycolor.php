<?php

/**
 * NiftyColor
 * 
 * This is a class for quickly and easily getting a color in most
 * CSS-friendly formats. It currently supports hex, RGB and HSL
 * syntax, as well as over 130 color keywords.
 * 
 * Hat tips to:
 * - {@link http://studipdoc.umt-dev.urz.uni-halle.de/studip_doxygen/html/dd/dfe/Color_8class_8php_source.html Rasmus Fuhse's Color class}
 * - {@link https://github.com/leafo/lessphp/ lessphp}
 */
class NiftyColor
{

  static $keywords = array(
    'aliceblue' => array(240, 248, 255, 1),
    'antiquewhite' => array(250, 235, 215, 1),
    'aqua' => array(0, 255, 255, 1),
    'aquamarine' => array(127, 255, 212, 1),
    'azure' => array(240, 255, 255, 1),
    'beige' => array(245, 245, 220, 1),
    'bisque' => array(255, 228, 196, 1),
    'black' => array(0, 0, 0, 1),
    'blanchedalmond' => array(255, 235, 205, 1),
    'blue' => array(0, 0, 255, 1),
    'blueviolet' => array(138, 43, 226, 1),
    'brown' => array(165, 42, 42, 1),
    'burlywood' => array(222, 184, 135, 1),
    'cadetblue' => array(95, 158, 160, 1),
    'chartreuse' => array(127, 255, 0, 1),
    'chocolate' => array(210, 105, 30, 1),
    'coral' => array(255, 127, 80, 1),
    'cornflowerblue' => array(100, 149, 237, 1),
    'cornsilk' => array(255, 248, 220, 1),
    'crimson' => array(220, 20, 60, 1),
    'cyan' => array(0, 255, 255, 1),
    'darkblue' => array(0, 0, 139, 1),
    'darkcyan' => array(0, 139, 139, 1),
    'darkgoldenrod' => array(184, 134, 11, 1),
    'darkgray' => array(169, 169, 169, 1),
    'darkgreen' => array(0, 100, 0, 1),
    'darkkhaki' => array(189, 183, 107, 1),
    'darkmagenta' => array(139, 0, 139, 1),
    'darkolivegreen' => array(85, 107, 47, 1),
    'darkorange' => array(255, 140, 0, 1),
    'darkorchid' => array(153, 50, 204, 1),
    'darkred' => array(139, 0, 0, 1),
    'darksalmon' => array(233, 150, 122, 1),
    'darkseagreen' => array(143, 188, 143, 1),
    'darkslateblue' => array(72, 61, 139, 1),
    'darkslategray' => array(47, 79, 79, 1),
    'darkturquoise' => array(0, 206, 209, 1),
    'darkviolet' => array(148, 0, 211, 1),
    'deeppink' => array(255, 20, 147, 1),
    'deepskyblue' => array(0, 191, 255, 1),
    'dimgray' => array(105, 105, 105, 1),
    'dodgerblue' => array(30, 144, 255, 1),
    'firebrick' => array(178, 34, 34, 1),
    'floralwhite' => array(255, 250, 240, 1),
    'forestgreen' => array(34, 139, 34, 1),
    'fuchsia' => array(255, 0, 255, 1),
    'gainsboro' => array(220, 220, 220, 1),
    'ghostwhite' => array(248, 248, 255, 1),
    'gold' => array(255, 215, 0, 1),
    'goldenrod' => array(218, 165, 32, 1),
    'gray' => array(128, 128, 128, 1),
    'green' => array(0, 128, 0, 1),
    'greenyellow' => array(173, 255, 47, 1),
    'honeydew' => array(240, 255, 240, 1),
    'hotpink' => array(255, 105, 180, 1),
    'indianred' => array(205, 92, 92, 1),
    'indigo' => array(75, 0, 130, 1),
    'ivory' => array(255, 255, 240, 1),
    'khaki' => array(240, 230, 140, 1),
    'lavender' => array(230, 230, 250, 1),
    'lavenderblush' => array(255, 240, 245, 1),
    'lawngreen' => array(124, 252, 0, 1),
    'lemonchiffon' => array(255, 250, 205, 1),
    'lightblue' => array(173, 216, 230, 1),
    'lightcoral' => array(240, 128, 128, 1),
    'lightcyan' => array(224, 255, 255, 1),
    'lightgoldenrodyellow' => array(250, 250, 210, 1),
    'lightgreen' => array(144, 238, 144, 1),
    'lightgray' => array(211, 211, 211, 1),
    'lightpink' => array(255, 182, 193, 1),
    'lightsalmon' => array(255, 160, 122, 1),
    'lightseagreen' => array(32, 178, 170, 1),
    'lightskyblue' => array(135, 206, 250, 1),
    'lightslategray' => array(119, 136, 153, 1),
    'lightsteelblue' => array(176, 196, 222, 1),
    'lightyellow' => array(255, 255, 224, 1),
    'lime' => array(0, 255, 0, 1),
    'limegreen' => array(50, 205, 50, 1),
    'linen' => array(250, 240, 230, 1),
    'magenta' => array(255, 0, 255, 1),
    'maroon' => array(128, 0, 0, 1),
    'mediumaquamarine' => array(102, 205, 170, 1),
    'mediumblue' => array(0, 0, 205, 1),
    'mediumorchid' => array(186, 85, 211, 1),
    'mediumpurple' => array(147, 112, 219, 1),
    'mediumseagreen' => array(60, 179, 113, 1),
    'mediumslateblue' => array(123, 104, 238, 1),
    'mediumspringgreen' => array(0, 250, 154, 1),
    'mediumturquoise' => array(72, 209, 204, 1),
    'mediumvioletred' => array(199, 21, 133, 1),
    'midnightblue' => array(25, 25, 112, 1),
    'mintcream' => array(245, 255, 250, 1),
    'mistyrose' => array(255, 228, 225, 1),
    'moccasin' => array(255, 228, 181, 1),
    'navajowhite' => array(255, 222, 173, 1),
    'navy' => array(0, 0, 128, 1),
    'oldlace' => array(253, 245, 230, 1),
    'olive' => array(128, 128, 0, 1),
    'olivedrab' => array(107, 142, 35, 1),
    'orange' => array(255, 165, 0, 1),
    'orangered' => array(255, 69, 0, 1),
    'orchid' => array(218, 112, 214, 1),
    'palegoldenrod' => array(238, 232, 170, 1),
    'palegreen' => array(152, 251, 152, 1),
    'paleturquoise' => array(175, 238, 238, 1),
    'palevioletred' => array(219, 112, 147, 1),
    'papayawhip' => array(255, 239, 213, 1),
    'peachpuff' => array(255, 218, 185, 1),
    'peru' => array(205, 133, 63, 1),
    'pink' => array(255, 192, 203, 1),
    'plum' => array(221, 160, 221, 1),
    'powderblue' => array(176, 224, 230, 1),
    'purple' => array(128, 0, 128, 1),
    'red' => array(255, 0, 0, 1),
    'rosybrown' => array(188, 143, 143, 1),
    'royalblue' => array(65, 105, 225, 1),
    'saddlebrown' => array(139, 69, 19, 1),
    'salmon' => array(250, 128, 114, 1),
    'sandybrown' => array(244, 164, 96, 1),
    'seagreen' => array(46, 139, 87, 1),
    'seashell' => array(255, 245, 238, 1),
    'sienna' => array(160, 82, 45, 1),
    'silver' => array(192, 192, 192, 1),
    'skyblue' => array(135, 206, 235, 1),
    'slateblue' => array(106, 90, 205, 1),
    'slategray' => array(112, 128, 144, 1),
    'snow' => array(255, 250, 250, 1),
    'springgreen' => array(0, 255, 127, 1),
    'steelblue' => array(70, 130, 180, 1),
    'tan' => array(210, 180, 140, 1),
    'teal' => array(0, 128, 128, 1),
    'thistle' => array(216, 191, 216, 1),
    'tomato' => array(255, 99, 71, 1),
    'turquoise' => array(64, 224, 208, 1),
    'violet' => array(238, 130, 238, 1),
    'wheat' => array(245, 222, 179, 1),
    'white' => array(255, 255, 255, 1),
    'whitesmoke' => array(245, 245, 245, 1),
    'yellow' => array(255, 255, 0, 1),
    'yellowgreen' => array(154, 205, 50, 1)
  );

  static private function hex_to_array($str) {
    $str = str_replace('#', '', $str);
    if (strlen($str) === 3) {
      $str = $str[0].$str[0].$str[1].$str[1].$str[2].$str[2];
    }
    $arr = array();
    for ($i=0; $i <= 4; $i+=2) { 
      $arr[] = hexdec(substr($str, $i, 2));
    }
    $arr[] = 1;
    return $arr;
  }

  static private function rgb_to_array($str) {
    preg_match('/rgb\(\s*(\d+\%?),\s*(\d+\%?),\s*(\d+\%?)\s*\)/', $str, $matches);
    $matches[] = 1;
    return array_slice($matches, 1);
  }

  static private function rgba_to_array($str) {
    preg_match('/rgba\(\s*(\d+\%?),\s*(\d+\%?),\s*(\d+\%?),\s*(\d*\.?\d*)\s*\)/', $str, $matches);
    $matches[4] = floatval($matches[4]);
    return array_slice($matches, 1);
  }

  static private function hsl_to_array($str) {
    preg_match("/hsl\(\s*(\d+),\s*(\d+)\%,\s*(\d+)\%\s*\)/", $str, $matches);
    list( , $h, $s, $l) = $matches;
    $h /= 360;
    $s /= 100;
    $l /= 100;
    if ($s === 0) {
      $r = $g = $b = $l;
    } else {
      $temp2 = ($l < 0.5) ? $l * (1.0 + $s) : $l + $s - $l * $s;
      $temp1 = 2.0 * $l - $temp2;
      $r = self::hue_to_rgb($h + 1/3, $temp1, $temp2);
      $g = self::hue_to_rgb($h, $temp1, $temp2);
      $b = self::hue_to_rgb($h - 1/3, $temp1, $temp2);
    }
    return array($r*255,$g*255,$b*255,1);
  }

  static private function hue_to_rgb($h, $temp1, $temp2) {
    if ($h < 0) $h += 1.0;
    elseif ($h > 1) $h -= 1.0;

    if (6 * $h < 1) return $temp1 + ($temp2 - $temp1) * 6 * $h;
    if (2 * $h < 1) return $temp2;
    if (3 * $h < 2) return $temp1 + ($temp2 - $temp1)*((2/3) - $h) * 6;

    return $temp1;
  }

  static private function array_to_hex($arr) {
    $str = '#';
    foreach(array_slice($arr, 0, -1) as $value) {
      $str.= ($value < 16 ? '0' : '').dechex($value);
    }
    return strtoupper($str);
  }

  static private function array_to_rgb($arr) {
    return 'rgb(' . implode(', ', array_slice($arr, 0, -1)) . ')';
  }

  static private function array_to_rgba($arr) {
    return 'rgba(' . implode(', ', $arr) . ')';
  }

  static private function array_to_hsl($arr) {
    $arr = self::calculate_hsl($arr);
    return "hsl($arr[0], $arr[1]%, $arr[2]%)";
  }

  static private function array_to_hsla($arr) {
    $hsl = self::calculate_hsl($arr);
    return "hsla($hsl[0], $hsl[1]%, $hsl[2]%, $arr[3])";
  }

  static private function calculate_hsl($arr) {
    list($r, $g, $b) = $arr;
    $r /= 255;
    $g /= 255;
    $b /= 255;

    $min = min($r, $g, $b);
    $max = max($r, $g, $b);

    $l = ($min + $max) / 2;
    if ($min === $max) {
      $s = $h = 0;
    } else {
      $s = ($max - $min) / (($l < 0.5) ? $max + $min : 2 - $max - $min);
      if ($r === $max) {
        $h = ($g - $b) / ($max - $min);
      } elseif ($g === $max) {
        $h = 2 + ($b - $r) / ($max - $min);
      } elseif ($b === $max) {
        $h = 4 + ($r - $g) / ($max - $min);
      }
    }

    return array(
      ($h < 0 ? $h + 6 : $h)*60,
      $s*100,
      $l*100
    );
  }

  static private function array_to_keyword($arr) {
    return array_search($arr, self::$keywords);
  }

  static function convert($str, $notation=null) {
    $parsed = self::parse($str);
    if ($parsed) {
      if (!$notation) $notation = $parsed[1];
      $method = "array_to_$notation";
      if ($parsed && method_exists(__CLASS__, $method)) {
        return self::$method($parsed[0]);
      }
    }
    return false;
  }

  static function parse($str) {
    $str = str_replace(' ', '', strtolower($str));
    if (preg_match('/^#?+[0-9a-f]{3}(?:[0-9a-f]{3})?$/i', $str, $matches)) {
      $notation = 'hex';
      $arr = self::hex_to_array($str);
    } elseif (preg_match('/\(.*\)/', $str)) {
      $notation = substr($str, 0, strpos($str, '('));
      $method = $notation.'_to_array';
      if (!method_exists(__CLASS__, $method)) {
        return false;
      }
      $arr = self::$method($str);
    } else if (array_key_exists($str, self::$keywords)) {
      $notation = 'keyword';
      $arr = self::$keywords[$str];
    } else {
      return false;
    }
    if (!$arr) return false;
    return array($arr, $notation);
  }

  private $str, $default_notation;

  function success() {
    return (boolean) self::parse($this->str);
  }

  function __construct($str, $notation=null) {
    $this->str = $str;
    if ($notation) $this->default_notation = $notation;
  }

  function __toString() {
    $converted = self::convert($this->str, $this->default_notation);
    return ($converted) ? $converted : 'Error: Invalid color or notation';
  }

  function __get($name) {
    if ($name === 'hex_nohash') {
      return str_replace('#', '', self::convert($this->str, 'hex'));
    } elseif ($name === 'hex_shorthand') {
      $hex = self::convert($this->str, 'hex');
      return (
        $hex[1] === $hex[2] &&
        $hex[3] === $hex[4] &&
        $hex[5] === $hex[6]
      ) ? '#'.$hex[1].$hex[3].$hex[5] : $hex;
    } elseif (in_array($name, array('r','g','b','a'))) {
      list($arr, $notation) = self::parse($this->str);
      list($r, $g, $b, $a) = $arr;
      return $$name;
    } elseif (in_array($name, array('h', 's', 'l'))) {
      list($arr, $notation) = self::parse($this->str);
      list($h, $s, $l) = self::calculate_hsl($arr);
      return $$name;
    } elseif (method_exists(__CLASS__, "array_to_$name")) {
      return self::convert($this->str, $name);
    }
    return null;
  }

}