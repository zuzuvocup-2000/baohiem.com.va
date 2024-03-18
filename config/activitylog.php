<?php

return [

    /*
     * When set to false, no activities will be saved to the database.
     */
    'enabled' => env('ACTIVITY_LOG_ENABLED', true),

    /*
     * When set to true, the subject returns soft deleted models.
     */
    'subject_returns_soft_deleted_models' => false,

    /*
     * The default log name when none is provided.
     */
    'default_log_name' => 'default',

    /*
     * When using the "database" driver for activity storage
     * we need to know which connection to use.
     */
    'database_connection' => env('DB_CONNECTION', null),
];