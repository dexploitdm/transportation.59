<?php
add_action('customize_register', function($customizer) {
    $customizer->add_section(
        'section_one', array(
            'title' => 'Настройки сайта',
            'description' => '',
            'priority' => 11,
        )
    );
	$customizer->add_setting('linkPresentProduct',
        array('default' => '#')
    );
	$customizer->add_control('linkPresentProduct', array(
            'label' => 'Ссылка на презентацию продукта',
            'section' => 'section_one',
            'type' => 'text',
        )
    );
});

#Вывод
#echo get_theme_mod('linkPresentProduct');