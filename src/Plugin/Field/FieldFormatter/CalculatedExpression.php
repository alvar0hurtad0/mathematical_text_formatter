<?php

namespace Drupal\mathematical_text_formatter\Plugin\Field\FieldFormatter;

use Drupal\Component\Utility\Html;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'calculated_expression' formatter.
 *
 * @FieldFormatter(
 *   id = "calculated_expression",
 *   label = @Translation("Calculated expression"),
 *   field_types = {
 *     "text",
 *     "text_long",
 *     "string",
 *     "string_long"
 *   }
 * )
 */
class CalculatedExpression extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return array(
      // Implement default settings.
    ) + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    return array(
      // Implement settings form.
    ) + parent::settingsForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    // Implement settings summary.
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    foreach ($items as $delta => $item) {
      $elements[$delta] = ['#markup' => $this->viewValue($item)];
    }

    return $elements;
  }

  /**
   * Generate the output appropriate for one field item.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   One field item.
   *
   * @return string
   *   The textual output generated.
   */
  protected function viewValue(FieldItemInterface $item) {
    $lexer = \Drupal::service('mathematical_text_formatter.lexer');
    $parser = \Drupal::service('mathematical_text_formatter.parser');

    // Clean up the expression.
    $expression = Html::escape(str_replace(' ', '', $item->value));

    // Get the tokens from expression.
    $tokens = $lexer->tokenize($expression);

    // Calculate reslt of tokens.
    $result = $parser->caluclate($tokens);

    return $result;
  }

}
