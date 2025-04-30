<?php
function dstheme_customizer($wp_customize){

     // 1 Copy      right Section
     $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Setting',
            'description' => 'Copyright Settings'
        )
        );
        $wp_customize->add_setting(
            'set_copyright',
            array(
                'type' => 'theme_mod',
                'default' => 'Copyright X - All Rights Reserved',
                'sanitize_callback' => 'sanitize_text_field'
            )
            
            );
            $wp_customize->add_control(
                'set_copyright',
                array(
                    'label' => 'Copyright Information',
                    'description' => 'Please, type your copyright information',
                    'section' => 'sec_copyright',
                    'type' => 'text'
                )
                
                );
}
add_action('customizere_register', 'dstheme_customizer');