<?php

namespace Drupal\mathematical_text_formatter;

/**
 * Interface LexerInterface.
 *
 * @package Drupal\mathematical_text_formatter
 */
interface LexerInterface {

  /**
   * Returns a token list from a mathematical expression.
   *
   * @param string $expression
   *   The mathematical expression to tokenize.
   *
   * @return array
   *   Token array.
   */
  public function tokenize($expression);

}
