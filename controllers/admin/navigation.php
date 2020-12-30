<?php

// Action sanitizing
$available_actions = [
    'new',      // show mask to create new navigation point
    'create',   // store a new navigation point in db
    'edit',     // show mask to edit an existent navigation point
    'update',   // update a navigation point in db
    'delete'    // delete a navigation point in db
];

if(isset($_REQUEST['action']) && in_array($_REQUEST['action'], $available_actions)){
    $action = $_REQUEST['action'];
}else{
    die('invalid action');
}

// VALIDATIONS
$rules = [
    'nav_title' => ['required'],
    'title' => ['required'],
    'priority' => ['number']
];


switch($action){
    case 'new':
        // show empty mask
        $pageElement = showCreateForm();
        break;
    case 'create':
        // save
        $pageElement = createNavigationItem($rules);
        break;
    case 'edit':
        // show filled mask
        break;
    case 'update':
        // update
        break;
    case 'delete':
        // delete
        break;
}

//var_dump($pageElement);
//die();


// PAGE FUNCTIONS

function showCreateForm($errors = [], $values = []){
    return [
        'page' => 'admin/forms/navigation.php',
        'action' => 'index.php?p=admin&module=navigation&action=create',
        'errors' => $errors,
        'values' => $values
    ];
}

function createNavigationItem($rules){
    $errors = validateFields($rules);
    if(count($errors) != 0) {
        // errors in fields! Show Field
        return showCreateForm(
            $errors,
            [
                'nav_title' => $_REQUEST['nav_title'],
                'title' => $_REQUEST['title'],
                'priority' => $_REQUEST['priority'],
                'starred' => $_REQUEST['starred']
            ]);
    }else{
        include('models/navigation.php');
        $res = saveNavigationEntry($_REQUEST);
        if($res == false){
            die('Speichern fehlgeschlagen');
        }else{
            die('Erfolgreich gespeichert mit ID : ' . $res);
        }
    }
}

function showUpdateForm($id){

}

function deleteNavigation($id) {}
