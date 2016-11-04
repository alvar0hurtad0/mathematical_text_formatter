<?php

namespace Drupal\mathematical_text_formatter;

/**
 * Interface ParserInterface.
 *
 * @package Drupal\mathematical_text_formatter
 */
interface ParserInterface {

  /**
   * Calculate values from a token array.
   *
   * @param array $tokens
   *   The token list to calculate.
   *
   * @return int
   *   Calculated expression.
   */
  public function caluclate($tokens);

}
