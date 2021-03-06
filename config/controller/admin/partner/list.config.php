<?php

$models = \Novius\Partners\Model_Partner::query()
    ->order_by('part_title', 'ASC')
    ->get();
$parts  = array();
foreach ($models as $id => $a) {
    $parts[$id] = $a->title_item();
}
return array(
    'popup'  => array(
        'layout' => array(),
    ),
    'fields' => array(
        'partners' => array(
            'renderer'         => '\Novius\Renderers\Renderer_Multiselect',
            'form'             => array(
                'options' => $parts,
                'style'   => array(
                    'width'  => '100%',
                    'height' => '200px',
                )
            ),
            'renderer_options' => array(
                'order' => true,
            ),
        ),
    ),
);