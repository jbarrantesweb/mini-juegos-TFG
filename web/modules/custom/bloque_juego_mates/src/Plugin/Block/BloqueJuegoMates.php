<?php

namespace  Drupal\bloque_juego_mates\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "bloque_juego_mates",
 *   admin_label = @translation("bloque_juego_mates"),
 *   category = @translation("bloque_juego"),
 * )
 */


class BloqueJuegoMates extends BlockBase
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
                    'bloque_juego_mates/bloque_juego_mates_librarie',
                ],
            ],
            '#theme' => 'my_template',
            '#test_var' => 'test variable',
        ];

        return $renderable;
    }
}
