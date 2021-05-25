<?php

namespace  Drupal\bloque_juego_ingles\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "bloque_juego_ingles",
 *   admin_label = @translation("bloque_juego_ingles"),
 *   category = @translation("bloque_juego"),
 * )
 */


class BloqueJuegoIngles extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return ['label_display' => FALSE];
    }

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $renderable = [
            '#attached' => [
                'library' => [
                    'bloque_juego_ingles/bloque_juego_ingles_librarie',
                ],
            ],
            '#theme' => 'my_template',
            '#test_var' => 'test variable',
        ];

        return $renderable;
    }
}
