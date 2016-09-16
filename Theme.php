<?php
namespace ACidadeEhSua;
use MapasCulturais\Themes\BaseV1;
use MapasCulturais\App;

class Theme extends BaseV1\Theme{

    protected static function _getTexts(){
        $app = App::i();
        $self = $app->view;
        $url_search_agents = $self->searchAgentsUrl;
        $url_search_spaces = $self->searchSpacesUrl;
        $url_search_events = $self->searchEventsUrl;
        $url_search_projects = $self->searchProjectsUrl;

        return [
          'site: name' => App::i()->config['app.siteName'],
          'site: description' => App::i()->config['app.siteDescription'],
          'site: in the region' => 'na região',
          'site: of the region' => 'da região',
          'site: owner' => 'Secretaria',
          'site: by the site owner' => 'pela Secretaria',

          'home: title' => "Bem-vind@!",
          'home: abbreviation' => "MC",
          'home: colabore' => "Colabore com o Mapas Culturais",
          'home: welcome' => "O Mapas Culturais é uma plataforma livre, gratuita e colaborativa de mapeamento cultural.",
          'home: events' => "Você pode pesquisar eventos culturais nos campos de busca combinada. Como usuário cadastrado, você pode incluir seus eventos na plataforma e divulgá-los gratuitamente.",
          'home: agents' => "Você pode colaborar na gestão da cultura com suas próprias informações, preenchendo seu perfil. Neste local, estão registrados artistas, gestores e produtores; uma rede de atores envolvidos na cena cultural da região. Você pode cadastrar um ou mais pessoas (grupos, coletivos, bandas instituições, empresas, etc.), além de associar ao seu perfil eventos e locais culturais com divulgação gratuita.",
          'home: spaces' => "Procure por locais culturais incluídos na plataforma, acessando os campos de busca combinada que ajudam na precisão de sua pesquisa. Cadastre também os locais onde desenvolve suas atividades artísticas e culturais.",
          'home: projects' => "Reúne projetos culturais ou agrupa eventos de todos os tipos. Neste local, você encontra leis de fomento, mostras, convocatórias e editais criados, além de diversas iniciativas cadastradas pelos usuários da plataforma. Cadastre-se e divulgue seus projetos.",
          'home: home_devs' => 'Existem algumas maneiras de desenvolvedores interagirem com o Mapas Culturais. A primeira é através da nossa <a href="https://github.com/hacklabr/mapasculturais/blob/master/doc/api.md" target="_blank">API</a>. Com ela você pode acessar os dados públicos no nosso banco de dados e utilizá-los para desenvolver aplicações externas. Além disso, o Mapas Culturais é construído a partir do sofware livre <a href="http://institutotim.org.br/project/mapas-culturais/" target="_blank">Mapas Culturais</a>, criado em parceria com o <a href="http://institutotim.org.br" target="_blank">Instituto TIM</a>, e você pode contribuir para o seu desenvolvimento através do <a href="https://github.com/hacklabr/mapasculturais/" target="_blank">GitHub</a>.',

          'search: verified results' => 'Resultados Verificados',
          'search: verified' => "Verificados",


          'entities: Spaces of the agent'=> 'Locais da pessoa',
          'entities: Space Description'=> 'Descrição do Local',
          'entities: Agent children'=> 'Pessoas',
          'entities: My Spaces'=> 'Meus Locais',
          'entities: My spaces'=> 'Meus locais',

          'entities: My Seals'=> 'Meus Selos',
          'entities: My seals'=> 'Meus selos',

          'entities: no registered spaces'=> 'nenhum local cadastrado',
          'entities: no spaces'=> 'nenhum local',

          'entities: Space' => 'Local',
          'entities: Spaces' => 'Locais',
          'entities: space' => 'local',
          'entities: spaces' => 'locais',
          'entities: parent space' => 'local pai',
          'entities: a space' => 'um local',
          'entities: the space' => 'o local',
          'entities: of the space' => 'do local',
          'entities: In this space' => 'Neste local',
          'entities: in this space' => 'neste local',
          'entities: registered spaces' => 'locais cadastrados',
          'entities: new space' => 'novo local',

          'entities: Children spaces' => 'Sublocais',
          'entities: Add child space' => 'Adicionar sublocal',

          'entities: space found' => 'local encontrado',
          'entities: spaces found' => 'locais encontrados',
          'entities: event found' => 'evento encontrado',
          'entities: events found' => 'eventos encontrados',
          'entities: agent found' => 'pessoa encontrado',
          'entities: agents found' => 'pessoas encontrados',
          'entities: project found' => 'projeto encontrado',
          'entities: project found' => 'projetos encontrados',

          'taxonomies:area: name' => 'Área de Atuação',
          'taxonomies:area: select at least one' => 'Selecione pelo menos uma área',
          'taxonomies:area: select' => 'Selecione as áreas',
        ];
    }

    static function getThemeFolder() {
        return __DIR__;
    }

    function _init() {
        parent::_init();
        $app = App::i();
        $app->hook('view.render(<<*>>):before', function() use($app) {
            $this->_publishAssets();
        });
    }

    protected function _publishAssets() {
        $this->jsObject['assets']['logo-instituicao'] = $this->asset('img/logo-instituicao.png', false);
    }

}
