<?php

namespace Bolt;

use Michelf\MarkdownExtra;

class Utils {

  /**
   * Markdown to HTML
   * @param $string - String of Markdown
   * @return string - HTML from Markdown
   */
  public static function convertMarkdown($string) {
    return MarkdownExtra::defaultTransform($string);
  }

  // Given a relative file path, return the resolved absolute path
  public static function get_absolute_path($relativeFilePath) {
    $publicDir = '/dist';
    return getcwd() . $publicDir . $relativeFilePath;
  }

  // Given an absolute file path, return the file's extension info
  public static function get_file_ext($absoluteFilePath) {
    return pathinfo($absoluteFilePath, PATHINFO_EXTENSION);
  }

  /**
   * Dashes to camelCase string converter
   * @param $string - Takes something like `my-cool-string`
   * @return string - Returns `myCoolString`
   */
  public static function dashesToCamelCase($string) {
    $str = str_replace('-', '', ucwords($string, '-'));
    return lcfirst($str);
  }

}
