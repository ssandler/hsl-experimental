<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace HH\Lib\MultiByte;

const string DEFAULT_ENCODING='UTF-8';

/**
 * Returns the length of a string in characters
 */
function length(string $string, string $encoding=DEFAULT_ENCODING): int {
  return \mb_strlen($string, $encoding);
}

/**
 * Returns the first position of the "needle" string in the "haystack" string,
 * or null if it isn't found
 */
function search(string $haystack, string $needle, int $offset = 0, string $encoding=DEFAULT_ENCODING): ?int {
  $return = \mb_strpos($haystack, $needle, $offset, $encoding);
  return $return === false ? null : $return;
}

/**
 * Returns the first position of the "needle" string in the "haystack" string,
 * or null if it isn't found (case insensitive)
 */
function search_ci(string $haystack, string $needle, int $offset = 0, string $encoding=DEFAULT_ENCODING): ?int {
  $return = \mb_stripos($haystack, $needle, $offset, $encoding);
  return $return === false ? null : $return;
}

/**
 * Returns the last position of the "needle" string in the "haystack" string,
 * or null if it isn't found
 */
function search_last(string $haystack, string $needle, int $offset = 0, string $encoding=DEFAULT_ENCODING): ?int {
  $return = \mb_strrpos($haystack, $needle, $offset, $encoding);
  return $return === false ? null : $return;
}

/**
 * Returns the last position of the "needle" string in the "haystack" string,
 * or null if it isn't found (case insensitive)
 */
function search_last_ci(string $haystack, string $needle, int $offset = 0, string $encoding=DEFAULT_ENCODING): ?int {
  $return = \mb_strripos($haystack, $needle, $offset, $encoding);
  return $return === false ? null : $return;
}

/**
 * Returns a substring of length $length of the given string starting at the $offset
 */
function slice(string $string, int $offset, ?int $length = null, string $encoding=DEFAULT_ENCODING): string {
  return \mb_substr($string, $offset, $length, $encoding);
}

# mb_detect_encoding
# mb_convert_kana
# mb_strtolower
# mb_convert_encoding
# mb_substitute_characters
# mb_strcut