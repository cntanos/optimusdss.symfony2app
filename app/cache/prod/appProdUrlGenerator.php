<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (    0 => 'from',    1 => 'to',    2 => 'timeSelected',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\HistoricController::indexAction',    'from' => '',    'to' => '',    'timeSelected' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'timeSelected',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    3 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prediction' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'from',    2 => 'to',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PredictionController::indexAction',    'from' => '',    'to' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    3 =>     array (      0 => 'text',      1 => '/prediction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newPrediction' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'from',    2 => 'to',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PredictionController::newPredictionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    3 =>     array (      0 => 'text',      1 => '/new-prediction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensor' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SensorController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sensor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'actionPlan' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'from',    3 => 'to',    4 => 'timeSelected',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PVActionPlanController::indexAction',    'idAPType' => '',    'from' => '',    'to' => '',    'timeSelected' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'timeSelected',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    5 =>     array (      0 => 'text',      1 => '/action-plan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'actionPlan_PVMaintenance' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'from',    3 => 'to',    4 => 'timeSelected',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PVMActionPlanController::indexAction',    'idAPType' => '',    'from' => '',    'to' => '',    'timeSelected' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'timeSelected',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    5 =>     array (      0 => 'text',      1 => '/action-plan-pvm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changePVMStatusDay' => array (  0 =>   array (    0 => 'idOutputDay',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PVMActionPlanController::changeStatusDayAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOutputDay',    ),    1 =>     array (      0 => 'text',      1 => '/change-status-pvm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newCalculatePVM' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'from',    3 => 'to',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PVMActionPlanController::newCalculatePVMAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    4 =>     array (      0 => 'text',      1 => '/new-calculate-pvm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newCalculatePV' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'from',    3 => 'to',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PVActionPlanController::newCalculatePVAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    4 =>     array (      0 => 'text',      1 => '/new-calculate-pv',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changePVStatusDay' => array (  0 =>   array (    0 => 'idOutputDay',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PVActionPlanController::changeStatusDayAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOutputDay',    ),    1 =>     array (      0 => 'text',      1 => '/change-status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changePVStrategy' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PVActionPlanController::changeStrategyAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/change-strategy',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changePVStrategyWeek' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PVActionPlanController::changeStrategyWeekAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/change-strategy-week',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'init' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\InitController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/init',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'selectOptions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\InitController::selectOptionsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/select-options',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'selectGraph' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\InitController::selectGraphAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/select-graph',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminBuilding' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\BuildingController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin-buildings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'building_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\BuildingController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/building-create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'building_delete' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\BuildingController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/building-delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'building_save' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\BuildingController::saveAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/building-save',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'globalConfigBuilding' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\BuildingController::globalConfigBuildingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/configuration-building',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensorRTime_save' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idSensorRTime',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\BuildingController::saveSensorRTimeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSensorRTime',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    2 =>     array (      0 => 'text',      1 => '/sensorRTime-save',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensorRTime_create' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\BuildingController::addSensorRTimeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/sensorRTime-create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensorRTime_delete' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idSensorRTime',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\BuildingController::deleteSensorRTimeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSensorRTime',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    2 =>     array (      0 => 'text',      1 => '/sensorRTime-delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'building_description' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\BuildingController::descriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/building-description',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminPartitions' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PartitionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/admin-partitions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'createPartition' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PartitionController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partition-create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletePartition' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\PartitionController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partition-delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminSensors' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SensorController::getAdminSensorsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/admin-sensors',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensor_create' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SensorController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/sensor-create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensor_save' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idSensor',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SensorController::saveAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSensor',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    2 =>     array (      0 => 'text',      1 => '/sensor-save',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensor_delete' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idSensor',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SensorController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSensor',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    2 =>     array (      0 => 'text',      1 => '/sensor-delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensor_checkStatus' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SensorController::checkStatusSensorsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/sensor-check-status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminActionPlans' => array (  0 =>   array (    0 => 'idBuilding',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\AdminActionPlanController::adminActionPlansAction',    'type' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    1 =>     array (      0 => 'text',      1 => '/admin-action-plans',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'actionPlan_mapping' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idActionPlan',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\APSensorsController::mappingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idActionPlan',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    2 =>     array (      0 => 'text',      1 => '/actionPlan-mapping',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'actionPlan_save' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idActionPlan',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\AdminActionPlanController::saveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idActionPlan',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    2 =>     array (      0 => 'text',      1 => '/actionPlan-save',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensorPartition_create' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idActionPlan',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\APSensorsController::addSensorPartitionAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idActionPlan',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    2 =>     array (      0 => 'text',      1 => '/sensorPartition-create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensorPartition_delete' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idActionPlan',    2 => 'idSensorPartition',    3 => 'orderSensor',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\APSensorsController::deleteSensorPartitionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'orderSensor',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSensorPartition',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idActionPlan',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    4 =>     array (      0 => 'text',      1 => '/sensorPartition-delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sensorPartition_save' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idActionPlan',    2 => 'idSensorPartition',    3 => 'orderSensor',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\APSensorsController::saveSensorPartitionAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'orderSensor',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSensorPartition',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idActionPlan',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    4 =>     array (      0 => 'text',      1 => '/sensorPartition-save',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'view_switchOnOff' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'from',    3 => 'to',    4 => 'timeSelected',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SwitchActionPlanController::indexAction',    'idAPType' => '',    'from' => '',    'to' => '',    'timeSelected' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'timeSelected',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    5 =>     array (      0 => 'text',      1 => '/view-switch-On-Off',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changeSwitchStatusDay' => array (  0 =>   array (    0 => 'idOutputDay',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SwitchActionPlanController::changeStatusDayAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOutputDay',    ),    1 =>     array (      0 => 'text',      1 => '/change-status-switch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changeSwitchStrategy' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SwitchActionPlanController::changeStrategyAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/change-strategy',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'semanticframeworkget_data_for_model' => array (  0 =>   array (    0 => 'predictedparameter',    1 => 'date',    2 => 'window',    3 => 'sensors',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SemanticFrameworkController::get_data_for_modelAction',  ),  2 =>   array (    '_method' => 'get',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'sensors',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'window',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'date',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'predictedparameter',    ),    4 =>     array (      0 => 'text',      1 => '/semantic-framework/get_data_for_model',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'semanticframeworkget_data_for_forecasting' => array (  0 =>   array (    0 => 'predictedparameter',    1 => 'date',    2 => 'window',    3 => 'sensors',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SemanticFrameworkController::get_data_for_forecastingAction',  ),  2 =>   array (    '_method' => 'get',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'sensors',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'window',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'date',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'predictedparameter',    ),    4 =>     array (      0 => 'text',      1 => '/semantic-framework/get_data_for_forecasting',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getSetPointPlan' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'start_date',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SetPointPlanController::set_pointAction',    'start_date' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'start_date',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    3 =>     array (      0 => 'text',      1 => '/set_point',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newCalculateSPM' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'from',    3 => 'to',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SetPointPlanController::newCalculateSetPointManagementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    4 =>     array (      0 => 'text',      1 => '/new_set_point',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changeSPMStatusDay' => array (  0 =>   array (    0 => 'idOutputDay',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\SetPointPlanController::changeStatusDayAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOutputDay',    ),    1 =>     array (      0 => 'text',      1 => '/change-status-spm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getOccupancyPlan' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'start_date',    3 => 'constraints',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\OccupancyController::occupancyAction',    'start_date' => '',    'constraints' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'constraints',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'start_date',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    4 =>     array (      0 => 'text',      1 => '/occupancy',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changeOStatusDay' => array (  0 =>   array (    0 => 'idOutputDay',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\OccupancyController::changeStatusDayAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOutputDay',    ),    1 =>     array (      0 => 'text',      1 => '/change-status-occupancy',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'energySourcePlan' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'from',    3 => 'to',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\EnergySourceActionPlanController::plan_indexAction',    'from' => '',    'to' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    4 =>     array (      0 => 'text',      1 => '/energy_flows',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changeEconomizerStatusDay' => array (  0 =>   array (    0 => 'idOutputDay',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\EconomizerActionPlanController::changeStatusDayAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOutputDay',    ),    1 =>     array (      0 => 'text',      1 => '/change-status-economizer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newCalculateEconomizer' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'from',    3 => 'to',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\EconomizerActionPlanController::newCalculateEconomizerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    4 =>     array (      0 => 'text',      1 => '/new-calculate-economizer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'economizerPlan' => array (  0 =>   array (    0 => 'idBuilding',    1 => 'idAPType',    2 => 'from',    3 => 'to',    4 => 'method',  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\EconomizerActionPlanController::indexAction',    'from' => '',    'to' => '',    'method' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'method',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'to',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'from',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAPType',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idBuilding',    ),    5 =>     array (      0 => 'text',      1 => '/economizer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changeEconomizerInternalDay' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Optimus\\OptimusBundle\\Controller\\EconomizerActionPlanController::changeInternalDayAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/change-internal-economizer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'root' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',    'path' => '/init',    'permanent' => true,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
