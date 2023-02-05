<?php
// Database connection info
$dbDetails = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'db'   => 'cpms_project'
);

// DB table to use
$table = 'projects';

// Table's primary key
$primaryKey = 'project_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database. 
// The `dt` parameter represents the DataTables column identifier.
$columns = array(
    array( 'db' => 'project', 'dt' => 0 ),
    array( 'db' => 'department',  'dt' => 1 ),
    array( 'db' => 'ward',      'dt' => 2 ),
    array( 'db' => 'location',     'dt' => 3 ),
    array( 'db' => 'status',    'dt' => 4 ),
    array( 'db' => 'FY',    'dt' => 5 ),
    array( 'db' => 'budget',    'dt' => 6 ),
    array(
        'db'        => 'created',
        'dt'        => 7,
        'formatter' => function( $d, $row ) {
            return date( 'jS M Y', strtotime($d));
        }
    ),
    array(
        'db'        => 'status',
        'dt'        => 8,
        'formatter' => function( $d, $row ) {
            return ($d == 1)?'Active':'Inactive';
        }
    )
);

// Include SQL query processing class
require( 'ssp.class.php' );

// Output data as json format
echo json_encode(
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
);