<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/compiled')) {
            if (0 === strpos($pathinfo, '/compiled/css/create-analysis')) {
                // _assetic_8d84711
                if ($pathinfo === '/compiled/css/create-analysis.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8d84711',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8d84711',);
                }

                if (0 === strpos($pathinfo, '/compiled/css/create-analysis_')) {
                    // _assetic_8d84711_0
                    if ($pathinfo === '/compiled/css/create-analysis_custom_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8d84711',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8d84711_0',);
                    }

                    if (0 === strpos($pathinfo, '/compiled/css/create-analysis_jquery.')) {
                        // _assetic_8d84711_1
                        if ($pathinfo === '/compiled/css/create-analysis_jquery.steps_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8d84711',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8d84711_1',);
                        }

                        // _assetic_8d84711_2
                        if ($pathinfo === '/compiled/css/create-analysis_jquery.nouislider_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8d84711',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_8d84711_2',);
                        }

                        // _assetic_8d84711_3
                        if ($pathinfo === '/compiled/css/create-analysis_jquery.qtip_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8d84711',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_8d84711_3',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/compiled/js/create-analysis')) {
                // _assetic_e1c071e
                if ($pathinfo === '/compiled/js/create-analysis.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1c071e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e1c071e',);
                }

                if (0 === strpos($pathinfo, '/compiled/js/create-analysis_')) {
                    if (0 === strpos($pathinfo, '/compiled/js/create-analysis_jquery.')) {
                        // _assetic_e1c071e_0
                        if ($pathinfo === '/compiled/js/create-analysis_jquery.steps_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1c071e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e1c071e_0',);
                        }

                        // _assetic_e1c071e_1
                        if ($pathinfo === '/compiled/js/create-analysis_jquery.validate.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1c071e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_e1c071e_1',);
                        }

                        // _assetic_e1c071e_2
                        if ($pathinfo === '/compiled/js/create-analysis_jquery.nouislider.all_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1c071e',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_e1c071e_2',);
                        }

                        // _assetic_e1c071e_3
                        if ($pathinfo === '/compiled/js/create-analysis_jquery.qtip_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1c071e',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_e1c071e_3',);
                        }

                    }

                    // _assetic_e1c071e_4
                    if ($pathinfo === '/compiled/js/create-analysis_icheck_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1c071e',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_e1c071e_4',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/compiled/css/report')) {
                // _assetic_5578896
                if ($pathinfo === '/compiled/css/report.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 5578896,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5578896',);
                }

                if (0 === strpos($pathinfo, '/compiled/css/report_')) {
                    if (0 === strpos($pathinfo, '/compiled/css/report_dataTables.')) {
                        // _assetic_5578896_0
                        if ($pathinfo === '/compiled/css/report_dataTables.bootstrap_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 5578896,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5578896_0',);
                        }

                        // _assetic_5578896_1
                        if ($pathinfo === '/compiled/css/report_dataTables.tableTools_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 5578896,  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_5578896_1',);
                        }

                        // _assetic_5578896_2
                        if ($pathinfo === '/compiled/css/report_dataTables.responsive_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 5578896,  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_5578896_2',);
                        }

                    }

                    // _assetic_5578896_3
                    if ($pathinfo === '/compiled/css/report_jquery.qtip_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 5578896,  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_5578896_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/compiled/js/report')) {
                // _assetic_72eb846
                if ($pathinfo === '/compiled/js/report.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '72eb846',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_72eb846',);
                }

                if (0 === strpos($pathinfo, '/compiled/js/report_')) {
                    // _assetic_72eb846_0
                    if ($pathinfo === '/compiled/js/report_highcharts_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '72eb846',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_72eb846_0',);
                    }

                    // _assetic_72eb846_1
                    if ($pathinfo === '/compiled/js/report_exporting_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '72eb846',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_72eb846_1',);
                    }

                    // _assetic_72eb846_2
                    if ($pathinfo === '/compiled/js/report_jquery.dataTables_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '72eb846',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_72eb846_2',);
                    }

                    if (0 === strpos($pathinfo, '/compiled/js/report_dataTables.')) {
                        // _assetic_72eb846_3
                        if ($pathinfo === '/compiled/js/report_dataTables.bootstrap_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '72eb846',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_72eb846_3',);
                        }

                        // _assetic_72eb846_4
                        if ($pathinfo === '/compiled/js/report_dataTables.tableTools_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '72eb846',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_72eb846_4',);
                        }

                    }

                    // _assetic_72eb846_5
                    if ($pathinfo === '/compiled/js/report_jquery.qtip_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '72eb846',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_72eb846_5',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/compiled/css/ranking')) {
                // _assetic_7593e91
                if ($pathinfo === '/compiled/css/ranking.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7593e91',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7593e91',);
                }

                if (0 === strpos($pathinfo, '/compiled/css/ranking_dataTables.')) {
                    // _assetic_7593e91_0
                    if ($pathinfo === '/compiled/css/ranking_dataTables.responsive_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7593e91',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7593e91_0',);
                    }

                    // _assetic_7593e91_1
                    if ($pathinfo === '/compiled/css/ranking_dataTables.bootstrap_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7593e91',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7593e91_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/compiled/js')) {
                if (0 === strpos($pathinfo, '/compiled/js/ranking')) {
                    // _assetic_ba130b2
                    if ($pathinfo === '/compiled/js/ranking.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba130b2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ba130b2',);
                    }

                    if (0 === strpos($pathinfo, '/compiled/js/ranking_')) {
                        // _assetic_ba130b2_0
                        if ($pathinfo === '/compiled/js/ranking_jquery.dataTables_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba130b2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ba130b2_0',);
                        }

                        // _assetic_ba130b2_1
                        if ($pathinfo === '/compiled/js/ranking_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba130b2',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ba130b2_1',);
                        }

                        // _assetic_ba130b2_2
                        if ($pathinfo === '/compiled/js/ranking_jquery.qtip_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba130b2',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ba130b2_2',);
                        }

                        // _assetic_ba130b2_3
                        if ($pathinfo === '/compiled/js/ranking_dataTables.responsive_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba130b2',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ba130b2_3',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/compiled/js/show-profile')) {
                    // _assetic_7ad4496
                    if ($pathinfo === '/compiled/js/show-profile.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7ad4496',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7ad4496',);
                    }

                    // _assetic_7ad4496_0
                    if ($pathinfo === '/compiled/js/show-profile_jquery.peity.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7ad4496',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7ad4496_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/compiled/css/app-base')) {
                // _assetic_376337a
                if ($pathinfo === '/compiled/css/app-base.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '376337a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_376337a',);
                }

                if (0 === strpos($pathinfo, '/compiled/css/app-base_')) {
                    // _assetic_376337a_0
                    if ($pathinfo === '/compiled/css/app-base_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '376337a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_376337a_0',);
                    }

                    // _assetic_376337a_1
                    if ($pathinfo === '/compiled/css/app-base_jasny-bootstrap.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '376337a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_376337a_1',);
                    }

                    // _assetic_376337a_2
                    if ($pathinfo === '/compiled/css/app-base_font-awesome.min_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '376337a',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_376337a_2',);
                    }

                    // _assetic_376337a_3
                    if ($pathinfo === '/compiled/css/app-base_animate_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '376337a',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_376337a_3',);
                    }

                    // _assetic_376337a_4
                    if ($pathinfo === '/compiled/css/app-base_toastr.min_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '376337a',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_376337a_4',);
                    }

                    // _assetic_376337a_5
                    if ($pathinfo === '/compiled/css/app-base_picedit.min_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '376337a',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_376337a_5',);
                    }

                    // _assetic_376337a_6
                    if ($pathinfo === '/compiled/css/app-base_style_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '376337a',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_376337a_6',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/compiled/js/app-base')) {
                // _assetic_f518eb2
                if ($pathinfo === '/compiled/js/app-base.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f518eb2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f518eb2',);
                }

                if (0 === strpos($pathinfo, '/compiled/js/app-base_')) {
                    // _assetic_f518eb2_0
                    if ($pathinfo === '/compiled/js/app-base_jquery-2.1.3.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f518eb2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f518eb2_0',);
                    }

                    // _assetic_f518eb2_1
                    if ($pathinfo === '/compiled/js/app-base_toastr.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f518eb2',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f518eb2_1',);
                    }

                    // _assetic_f518eb2_2
                    if ($pathinfo === '/compiled/js/app-base_picedit_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f518eb2',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_f518eb2_2',);
                    }

                    // _assetic_f518eb2_3
                    if ($pathinfo === '/compiled/js/app-base_bootstrap.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f518eb2',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_f518eb2_3',);
                    }

                    // _assetic_f518eb2_4
                    if ($pathinfo === '/compiled/js/app-base_fileinput_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f518eb2',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_f518eb2_4',);
                    }

                    if (0 === strpos($pathinfo, '/compiled/js/app-base_jquery.')) {
                        // _assetic_f518eb2_5
                        if ($pathinfo === '/compiled/js/app-base_jquery.metisMenu_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f518eb2',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_f518eb2_5',);
                        }

                        // _assetic_f518eb2_6
                        if ($pathinfo === '/compiled/js/app-base_jquery.slimscroll.min_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f518eb2',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_f518eb2_6',);
                        }

                    }

                    // _assetic_f518eb2_7
                    if ($pathinfo === '/compiled/js/app-base_inspinia_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f518eb2',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_f518eb2_7',);
                    }

                    // _assetic_f518eb2_8
                    if ($pathinfo === '/compiled/js/app-base_pace.min_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f518eb2',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_f518eb2_8',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/ranking')) {
            // ode_ranking_homepage
            if ($pathinfo === '/ranking') {
                return array (  '_controller' => 'ODE\\RankingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ode_ranking_homepage',);
            }

            if (0 === strpos($pathinfo, '/ranking/get')) {
                // ode_ranking_get_data
                if ($pathinfo === '/ranking/getdata') {
                    return array (  '_controller' => 'ODE\\RankingBundle\\Controller\\DefaultController::getTableDataAction',  '_route' => 'ode_ranking_get_data',);
                }

                // ode_ranking_get_top
                if ($pathinfo === '/ranking/gettop') {
                    return array (  '_controller' => 'ODE\\RankingBundle\\Controller\\DefaultController::getTopResultsAction',  '_route' => 'ode_ranking_get_top',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/analysis')) {
            // ode_analysis_homepage
            if ($pathinfo === '/analysis') {
                return array (  '_controller' => 'ODE\\AnalysisBundle\\Controller\\FormFlowController::createAnalysisAction',  '_route' => 'ode_analysis_homepage',);
            }

            if (0 === strpos($pathinfo, '/analysis/r')) {
                // ode_run_analysis
                if ($pathinfo === '/analysis/run') {
                    return array (  '_controller' => 'ODE\\AnalysisBundle\\Controller\\DefaultController::runAnalysisAction',  '_route' => 'ode_run_analysis',);
                }

                // ode_wait_result
                if ($pathinfo === '/analysis/result') {
                    return array (  '_controller' => 'ODE\\AnalysisBundle\\Controller\\DefaultController::waitForAnalysisResultAction',  '_route' => 'ode_wait_result',);
                }

            }

            // ode_check_result
            if ($pathinfo === '/analysis/check') {
                return array (  '_controller' => 'ODE\\AnalysisBundle\\Controller\\DefaultController::checkIfAnalysisIsDoneAction',  '_route' => 'ode_check_result',);
            }

            // ode_get_model_form
            if ($pathinfo === '/analysis/getmodelform') {
                return array (  '_controller' => 'ODE\\AnalysisBundle\\Controller\\FormFlowController::getModelFormAction',  '_route' => 'ode_get_model_form',);
            }

            // ode_report
            if ($pathinfo === '/analysis/report') {
                return array (  '_controller' => 'ODE\\AnalysisBundle\\Controller\\DefaultController::generateReportAction',  '_route' => 'ode_report',);
            }

        }

        if (0 === strpos($pathinfo, '/datasets')) {
            // ode_dataset_homepage
            if (rtrim($pathinfo, '/') === '/datasets') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ode_dataset_homepage');
                }

                return array (  '_controller' => 'ODE\\DatasetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ode_dataset_homepage',);
            }

            // ode_dataset_upload
            if ($pathinfo === '/datasets/upload') {
                return array (  '_controller' => 'ODE\\DatasetBundle\\Controller\\UploadController::uploadAction',  '_route' => 'ode_dataset_upload',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'ODE\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'ODE\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'ODE\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'ODE\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // ode_upload_profile_image
        if ($pathinfo === '/upload-profile-image') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ode_upload_profile_image;
            }

            return array (  '_controller' => 'ODE\\UserBundle\\Controller\\DefaultController::uploadProfilePictureAction',  '_route' => 'ode_upload_profile_image',);
        }
        not_ode_upload_profile_image:

        // get_user_information
        if ($pathinfo === '/profile/get-user-info') {
            return array (  '_controller' => 'ODE\\UserBundle\\Controller\\DefaultController::getUserInfoAction',  '_route' => 'get_user_information',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
