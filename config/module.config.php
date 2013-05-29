<?php
namespace ZF2Bbcode;

return array(
        'view_manager' => array(
            'template_path_stack' => array(),
        ),

        'router' => include __DIR__ . '',

        'controllers' => array(
            'invokables' => array(
            ),
        ),
        'view_helpers' => array(
            'invokables'=> array(
                'bbcode' => 'ZF2Bbcode\View\Helper\Bbcode'
            )
        )
    );