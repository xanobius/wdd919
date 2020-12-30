<?php

// Action sanitizing
$available_actions = [
    'list',     // list all entries of the type
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
    case 'list':
        $pageElement = listNavigationItems();
        break;
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
        $pageElement = showUpdateForm($_REQUEST['id']);
        break;
    case 'update':
        // update
        $pageElement = updateNavigationItem($rules);
        break;
    case 'delete':
        // delete
        break;
}

//var_dump($pageElement);
//die();


// PAGE FUNCTIONS

function listNavigationItems()
{
    include('models/navigation.php');
    $items = getAllNavigationItems();
    return [
        'page' => 'admin/lists/navigation.php',
        'items' => $items,
        'edit_link' => 'index.php?p=admin&module=navigation&action=edit&id=',
        'delete_link' => 'index.php?p=admin&module=navigation&action=delete&id=',
    ];
}

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
            // redirect to overview to prevent double-save
            header('Location: index.php?p=admin&module=navigation&action=list', true, 301);
            exit();
        }
    }
}

function showUpdateForm($id, $errors = [], $values = []){
    include('models/navigation.php');
    $item = getNavigationItemById($id);
//    var_dump($errors);
//    die();
    return [
        'page' => 'admin/forms/navigation.php',
        'action' => 'index.php?p=admin&module=navigation&action=update',
        'values' => $values != [] ? $values : $item,
        'errors' => $errors
    ];
}

function updateNavigationItem($rules){
    $errors = validateFields($rules);
    if(count($errors) != 0) {
        // errors in fields! show field
        return showUpdateForm(
            $_REQUEST['id'],
            $errors,
            [
                'id' => $_REQUEST['id'],
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
                // redirect to overview to prevent double-save
            header('Location: index.php?p=admin&module=navigation&action=list', true, 301);
            exit();
        }
    }
}

function deleteNavigation($id) {}
