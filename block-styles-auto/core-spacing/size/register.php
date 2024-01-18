<?php
if (function_exists('register_block_style')) {
    $spacing_values = array("-700" => "-120","-500" => "-90", "100" => "30", "200" => "45", "300" => "60", "400" => "75", "500" => "90", "600" => "105", "700" => "120");
    foreach ($spacing_values as $label => $value) {
        $key = $label;
        $name = strval($label);
        $label = sprintf(__('%d', 'ng1'), $label);

        // Convertir la valeur en rem dans la chaîne de style
        $value_in_rem = ($value / 16) . 'rem';

        if (intval($value, 10) > 0) {
            register_block_style(
                'core/spacer',
                array(
                    'name'         => $name,
                    'label'        => $label . ' (' . $value . ')',
                    'is_default'   => false,
                    'inline_style' => '.wp-block-spacer.is-style-' . $name . ' { height: ' . $value_in_rem . ' !important; }',
                )
            );
        } else {
            register_block_style(
                'core/spacer',
                array(
                    'name'         => $name,
                    'label'        => $label . ' (' . $value . ')',
                    'is_default'   => false,
                    'inline_style' => '.wp-block-spacer.is-style-' . $name . ' { height: 0 !important; margin-bottom: ' . $value_in_rem . ' !important; }',
                )
            );
        }
    }
}
