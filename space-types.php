<?php
/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(
        'emailPublico' => array(
            'label' => 'Email Público',
            'validations' => array(
                'v::email()' => 'O email público não é um email válido.'
            )
        ),

        'emailPrivado' => array(
            'label' => 'Email Privado',
            'validations' => array(
                'v::email()' => 'O email privado não é um email válido.'
            ),
        	'private' => true
        ),

        'telefonePublico' => array(
            'label' => 'Telefone Público',
            'type' => 'string',
            'validations' => array(
                'v::allOf(v::regex("#^\(\d{2}\)[ ]?\d{4,5}-\d{4}$#"), v::brPhone())' => 'Por favor, informe o telefone público no formato (xx) xxxx-xxxx.'
            )
        ),

        'telefone1' => array(
            'label' => 'Telefone 1',
            'type' => 'string',
            'validations' => array(
                'v::allOf(v::regex("#^\(\d{2}\)[ ]?\d{4,5}-\d{4}$#"), v::brPhone())' => 'Por favor, informe o telefone 1 no formato (xx) xxxx-xxxx.'
            ),
        	'private' => true
        ),


        'telefone2' => array(
            'label' => 'Telefone 2',
            'type' => 'string',
            'validations' => array(
                'v::allOf(v::regex("#^\(\d{2}\)[ ]?\d{4,5}-\d{4}$#"), v::brPhone())' => 'Por favor, informe o telefone 2 no formato (xx) xxxx-xxxx.'
            ),
        	'private' => true
        ),

        /*
        'virtual_fisico' => array(
            'label' => 'Virtual ou físico',
            'type' => 'select',
            'options' => array(
                '' => 'Físico',
                'virtual' => 'Virtual'
            )
        ),
        */
        'acessibilidade' => array(
            'label' => 'Acessibilidade',
            'type' => 'select',
            'options' => array(
                '' => 'Não Informado',
                'Sim' => 'Sim',
                'Não' => 'Não'
            )
        ),
        'acessibilidade_fisica' => array(
            'label' => 'Acessibilidade física',
            'type' => 'multiselect',
            'allowOther' => true,
            'allowOtherText' => 'Outros',
            'options' => array(
                'Banheiros adaptados',
                'Rampa de acesso',
                'Elevador',
                'Sinalização tátil',

                // vindos do sistema de museus.cultura.gov.br
                'Bebedouro adaptado',
                'Cadeira de rodas para uso do visitante',
                'Circuito de visitação adaptado',
                'Corrimão nas escadas e rampas',
                'Elevador adaptado',
                'Rampa de acesso',
                'Sanitário adaptado',
                'Telefone público adaptado',
                'Vaga de estacionamento exclusiva para deficientes',
                'Vaga de estacionamento exclusiva para idosos'
            )
        ),
        'capacidade' => array(
            'label' => 'Capacidade',
            'validations' => array(
                "v::intVal()->positive()" => "A capacidade deve ser um número positivo."
            )
        ),

        'endereco' => array(
            'label' => 'Endereço',
            'type' => 'text'
        ),


        'En_CEP' => [
            'label' => 'CEP',
        ],
        'En_Nome_Logradouro' => [
            'label' => 'Logradouro',
        ],
        'En_Num' => [
            'label' => 'Número',
        ],
        'En_Complemento' => [
            'label' => 'Complemento',
        ],
        'En_Bairro' => [
            'label' => 'Bairro',
        ],
        'En_Municipio' => [
            'label' => 'Município',
        ],
        'En_Estado' => [
            'label' => 'Estado',
            'type' => 'select',
            'options' => array(
                'AC'=>'Acre',
                'AL'=>'Alagoas',
                'AP'=>'Amapá',
                'AM'=>'Amazonas',
                'BA'=>'Bahia',
                'CE'=>'Ceará',
                'DF'=>'Distrito Federal',
                'ES'=>'Espírito Santo',
                'GO'=>'Goiás',
                'MA'=>'Maranhão',
                'MT'=>'Mato Grosso',
                'MS'=>'Mato Grosso do Sul',
                'MG'=>'Minas Gerais',
                'PA'=>'Pará',
                'PB'=>'Paraíba',
                'PR'=>'Paraná',
                'PE'=>'Pernambuco',
                'PI'=>'Piauí',
                'RJ'=>'Rio de Janeiro',
                'RN'=>'Rio Grande do Norte',
                'RS'=>'Rio Grande do Sul',
                'RO'=>'Rondônia',
                'RR'=>'Roraima',
                'SC'=>'Santa Catarina',
                'SP'=>'São Paulo',
                'SE'=>'Sergipe',
                'TO'=>'Tocantins',
            )
        ],

        'horario' => array(
            'label' => 'Horário de funcionamento',
            'type' => 'text'
        ),

        'criterios' => array(
            'label' => 'Critérios de uso do espaço',
            'type' => 'text'
        ),

        'site' => array(
            'label' => 'Site',
            'validations' => array(
                "v::url()" => "A url informada é inválida."
            )
        ),
        'facebook' => array(
            'label' => 'Facebook',
            'validations' => array(
                "v::url('facebook.com')" => "A url informada é inválida."
            )
        ),
        'twitter' => array(
            'label' => 'Twitter',
            'validations' => array(
                "v::url('twitter.com')" => "A url informada é inválida."
            )
        ),
        'googleplus' => array(
            'label' => 'Google+',
            'validations' => array(
                "v::url('plus.google.com')" => "A url informada é inválida."
            )
        )
    ),

/**
 * Equipamentos Culturais
 */

    'items' => array(
        'Locais para exibir' => array(
            'range' => array(10,19),
            'items' => array(
                10 => array( 'name' => 'Local listado' )

            )
        ),

        'Locais para não exibit' => array(
            'range' => array(20,29),
            'items' => array(
                20 => array( 'name' => 'Não listado' ),
            )
        )
    )
);
