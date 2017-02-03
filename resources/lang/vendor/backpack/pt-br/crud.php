<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Dick Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Create form
    'add'                 => 'Adicionar',
    'back_to_all'         => 'Voltar para todos',
    'cancel'              => 'Cancelar',
    'add_a_new'           => 'Adicionar um novo ',

        // Create form - advanced options
        'after_saving'            => 'Depois de salvar',
        'go_to_the_table_view'    => 'Ir para todos os itens',
        'let_me_add_another_item' => 'Me deixe adicionar outro item',
        'edit_the_new_item'       => 'Editar esse novo item',

    // Edit form
    'edit'                 => 'Editar',
    'save'                 => 'Salvar',

    // Revisions
    'revisions'            => 'Revisões',
    'no_revisions'         => 'Nenhuma revisão encontrada',
    'created_this'         => 'criou esta',
    'changed_the'          => 'alterou o',
    'restore_this_value'   => 'Restaurar esse valor',
    'from'                 => 'de',
    'to'                   => 'para',
    'undo'                 => 'Desfazer',
    'revision_restored'    => 'Revisão foi restaurada com sucesso',

    // CRUD table view
    'all'                       => 'Todos os',
    'in_the_database'           => 'do banco de dados',
    'list'                      => 'Lista',
    'actions'                   => 'Ações',
    'preview'                   => 'Visualizar',
    'delete'                    => 'Deletar',
    'admin'                     => 'Admin',
    'details_row'               => 'Esse é a linha de detalhes, modificar como quiser.',
    'details_row_loading_error' => 'Ocorreu um problema ao carregar, tente novamente.',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'Você tem certeza que deseja deletar esse item?',
        'delete_confirmation_title'                   => 'Item deletado',
        'delete_confirmation_message'                 => 'O item foi deletado com sucesso.',
        'delete_confirmation_not_title'               => 'NÃO deletado',
        'delete_confirmation_not_message'             => "Houve um erro. Seu item pode não ter sido deletado.",
        'delete_confirmation_not_deleted_title'       => 'Não deletado',
        'delete_confirmation_not_deleted_message'     => 'Nada aconteceu, seu item está a salvo.',

        // DataTables translation
        'emptyTable'     => 'Nenhum registro no momento',
        'info'           => 'Mostrando _START_ de um total de _END_ de _TOTAL_ registros',
        'infoEmpty'      => 'Mostrando 0 de 0 de um total de 0 registros',
        'infoFiltered'   => '(filtrado De _MAX_ entradas totais)',
        'infoPostFix'    => '',
        'thousands'      => ',',
        'lengthMenu'     => '_MENU_ itens por página',
        'loadingRecords' => 'Carregando...',
        'processing'     => 'Processando...',
        'search'         => 'Procure: ',
        'zeroRecords'    => 'Nenhum registro encontrado',
        'paginate'       => [
            'first'    => 'Primeiro',
            'last'     => 'Último',
            'next'     => 'Próximo',
            'previous' => 'Anterior',
        ],
        'aria' => [
            'sortAscending'  => ': Ative para ordenar por ordem ascendente',
            'sortDescending' => ': Ative para ordernar por ordem descendente',
        ],

    // global crud - errors
    'unauthorized_access' => 'Acesso não autorizado - você não tem as permissões necessárias para ver essa página.',
    'please_fix' => 'Por favor, corrija os seguintes erros:',

    // global crud - success / error notification bubbles
    'insert_success' => 'O item foi adicionado com sucesso.',
    'update_success' => 'O item foi alterado com sucesso.',

    // CRUD reorder view
    'reorder'                      => 'Reordenar',
    'reorder_text'                 => 'Use o drag&drop para reordenar.',
    'reorder_success_title'        => 'Feito',
    'reorder_success_message'      => 'Seu pedido foi salvo.',
    'reorder_error_title'          => 'Erro',
    'reorder_error_message'        => 'Seu item não foi salvo.',

    // Fields
    'browse_uploads' => 'Procurar nos uploads',
    'clear' => 'Limpar',
    'page_link' => 'link da página',
    'page_link_placeholder' => 'http://exemplo.com/sua-pagina',
    'internal_link' => 'Link internet',
    'internal_link_placeholder' => 'URL amigável interna. Ex: \'admin/pagina\' (sem aspas) para \':url\'',
    'external_link' => 'Link externo',
    'choose_file' => 'Escolha um arquivo',

    //Table field
    'table_cant_add' => 'Não pode adicionar um novo :entity',
    'table_max_reached' => 'Número máximo de :max atingido',

];
