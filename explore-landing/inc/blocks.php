<?php

function register_acf_blocks() {
    if ( function_exists('acf_register_block_type') ) {

        // improvement
        acf_register_block_type(array(
            'name'              => 'improvement',
            'title'             => __('Improvement Block'),
            'description'       => __('Block with home improvement marketing content.'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/improvement/improvement.php',
            'category'          => 'formatting',
            'icon'              => 'admin-home',
            'keywords'          => array('improvement', 'marketing', 'home'),
            'mode'              => 'edit',
            'supports'          => array(
                'align' => false,
                'mode'  => true,
                'jsx'   => false,
            ),
        ));
        // profit
        acf_register_block_type(array(
            'name'              => 'profit',
            'title'             => __('Profit Block'),
            'description'       => __('Block that shows what sets us apart'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/profit/profit.php',
            'category'          => 'formatting',
            'icon'              => 'chart-line',
            'keywords'          => array('profit', 'market', 'analysis'),
            'mode'              => 'edit',
            'supports'          => array(
                'align' => false,
                'mode' => true,
                'jsx' => false,
            ),
        ));

    }
}
add_action('acf/init', 'register_acf_blocks');