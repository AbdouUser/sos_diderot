<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Calendar_index' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'AppBundle\\Controller\\CalendarController::index',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/Calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Calendar_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CalendarController::view',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Calendar/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Calendar_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CalendarController::add',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Calendar/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Calendar_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CalendarController::edit',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Calendar/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Calendar_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CalendarController::delete',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Calendar/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SOSDiderotpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::SOSDiderotAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Rdv_index' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'AppBundle\\Controller\\RdvController::index',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/Rdv',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Rdv_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RdvController::view',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Rdv/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Rdv_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RdvController::add',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Rdv/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Rdv_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RdvController::edit',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Rdv/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Rdv_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RdvController::delete',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Rdv/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_stuff_index' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'AppBundle\\Controller\\StaffController::index',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/staff',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_staff_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StaffController::view',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/staff/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_staff_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StaffController::edit',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/staff/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_staff_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StaffController::delete',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/staff/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'loginPro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StaffController::SOSLoginPro',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/staff/loginPro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StaffController::add',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/staff/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Student_index' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'AppBundle\\Controller\\StudentController::index',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/student',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Student_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::view',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/student/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Student_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::add',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Student_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::edit',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/student/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_Student_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::delete',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/student/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::SOSLogin',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::SOSInscription',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::SOSPAccueil',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::SOSProfile',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rendez_vous' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::SOSRendezVous',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/rendez_vous',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::SOSLogout',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile-update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::SOSProfileUpdate',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/profile-update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'settings' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::SOSSettings',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/settings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'email-update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::SOSUpdateMail',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/email-update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'passwordUpdate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::SOSPasswordUpdate',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/passwordUpdate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
