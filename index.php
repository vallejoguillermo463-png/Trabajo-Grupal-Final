<?php

require_once 'controllers/EmpleadoController.php';

$controller = new EmpleadoController();

$action = $_GET['action'] ?? 'index';

switch($action)
{
    case 'create':
        $controller->create();
        break;

    case 'store':
        $controller->store();
        break;

    case 'show':
        $controller->show($_GET['id']);
        break;

    case 'edit':
        $controller->edit($_GET['id']);
        break;

    case 'update':
        $controller->update();
        break;

    case 'delete':
        $controller->delete($_GET['id']);
        break;

    default:
        $controller->index();
}