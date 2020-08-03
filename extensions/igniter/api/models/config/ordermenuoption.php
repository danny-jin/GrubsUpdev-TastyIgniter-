<?php

return [
    'list' => [
        'filter' => [],
        'toolbar' => [
//            'buttons' => [
//                'create' => [
//                    'label' => 'lang:admin::lang.button_new',
//                    'class' => 'btn btn-primary',
//                    'href' => 'igniter/api/{{lower_plural_name}}/create'
//                ],
//                'delete' => [
//                    'label' => 'lang:admin::lang.button_delete',
//                    'class' => 'btn btn-danger',
//                    'data-attach-loading' => '',
//                    'data-request-form' => '#list-form',
//                    'data-request' => 'onDelete',
//                    'data-request-data' => "_method:'DELETE'",
//                    'data-request-confirm' => 'lang:admin::lang.alert_warning_confirm'
//                ],
//                'filter' => [
//                    'label' => 'lang:admin::lang.button_icon_filter',
//                    'class' => 'btn btn-default btn-filter',
//                     'data-toggle' => 'list-filter',
//                     'data-target' => '.list-filter'
//                 ],
//            ],
        ],
        'columns' => [
            'id' => [
                'label' => 'ID'
            ]
        ],
    ],
    'form' => [
        'toolbar' => [
//            'buttons' => [
//                'save' => [
//                    'label' => 'lang:admin::lang.button_save',
//                    'class' => 'btn btn-primary',
//                    'data-request' => 'onSave',
//                    'data-progress-indicator' => 'lang:admin::lang.text_saving'
//                ],
//                'saveClose' => [
//                    'label' => 'lang:admin::lang.button_save_close',
//                    'class' => 'btn btn-default',
//                    'data-request' => 'onSave',
//                    'data-request-data' => 'close:1',
//                    'data-progress-indicator' => 'lang:admin::lang.text_saving',
//                ],
//                'delete' => [
//                    'label' => 'lang:admin::lang.button_icon_delete', 'class' => 'btn btn-danger',
//                    'data-request' => 'onDelete', 'data-request-data' => "_method:'DELETE'",
//                    'data-progress-indicator' => 'lang:admin::lang.text_deleting',
//                    'data-request-confirm' => 'lang:admin::lang.alert_warning_confirm', 'context' => ['edit'],
//                ],
//            ],
        ],
        'fields' => [],
        'tabs' => [
            'fields' => [
                'id' => [
                    'label' => 'ID',
                    'type' => 'number',
                ]
            ]
        ]
    ],
];