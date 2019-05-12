<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/Calendar')) {
            // oc_Calendar_index
            if (preg_match('#^/Calendar(?:/(?P<page>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Calendar_index']), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\CalendarController::index',));
            }

            // oc_Calendar_view
            if (0 === strpos($pathinfo, '/Calendar/view') && preg_match('#^/Calendar/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Calendar_view']), array (  '_controller' => 'AppBundle\\Controller\\CalendarController::view',));
            }

            // oc_Calendar_add
            if ('/Calendar/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CalendarController::add',  '_route' => 'oc_Calendar_add',);
            }

            // oc_Calendar_edit
            if (0 === strpos($pathinfo, '/Calendar/edit') && preg_match('#^/Calendar/edit/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Calendar_edit']), array (  '_controller' => 'AppBundle\\Controller\\CalendarController::edit',));
            }

            // oc_Calendar_delete
            if (0 === strpos($pathinfo, '/Calendar/delete') && preg_match('#^/Calendar/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Calendar_delete']), array (  '_controller' => 'AppBundle\\Controller\\CalendarController::delete',));
            }

        }

        // SOSDiderotpage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::SOSDiderotAction',  '_route' => 'SOSDiderotpage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_SOSDiderotpage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'SOSDiderotpage'));
            }

            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_SOSDiderotpage;
            }

            return $ret;
        }
        not_SOSDiderotpage:

        // search_
        if ('/' === $pathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::SOSPSearch',  '_route' => 'search_',);
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_search_;
            }

            return $ret;
        }
        not_search_:

        if (0 === strpos($pathinfo, '/Rdv')) {
            // oc_Rdv_index
            if (preg_match('#^/Rdv(?:/(?P<page>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Rdv_index']), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\RdvController::index',));
            }

            // oc_Rdv_view
            if (0 === strpos($pathinfo, '/Rdv/view') && preg_match('#^/Rdv/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Rdv_view']), array (  '_controller' => 'AppBundle\\Controller\\RdvController::view',));
            }

            // oc_Rdv_add
            if ('/Rdv/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\RdvController::add',  '_route' => 'oc_Rdv_add',);
            }

            // oc_Rdv_edit
            if (0 === strpos($pathinfo, '/Rdv/edit') && preg_match('#^/Rdv/edit/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Rdv_edit']), array (  '_controller' => 'AppBundle\\Controller\\RdvController::edit',));
            }

            // oc_Rdv_delete
            if (0 === strpos($pathinfo, '/Rdv/delete') && preg_match('#^/Rdv/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Rdv_delete']), array (  '_controller' => 'AppBundle\\Controller\\RdvController::delete',));
            }

        }

        elseif (0 === strpos($pathinfo, '/staff')) {
            // oc_staff_view
            if (0 === strpos($pathinfo, '/staff/view') && preg_match('#^/staff/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_staff_view']), array (  '_controller' => 'AppBundle\\Controller\\StaffController::view',));
            }

            // oc_staff_edit
            if (0 === strpos($pathinfo, '/staff/edit') && preg_match('#^/staff/edit/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_staff_edit']), array (  '_controller' => 'AppBundle\\Controller\\StaffController::edit',));
            }

            // email-updatee
            if ('/staff/email-updatee' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StaffController::SOSUpdateMail',  '_route' => 'email-updatee',);
            }

            // oc_staff_delete
            if (0 === strpos($pathinfo, '/staff/delete') && preg_match('#^/staff/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_staff_delete']), array (  '_controller' => 'AppBundle\\Controller\\StaffController::delete',));
            }

            // loginPro
            if ('/staff/loginPro' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StaffController::SOSLoginPro',  '_route' => 'loginPro',);
            }

            // logouts
            if ('/staff/logouts' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StaffController::SOSLogout',  '_route' => 'logouts',);
            }

            // add
            if ('/staff/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StaffController::add',  '_route' => 'add',);
            }

            // accueilStaf
            if ('/staff/accueilStaf' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StaffController::SOSPAccueil',  '_route' => 'accueilStaf',);
            }

            if (0 === strpos($pathinfo, '/staff/p')) {
                // profile-updatee
                if ('/staff/profile-updatee' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StaffController::SOSProfileUpdate',  '_route' => 'profile-updatee',);
                }

                // profiles
                if ('/staff/profiles' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StaffController::SOSProfile',  '_route' => 'profiles',);
                }

                // passwordUpdatee
                if ('/staff/passwordUpdatee' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StaffController::SOSPasswordUpdate',  '_route' => 'passwordUpdatee',);
                }

            }

            // notificationPro
            if ('/staff/notificationPro' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StaffController::SOSNotification',  '_route' => 'notificationPro',);
            }

            // rendez_vousPro
            if ('/staff/rendez_vousPro' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StaffController::SOSRendezVous',  '_route' => 'rendez_vousPro',);
            }

            // settingsPro
            if ('/staff/settingsPro' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StaffController::SOSSettings',  '_route' => 'settingsPro',);
            }

        }

        elseif (0 === strpos($pathinfo, '/student')) {
            // oc_Student_index
            if (preg_match('#^/student(?:/(?P<page>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Student_index']), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\StudentController::index',));
            }

            // oc_Student_view
            if (0 === strpos($pathinfo, '/student/view') && preg_match('#^/student/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Student_view']), array (  '_controller' => 'AppBundle\\Controller\\StudentController::view',));
            }

            // oc_Student_add
            if ('/student/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::add',  '_route' => 'oc_Student_add',);
            }

            if (0 === strpos($pathinfo, '/student/accueil')) {
                // accueil
                if ('/student/accueil' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSPAccueil',  '_route' => 'accueil',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_accueil;
                    }

                    return $ret;
                }
                not_accueil:

                // search
                if ('/student/accueil' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSPSearch',  '_route' => 'search',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_search;
                    }

                    return $ret;
                }
                not_search:

            }

            // oc_Student_edit
            if (0 === strpos($pathinfo, '/student/edit') && preg_match('#^/student/edit/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Student_edit']), array (  '_controller' => 'AppBundle\\Controller\\StudentController::edit',));
            }

            // email-update
            if ('/student/email-update' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSUpdateMail',  '_route' => 'email-update',);
            }

            // oc_Student_delete
            if (0 === strpos($pathinfo, '/student/delete') && preg_match('#^/student/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'oc_Student_delete']), array (  '_controller' => 'AppBundle\\Controller\\StudentController::delete',));
            }

            // login
            if ('/student/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSLogin',  '_route' => 'login',);
            }

            // logout
            if ('/student/logout' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSLogout',  '_route' => 'logout',);
            }

            // inscription
            if ('/student/inscription' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSInscription',  '_route' => 'inscription',);
            }

            if (0 === strpos($pathinfo, '/student/profile')) {
                // profile
                if ('/student/profile' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSProfile',  '_route' => 'profile',);
                }

                // profile-update
                if ('/student/profile-update' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSProfileUpdate',  '_route' => 'profile-update',);
                }

            }

            // passwordUpdate
            if ('/student/passwordUpdate' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSPasswordUpdate',  '_route' => 'passwordUpdate',);
            }

            // rendez_vous
            if ('/student/rendez_vous' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSRendezVous',  '_route' => 'rendez_vous',);
            }

            // settings
            if ('/student/settings' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSSettings',  '_route' => 'settings',);
            }

            // notification
            if ('/student/notification' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::SOSNotification',  '_route' => 'notification',);
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
