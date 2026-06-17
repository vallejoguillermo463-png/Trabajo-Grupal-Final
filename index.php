<?php

require_once 'controllers/VideojuegoController.php';

$controller = new VideojuegoController();

$action = $_GET['action'] ?? 'inicio';

switch ($action)
{
    case 'inicio':
        include 'views/inicio.php';
        break;

    case 'lista':
        $controller->index();
        break;

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
        include 'views/inicio.php';
}