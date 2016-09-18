<?php
return array(
    1 => array(
        'slug' => 'tag',
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent',
            'MapasCulturais\Entities\Event',
            'MapasCulturais\Entities\Project'
        )
    ),

    2 => array(
        'slug' => 'area',
        'required' => "Você deve informar ao menos uma área de atuação",
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent'
        ),
        'restricted_terms' => array(
            'Outros'
        )
    ),

    3 => array(
        'slug' => 'linguagem',
        'required' => "Você deve informar ao menos uma linguagem",
        'entities' => array(
            'MapasCulturais\Entities\Event'
        ),

        'restricted_terms' => array(
            'Outros'
        )
    )
);
