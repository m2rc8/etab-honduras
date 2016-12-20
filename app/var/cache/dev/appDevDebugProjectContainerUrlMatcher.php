<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // _inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_inicio');
            }

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::tableroAction',  '_route' => '_inicio',);
        }

        if (0 === strpos($pathinfo, '/reporter')) {
            // _reporter
            if ($pathinfo === '/reporter') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::reporterAction',  '_route' => '_reporter',);
            }

            if (0 === strpos($pathinfo, '/reporterexcel')) {
                // _reporterexcel
                if (preg_match('#^/reporterexcel/(?P<gestor>[^/,]++),(?P<establecimiento>[^/,]++),(?P<periodo>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not__reporterexcel;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_reporterexcel');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_reporterexcel')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::reporterexcelAction',));
                }
                not__reporterexcel:

                // _reporterexceltres
                if (0 === strpos($pathinfo, '/reporterexceltres') && preg_match('#^/reporterexceltres/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not__reporterexceltres;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_reporterexceltres');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_reporterexceltres')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::reporterexceltresAction',));
                }
                not__reporterexceltres:

            }

        }

        if (0 === strpos($pathinfo, '/admin/clues')) {
            // filtro_inicial
            if ($pathinfo === '/admin/clues/filtro_inicial') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CluesController::filtro_inicial',  '_route' => 'filtro_inicial',);
            }

            // municipio
            if ($pathinfo === '/admin/clues/municipio') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CluesController::municipio',  '_route' => 'municipio',);
            }

            // localidad
            if ($pathinfo === '/admin/clues/localidad') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CluesController::localidad',  '_route' => 'localidad',);
            }

            // clues
            if ($pathinfo === '/admin/clues/clues') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CluesController::clues',  '_route' => 'clues',);
            }

        }

        // tablero_sala
        if (0 === strpos($pathinfo, '/tablero/sala') && preg_match('#^/tablero/sala/(?P<html>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tablero_sala')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::tableroSalaAction',));
        }

        if (0 === strpos($pathinfo, '/indicador')) {
            if (0 === strpos($pathinfo, '/indicador/d')) {
                // indicador_dimensiones
                if (0 === strpos($pathinfo, '/indicador/dimensiones') && preg_match('#^/indicador/dimensiones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indicador_dimensiones')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getDimensiones',));
                }

                if (0 === strpos($pathinfo, '/indicador/datos')) {
                    // indicador_datos
                    if (preg_match('#^/indicador/datos/(?P<id>[^/]++)/(?P<dimension>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'indicador_datos')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getDatos',));
                    }

                    // indicador_datos_filtrar
                    if ($pathinfo === '/indicador/datos/filtrar') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getDatosFiltrados',  '_route' => 'indicador_datos_filtrar',);
                    }

                }

            }

            // indicador_datos_filtrar_public
            if ($pathinfo === '/indicador/filtrar/datos/public') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getDatosFiltradosPublico',  '_route' => 'indicador_datos_filtrar_public',);
            }

            // indicador_datos_mapa
            if ($pathinfo === '/indicador/datos/mapa') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getMapaAction',  '_route' => 'indicador_datos_mapa',);
            }

            // change_locale
            if (preg_match('#^/indicador/(?P<_locale>[^/]++)/change$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_locale')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::changeLocaleAction',));
            }

        }

        // change_clasificacion_uso
        if (0 === strpos($pathinfo, '/tablero/usuario/change') && preg_match('#^/tablero/usuario/change/(?P<codigo_clasificacion>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_clasificacion_uso')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::changeClasificacionUsoAction',));
        }

        if (0 === strpos($pathinfo, '/indicador')) {
            // indicador_favorito
            if ($pathinfo === '/indicador/favorito') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::indicadorFavorito',  '_route' => 'indicador_favorito',);
            }

            // indicador_ver_sql
            if (0 === strpos($pathinfo, '/indicador/datos') && preg_match('#^/indicador/datos/(?P<id>[^/]++)/(?P<dimension>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'indicador_ver_sql')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getSQLAction',));
            }

            // get_indicador_ficha
            if (preg_match('#^/indicador/(?P<id>[^/]++)/ficha$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_indicador_ficha')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getFichaAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sala')) {
            // sala_guardar
            if ($pathinfo === '/sala/guardar') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::guardarSala',  '_route' => 'sala_guardar',);
            }

            // sala_eliminar
            if ($pathinfo === '/sala/eliminar') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::eliminaSala',  '_route' => 'sala_eliminar',);
            }

        }

        // usuario_asignar_sala
        if (0 === strpos($pathinfo, '/usuario') && preg_match('#^/usuario/(?P<id>[^/]++)/sala/(?P<id_sala>[^/]++)/(?P<accion>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_asignar_sala')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::asignarSala',));
        }

        if (0 === strpos($pathinfo, '/indicador')) {
            // indicador_mondrian
            if (preg_match('#^/indicador/(?P<id>[^/]++)/mondrian$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'indicador_mondrian')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::indicadorMondrian',));
            }

            if (0 === strpos($pathinfo, '/indicador/d')) {
                // indicador_dimensiones_public
                if (0 === strpos($pathinfo, '/indicador/dimensiones/public') && preg_match('#^/indicador/dimensiones/public/(?P<id>[^/]++)/(?P<token>[^/]++)/(?P<sala>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indicador_dimensiones_public')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getDimensionesPublic',));
                }

                // indicador_datos_public
                if (0 === strpos($pathinfo, '/indicador/datos/public') && preg_match('#^/indicador/datos/public/(?P<id>[^/]++)/(?P<dimension>[^/]++)/(?P<token>[^/]++)/(?P<sala>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indicador_datos_public')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::getDatosPublic',));
                }

            }

        }

        // indicador_tablero_public
        if ($pathinfo === '/publico') {
            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::publicdashboardAction',  '_route' => 'indicador_tablero_public',);
        }

        // autoComplete_Indicador
        if (rtrim($pathinfo, '/') === '/acIndicador') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'autoComplete_Indicador');
            }

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::acIndicadorAction',  '_route' => 'autoComplete_Indicador',);
        }

        // clasificacionTecnica
        if (0 === strpos($pathinfo, '/clasificacionTecnica') && preg_match('#^/clasificacionTecnica/(?P<uso>[^/]++)(?:/(?P<ficha>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificacionTecnica')), array (  'ficha' => '',  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::clasificacionTecnicaAction',));
        }

        if (0 === strpos($pathinfo, '/rest-service')) {
            if (0 === strpos($pathinfo, '/rest-service/data')) {
                // minsal_indicadores_indicadorrest_getindicador
                if (preg_match('#^/rest\\-service/data/(?P<id>[^/]++)/(?P<dimension>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_minsal_indicadores_indicadorrest_getindicador;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'minsal_indicadores_indicadorrest_getindicador')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getIndicadorAction',));
                }
                not_minsal_indicadores_indicadorrest_getindicador:

                // minsal_indicadores_indicadorrest_getdatosindicador
                if (preg_match('#^/rest\\-service/data/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_minsal_indicadores_indicadorrest_getdatosindicador;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'minsal_indicadores_indicadorrest_getdatosindicador')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getDatosIndicadorAction',));
                }
                not_minsal_indicadores_indicadorrest_getdatosindicador:

            }

            // minsal_indicadores_indicadorrest_getindicadores
            if ($pathinfo === '/rest-service/indicadores') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_minsal_indicadores_indicadorrest_getindicadores;
                }

                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getIndicadoresAction',  '_route' => 'minsal_indicadores_indicadorrest_getindicadores',);
            }
            not_minsal_indicadores_indicadorrest_getindicadores:

        }

        // origen_dato_conexion_probar
        if ($pathinfo === '/conexion/probar') {
            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatoController::probarConexionAction',  '_route' => 'origen_dato_conexion_probar',);
        }

        // origen_dato_conexion_probar_sentencia
        if ($pathinfo === '/sentencia/probar') {
            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatoController::probarSentenciaAction',  '_route' => 'origen_dato_conexion_probar_sentencia',);
        }

        // origen_dato_leer
        if (0 === strpos($pathinfo, '/origen_dato') && preg_match('#^/origen_dato/(?P<id>[^/]++)/leer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'origen_dato_leer')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatoController::leerOrigenAction',));
        }

        // configurar_campo
        if ($pathinfo === '/configurar/campo') {
            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatoController::configurarCampoAction',  '_route' => 'configurar_campo',);
        }

        // origen_dato_get_campos
        if (0 === strpos($pathinfo, '/origen_dato/get_campos') && preg_match('#^/origen_dato/get_campos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'origen_dato_get_campos')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatoController::getCamposAction',));
        }

        // load_data_ajax
        if ($pathinfo === '/admin/origendatos/load_data_ajax') {
            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosLoadController::load_data_ajax',  '_route' => 'load_data_ajax',);
        }

        if (0 === strpos($pathinfo, '/sala')) {
            // sala_acciones_custom_list
            if (preg_match('#^/sala/(?P<id>[^/]++)/acciones/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_acciones_custom_list')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::customListAction',));
            }

            // accion_guardar
            if (preg_match('#^/sala/(?P<id>[^/]++)/accion/guardar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accion_guardar')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::guardarAccion',));
            }

            // sala_get_comentarios
            if (0 === strpos($pathinfo, '/sala/get_comentarios') && preg_match('#^/sala/get_comentarios/(?P<idSala>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sala_get_comentarios');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_get_comentarios')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SocialController::getComentariosSala',));
            }

            // sala_set_comentario
            if (preg_match('#^/sala/(?P<id>[^/]++)/set_comentario$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_set_comentario')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SocialController::setComentarioSala',));
            }

            // sala_get_usuarios
            if (0 === strpos($pathinfo, '/sala/get_usuarios') && preg_match('#^/sala/get_usuarios/(?P<idSala>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sala_get_usuarios');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_get_usuarios')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SocialController::getUsuariosSala',));
            }

            // sala_set_usuario
            if (preg_match('#^/sala/(?P<id>[^/]++)/set_usuario/(?P<id_usuario>[^/]++)/(?P<accion>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_set_usuario')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SocialController::setUsuarioSala',));
            }

        }

        // sala_publico
        if (0 === strpos($pathinfo, '/publico/sala') && preg_match('#^/publico/sala/(?P<sala>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sala_publico')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SocialController::tokenAction',));
        }

        // accion_borrar
        if (0 === strpos($pathinfo, '/sala') && preg_match('#^/sala/(?P<id>[^/]++)/accion/borrar$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accion_borrar')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SocialController::borrarAccion',));
        }

        // boletin_publico
        if (0 === strpos($pathinfo, '/publico/boletin') && preg_match('#^/publico/boletin/(?P<sala>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'boletin_publico')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TokenController::tokenAction',));
        }

        if (0 === strpos($pathinfo, '/rest-service')) {
            if (0 === strpos($pathinfo, '/rest-service/data')) {
                // get_indicador
                if (preg_match('#^/rest\\-service/data/(?P<id>[^/]++)/(?P<dimension>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_indicador;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_indicador')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getIndicadorAction',  '_format' => 'json',));
                }
                not_get_indicador:

                // get_datos_indicador
                if (preg_match('#^/rest\\-service/data/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_datos_indicador;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_datos_indicador')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getDatosIndicadorAction',  '_format' => 'json',));
                }
                not_get_datos_indicador:

            }

            // get_indicadores
            if (0 === strpos($pathinfo, '/rest-service/indicadores') && preg_match('#^/rest\\-service/indicadores(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_indicadores;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_indicadores')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorRESTController::getIndicadoresAction',  '_format' => 'json',));
            }
            not_get_indicadores:

        }

        // _printh
        if (0 === strpos($pathinfo, '/printh') && preg_match('#^/printh/(?P<gestor>[^/,]++),(?P<establecimiento>[^/,]++),(?P<periodo>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_printh');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_printh')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::printhAction',));
        }

        // _reporterexcelh
        if (0 === strpos($pathinfo, '/reporterexcelh') && preg_match('#^/reporterexcelh/(?P<gestor>[^/,]++),(?P<establecimiento>[^/,]++),(?P<periodo>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not__reporterexcelh;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_reporterexcelh');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_reporterexcelh')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::reporterexcelhAction',));
        }
        not__reporterexcelh:

        // _print
        if (0 === strpos($pathinfo, '/print') && preg_match('#^/print/(?P<gestor>[^/,]++),(?P<establecimiento>[^/,]++),(?P<periodo>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_print');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_print')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::printAction',));
        }

        // _reporte
        if (rtrim($pathinfo, '/') === '/reporte') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_reporte');
            }

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::reporteAction',  '_route' => '_reporte',);
        }

        // _matriz
        if (rtrim($pathinfo, '/') === '/matriz') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_matriz');
            }

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::matrizAction',  '_route' => '_matriz',);
        }

        if (0 === strpos($pathinfo, '/fornpficha')) {
            // _fornpficha
            if (preg_match('#^/fornpficha/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not__fornpficha;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_fornpficha');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornpficha')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpfichaAction',));
            }
            not__fornpficha:

            // _fornpfichatres
            if (0 === strpos($pathinfo, '/fornpfichatres') && preg_match('#^/fornpfichatres/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not__fornpfichatres;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_fornpfichatres');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornpfichatres')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpfichatresAction',));
            }
            not__fornpfichatres:

            if (0 === strpos($pathinfo, '/fornpfichas')) {
                // _fornpfichas
                if (rtrim($pathinfo, '/') === '/fornpfichas') {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not__fornpfichas;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_fornpfichas');
                    }

                    return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpfichasAction',  '_format' => 'json',  '_route' => '_fornpfichas',);
                }
                not__fornpfichas:

                // _fornpfichastres
                if (rtrim($pathinfo, '/') === '/fornpfichastres') {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not__fornpfichastres;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_fornpfichastres');
                    }

                    return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpfichastresAction',  '_format' => 'json',  '_route' => '_fornpfichastres',);
                }
                not__fornpfichastres:

            }

        }

        if (0 === strpos($pathinfo, '/matriz')) {
            // _matrizdos
            if (rtrim($pathinfo, '/') === '/matrizdos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_matrizdos');
                }

                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::matrizdosAction',  '_route' => '_matrizdos',);
            }

            // _matriztres
            if (rtrim($pathinfo, '/') === '/matriztres') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_matriztres');
                }

                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::matriztresAction',  '_route' => '_matriztres',);
            }

        }

        // _reporteh
        if (rtrim($pathinfo, '/') === '/reporteh') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_reporteh');
            }

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::reportehAction',  '_route' => '_reporteh',);
        }

        if (0 === strpos($pathinfo, '/crearReporte')) {
            // _crearReporte
            if (preg_match('#^/crearReporte/(?P<gestor>[^/,]++),(?P<estab>[^/,]++),(?P<periodo>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_crearReporte');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_crearReporte')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::crearReporteAction',));
            }

            // _crearReporteG
            if (0 === strpos($pathinfo, '/crearReporteG') && preg_match('#^/crearReporteG/(?P<gestor>[^/,]++),(?P<establecimiento>[^/,]++),(?P<periodo>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_crearReporteG');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_crearReporteG')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::crearReporteGAction',));
            }

            // _crearReporteh
            if (0 === strpos($pathinfo, '/crearReporteh') && preg_match('#^/crearReporteh/(?P<gestor>[^/,]++),(?P<estab>[^/,]++),(?P<periodo>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_crearReporteh');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_crearReporteh')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::crearReportehAction',));
            }

            // _crearReporteGH
            if (0 === strpos($pathinfo, '/crearReporteGH') && preg_match('#^/crearReporteGH/(?P<gestor>[^/,]++),(?P<establecimiento>[^/,]++),(?P<periodo>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_crearReporteGH');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_crearReporteGH')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::crearReporteGHAction',));
            }

        }

        // _forn
        if (rtrim($pathinfo, '/') === '/forn') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_forn');
            }

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornAction',  '_route' => '_forn',);
        }

        // _ue
        if (rtrim($pathinfo, '/') === '/ue') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_ue');
            }

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::ueAction',  '_route' => '_ue',);
        }

        if (0 === strpos($pathinfo, '/forn')) {
            // _fornh
            if (rtrim($pathinfo, '/') === '/fornh') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_fornh');
                }

                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornhAction',  '_route' => '_fornh',);
            }

            if (0 === strpos($pathinfo, '/fornp')) {
                // _fornp
                if (preg_match('#^/fornp/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not__fornp;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_fornp');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornp')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpAction',));
                }
                not__fornp:

                // _fornpm
                if (0 === strpos($pathinfo, '/fornpm') && preg_match('#^/fornpm/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not__fornpm;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_fornpm');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornpm')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpmAction',));
                }
                not__fornpm:

                if (0 === strpos($pathinfo, '/fornpd')) {
                    // _fornpd
                    if (preg_match('#^/fornpd/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                            goto not__fornpd;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', '_fornpd');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornpd')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpdAction',));
                    }
                    not__fornpd:

                    if (0 === strpos($pathinfo, '/fornpdg')) {
                        // _fornpdg
                        if (preg_match('#^/fornpdg/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                                goto not__fornpdg;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', '_fornpdg');
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornpdg')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpdgAction',));
                        }
                        not__fornpdg:

                        // _fornpdgt
                        if (0 === strpos($pathinfo, '/fornpdgt') && preg_match('#^/fornpdgt/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                                goto not__fornpdgt;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', '_fornpdgt');
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornpdgt')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpdgtAction',));
                        }
                        not__fornpdgt:

                    }

                    if (0 === strpos($pathinfo, '/fornpdh')) {
                        // _fornpdh
                        if (preg_match('#^/fornpdh/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                                goto not__fornpdh;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', '_fornpdh');
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornpdh')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpdhAction',));
                        }
                        not__fornpdh:

                        if (0 === strpos($pathinfo, '/fornpdhh')) {
                            // _fornpdhh
                            if (preg_match('#^/fornpdhh/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                                    goto not__fornpdhh;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', '_fornpdhh');
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornpdhh')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpdhhAction',));
                            }
                            not__fornpdhh:

                            // _fornpdhht
                            if (0 === strpos($pathinfo, '/fornpdhht') && preg_match('#^/fornpdhht/(?P<param>[^/]++)/?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                                    goto not__fornpdhht;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', '_fornpdhht');
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornpdhht')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornpdhhtAction',));
                            }
                            not__fornpdhht:

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/fornd')) {
                // _fornd
                if (rtrim($pathinfo, '/') === '/fornd') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_fornd');
                    }

                    return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::forndAction',  '_route' => '_fornd',);
                }

                // _forndh
                if (rtrim($pathinfo, '/') === '/forndh') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_forndh');
                    }

                    return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::forndhAction',  '_route' => '_forndh',);
                }

            }

            // _fornph
            if (0 === strpos($pathinfo, '/fornph') && preg_match('#^/fornph/(?P<paramh>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not__fornph;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_fornph');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_fornph')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornphAction',));
            }
            not__fornph:

            // _forns
            if (rtrim($pathinfo, '/') === '/forns') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not__forns;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_forns');
                }

                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornsAction',  '_format' => 'json',  '_route' => '_forns',);
            }
            not__forns:

        }

        // _guardarEU
        if (rtrim($pathinfo, '/') === '/guardarEU') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not__guardarEU;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_guardarEU');
            }

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::guardarEUAction',  '_format' => 'json',  '_route' => '_guardarEU',);
        }
        not__guardarEU:

        if (0 === strpos($pathinfo, '/b')) {
            // _bEstablecimientoU
            if (0 === strpos($pathinfo, '/bEstablecimientoU') && preg_match('#^/bEstablecimientoU/(?P<us>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not__bEstablecimientoU;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_bEstablecimientoU');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_bEstablecimientoU')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::bEstablecimientoUAction',));
            }
            not__bEstablecimientoU:

            // _bgEstablecimientoU
            if (0 === strpos($pathinfo, '/bgEstablecimientoU') && preg_match('#^/bgEstablecimientoU/(?P<us>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not__bgEstablecimientoU;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_bgEstablecimientoU');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_bgEstablecimientoU')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::bgEstablecimientoUAction',));
            }
            not__bgEstablecimientoU:

            if (0 === strpos($pathinfo, '/buscar')) {
                // _buscarMunicipio
                if (0 === strpos($pathinfo, '/buscarMunicipio') && preg_match('#^/buscarMunicipio/(?P<depto>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not__buscarMunicipio;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_buscarMunicipio');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_buscarMunicipio')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::buscarMunicipioAction',));
                }
                not__buscarMunicipio:

                if (0 === strpos($pathinfo, '/buscarEstablecimiento')) {
                    // _buscarEstablecimiento
                    if (preg_match('#^/buscarEstablecimiento/(?P<muni>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                            goto not__buscarEstablecimiento;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', '_buscarEstablecimiento');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_buscarEstablecimiento')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::buscarEstablecimientoAction',));
                    }
                    not__buscarEstablecimiento:

                    // _buscarEstablecimientoU
                    if (0 === strpos($pathinfo, '/buscarEstablecimientoU') && preg_match('#^/buscarEstablecimientoU/(?P<usuario>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                            goto not__buscarEstablecimientoU;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', '_buscarEstablecimientoU');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_buscarEstablecimientoU')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::buscarEstablecimientoUAction',));
                    }
                    not__buscarEstablecimientoU:

                }

            }

        }

        // _fornsh
        if (rtrim($pathinfo, '/') === '/fornsh') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not__fornsh;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_fornsh');
            }

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::fornshAction',  '_format' => 'json',  '_route' => '_fornsh',);
        }
        not__fornsh:

        // _inicioPublico
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_inicioPublico');
            }

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\TableroController::tableroPublicoAction',  '_route' => '_inicioPublico',);
        }

        // group_show
        if (0 === strpos($pathinfo, '/migroup') && preg_match('#^/migroup/(?P<token>[^/]++)/(?P<valor>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_group_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\IndicadorController::group_reloadAction',));
        }
        not_group_show:

        if (0 === strpos($pathinfo, '/usuarioestablecimiento')) {
            // usuarioestablecimiento
            if (rtrim($pathinfo, '/') === '/usuarioestablecimiento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuarioestablecimiento');
                }

                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\UsuarioEstablecimientoController::indexAction',  '_route' => 'usuarioestablecimiento',);
            }

            // usuarioestablecimiento_show
            if (preg_match('#^/usuarioestablecimiento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioestablecimiento_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\UsuarioEstablecimientoController::showAction',));
            }

            // usuarioestablecimiento_new
            if ($pathinfo === '/usuarioestablecimiento/new') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\UsuarioEstablecimientoController::newAction',  '_route' => 'usuarioestablecimiento_new',);
            }

            // usuarioestablecimiento_create
            if ($pathinfo === '/usuarioestablecimiento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuarioestablecimiento_create;
                }

                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\UsuarioEstablecimientoController::createAction',  '_route' => 'usuarioestablecimiento_create',);
            }
            not_usuarioestablecimiento_create:

            // usuarioestablecimiento_edit
            if (preg_match('#^/usuarioestablecimiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioestablecimiento_edit')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\UsuarioEstablecimientoController::editAction',));
            }

            // usuarioestablecimiento_update
            if (preg_match('#^/usuarioestablecimiento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuarioestablecimiento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioestablecimiento_update')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\UsuarioEstablecimientoController::updateAction',));
            }
            not_usuarioestablecimiento_update:

            // usuarioestablecimiento_delete
            if (preg_match('#^/usuarioestablecimiento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_usuarioestablecimiento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioestablecimiento_delete')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\UsuarioEstablecimientoController::deleteAction',));
            }
            not_usuarioestablecimiento_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/minsal/indicadores')) {
                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/fuentedato')) {
                    // admin_minsal_indicadores_fuentedato_list
                    if ($pathinfo === '/admin/minsal/indicadores/fuentedato/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_list',  '_route' => 'admin_minsal_indicadores_fuentedato_list',);
                    }

                    // admin_minsal_indicadores_fuentedato_create
                    if ($pathinfo === '/admin/minsal/indicadores/fuentedato/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_create',  '_route' => 'admin_minsal_indicadores_fuentedato_create',);
                    }

                    // admin_minsal_indicadores_fuentedato_batch
                    if ($pathinfo === '/admin/minsal/indicadores/fuentedato/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_batch',  '_route' => 'admin_minsal_indicadores_fuentedato_batch',);
                    }

                    // admin_minsal_indicadores_fuentedato_edit
                    if (preg_match('#^/admin/minsal/indicadores/fuentedato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fuentedato_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_edit',));
                    }

                    // admin_minsal_indicadores_fuentedato_delete
                    if (preg_match('#^/admin/minsal/indicadores/fuentedato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fuentedato_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_delete',));
                    }

                    // admin_minsal_indicadores_fuentedato_show
                    if (preg_match('#^/admin/minsal/indicadores/fuentedato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fuentedato_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_show',));
                    }

                    // admin_minsal_indicadores_fuentedato_export
                    if ($pathinfo === '/admin/minsal/indicadores/fuentedato/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.fuente_dato',  '_sonata_name' => 'admin_minsal_indicadores_fuentedato_export',  '_route' => 'admin_minsal_indicadores_fuentedato_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/responsable')) {
                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/responsabledato')) {
                        // admin_minsal_indicadores_responsabledato_list
                        if ($pathinfo === '/admin/minsal/indicadores/responsabledato/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_list',  '_route' => 'admin_minsal_indicadores_responsabledato_list',);
                        }

                        // admin_minsal_indicadores_responsabledato_create
                        if ($pathinfo === '/admin/minsal/indicadores/responsabledato/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_create',  '_route' => 'admin_minsal_indicadores_responsabledato_create',);
                        }

                        // admin_minsal_indicadores_responsabledato_batch
                        if ($pathinfo === '/admin/minsal/indicadores/responsabledato/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_batch',  '_route' => 'admin_minsal_indicadores_responsabledato_batch',);
                        }

                        // admin_minsal_indicadores_responsabledato_edit
                        if (preg_match('#^/admin/minsal/indicadores/responsabledato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsabledato_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_edit',));
                        }

                        // admin_minsal_indicadores_responsabledato_delete
                        if (preg_match('#^/admin/minsal/indicadores/responsabledato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsabledato_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_delete',));
                        }

                        // admin_minsal_indicadores_responsabledato_show
                        if (preg_match('#^/admin/minsal/indicadores/responsabledato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsabledato_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_show',));
                        }

                        // admin_minsal_indicadores_responsabledato_export
                        if ($pathinfo === '/admin/minsal/indicadores/responsabledato/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.responsable_dato',  '_sonata_name' => 'admin_minsal_indicadores_responsabledato_export',  '_route' => 'admin_minsal_indicadores_responsabledato_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/responsableindicador')) {
                        // admin_minsal_indicadores_responsableindicador_list
                        if ($pathinfo === '/admin/minsal/indicadores/responsableindicador/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_list',  '_route' => 'admin_minsal_indicadores_responsableindicador_list',);
                        }

                        // admin_minsal_indicadores_responsableindicador_create
                        if ($pathinfo === '/admin/minsal/indicadores/responsableindicador/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_create',  '_route' => 'admin_minsal_indicadores_responsableindicador_create',);
                        }

                        // admin_minsal_indicadores_responsableindicador_batch
                        if ($pathinfo === '/admin/minsal/indicadores/responsableindicador/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_batch',  '_route' => 'admin_minsal_indicadores_responsableindicador_batch',);
                        }

                        // admin_minsal_indicadores_responsableindicador_edit
                        if (preg_match('#^/admin/minsal/indicadores/responsableindicador/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsableindicador_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_edit',));
                        }

                        // admin_minsal_indicadores_responsableindicador_delete
                        if (preg_match('#^/admin/minsal/indicadores/responsableindicador/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsableindicador_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_delete',));
                        }

                        // admin_minsal_indicadores_responsableindicador_show
                        if (preg_match('#^/admin/minsal/indicadores/responsableindicador/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_responsableindicador_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_show',));
                        }

                        // admin_minsal_indicadores_responsableindicador_export
                        if ($pathinfo === '/admin/minsal/indicadores/responsableindicador/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.responsable_indicador',  '_sonata_name' => 'admin_minsal_indicadores_responsableindicador_export',  '_route' => 'admin_minsal_indicadores_responsableindicador_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/clasificacion')) {
                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/clasificaciontecnica')) {
                        // admin_minsal_indicadores_clasificaciontecnica_list
                        if ($pathinfo === '/admin/minsal/indicadores/clasificaciontecnica/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_list',  '_route' => 'admin_minsal_indicadores_clasificaciontecnica_list',);
                        }

                        // admin_minsal_indicadores_clasificaciontecnica_create
                        if ($pathinfo === '/admin/minsal/indicadores/clasificaciontecnica/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_create',  '_route' => 'admin_minsal_indicadores_clasificaciontecnica_create',);
                        }

                        // admin_minsal_indicadores_clasificaciontecnica_batch
                        if ($pathinfo === '/admin/minsal/indicadores/clasificaciontecnica/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_batch',  '_route' => 'admin_minsal_indicadores_clasificaciontecnica_batch',);
                        }

                        // admin_minsal_indicadores_clasificaciontecnica_edit
                        if (preg_match('#^/admin/minsal/indicadores/clasificaciontecnica/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificaciontecnica_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_edit',));
                        }

                        // admin_minsal_indicadores_clasificaciontecnica_delete
                        if (preg_match('#^/admin/minsal/indicadores/clasificaciontecnica/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificaciontecnica_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_delete',));
                        }

                        // admin_minsal_indicadores_clasificaciontecnica_show
                        if (preg_match('#^/admin/minsal/indicadores/clasificaciontecnica/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificaciontecnica_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_show',));
                        }

                        // admin_minsal_indicadores_clasificaciontecnica_export
                        if ($pathinfo === '/admin/minsal/indicadores/clasificaciontecnica/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.clasificacion_tecnica',  '_sonata_name' => 'admin_minsal_indicadores_clasificaciontecnica_export',  '_route' => 'admin_minsal_indicadores_clasificaciontecnica_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/clasificacionprivacidad')) {
                        // admin_minsal_indicadores_clasificacionprivacidad_list
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionprivacidad/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_list',  '_route' => 'admin_minsal_indicadores_clasificacionprivacidad_list',);
                        }

                        // admin_minsal_indicadores_clasificacionprivacidad_create
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionprivacidad/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_create',  '_route' => 'admin_minsal_indicadores_clasificacionprivacidad_create',);
                        }

                        // admin_minsal_indicadores_clasificacionprivacidad_batch
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionprivacidad/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_batch',  '_route' => 'admin_minsal_indicadores_clasificacionprivacidad_batch',);
                        }

                        // admin_minsal_indicadores_clasificacionprivacidad_edit
                        if (preg_match('#^/admin/minsal/indicadores/clasificacionprivacidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionprivacidad_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_edit',));
                        }

                        // admin_minsal_indicadores_clasificacionprivacidad_delete
                        if (preg_match('#^/admin/minsal/indicadores/clasificacionprivacidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionprivacidad_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_delete',));
                        }

                        // admin_minsal_indicadores_clasificacionprivacidad_show
                        if (preg_match('#^/admin/minsal/indicadores/clasificacionprivacidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionprivacidad_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_show',));
                        }

                        // admin_minsal_indicadores_clasificacionprivacidad_export
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionprivacidad/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.clasificacion_privacidad',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionprivacidad_export',  '_route' => 'admin_minsal_indicadores_clasificacionprivacidad_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/clasificacionnivel')) {
                        // admin_minsal_indicadores_clasificacionnivel_list
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionnivel/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_list',  '_route' => 'admin_minsal_indicadores_clasificacionnivel_list',);
                        }

                        // admin_minsal_indicadores_clasificacionnivel_create
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionnivel/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_create',  '_route' => 'admin_minsal_indicadores_clasificacionnivel_create',);
                        }

                        // admin_minsal_indicadores_clasificacionnivel_batch
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionnivel/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_batch',  '_route' => 'admin_minsal_indicadores_clasificacionnivel_batch',);
                        }

                        // admin_minsal_indicadores_clasificacionnivel_edit
                        if (preg_match('#^/admin/minsal/indicadores/clasificacionnivel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionnivel_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_edit',));
                        }

                        // admin_minsal_indicadores_clasificacionnivel_delete
                        if (preg_match('#^/admin/minsal/indicadores/clasificacionnivel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionnivel_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_delete',));
                        }

                        // admin_minsal_indicadores_clasificacionnivel_show
                        if (preg_match('#^/admin/minsal/indicadores/clasificacionnivel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionnivel_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_show',));
                        }

                        // admin_minsal_indicadores_clasificacionnivel_export
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionnivel/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.clasificacion_nivel',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionnivel_export',  '_route' => 'admin_minsal_indicadores_clasificacionnivel_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/indicadores/clasificacionuso')) {
                        // admin_minsal_indicadores_clasificacionuso_list
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionuso/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_list',  '_route' => 'admin_minsal_indicadores_clasificacionuso_list',);
                        }

                        // admin_minsal_indicadores_clasificacionuso_create
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionuso/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_create',  '_route' => 'admin_minsal_indicadores_clasificacionuso_create',);
                        }

                        // admin_minsal_indicadores_clasificacionuso_batch
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionuso/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_batch',  '_route' => 'admin_minsal_indicadores_clasificacionuso_batch',);
                        }

                        // admin_minsal_indicadores_clasificacionuso_edit
                        if (preg_match('#^/admin/minsal/indicadores/clasificacionuso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionuso_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_edit',));
                        }

                        // admin_minsal_indicadores_clasificacionuso_delete
                        if (preg_match('#^/admin/minsal/indicadores/clasificacionuso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionuso_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_delete',));
                        }

                        // admin_minsal_indicadores_clasificacionuso_show
                        if (preg_match('#^/admin/minsal/indicadores/clasificacionuso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_clasificacionuso_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_show',));
                        }

                        // admin_minsal_indicadores_clasificacionuso_export
                        if ($pathinfo === '/admin/minsal/indicadores/clasificacionuso/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.clasificacion_uso',  '_sonata_name' => 'admin_minsal_indicadores_clasificacionuso_export',  '_route' => 'admin_minsal_indicadores_clasificacionuso_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/significadocampo')) {
                    // admin_minsal_indicadores_significadocampo_list
                    if ($pathinfo === '/admin/minsal/indicadores/significadocampo/list') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::listAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_list',  '_route' => 'admin_minsal_indicadores_significadocampo_list',);
                    }

                    // admin_minsal_indicadores_significadocampo_create
                    if ($pathinfo === '/admin/minsal/indicadores/significadocampo/create') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::createAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_create',  '_route' => 'admin_minsal_indicadores_significadocampo_create',);
                    }

                    // admin_minsal_indicadores_significadocampo_batch
                    if ($pathinfo === '/admin/minsal/indicadores/significadocampo/batch') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_batch',  '_route' => 'admin_minsal_indicadores_significadocampo_batch',);
                    }

                    // admin_minsal_indicadores_significadocampo_edit
                    if (preg_match('#^/admin/minsal/indicadores/significadocampo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_significadocampo_edit')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::editAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_edit',));
                    }

                    // admin_minsal_indicadores_significadocampo_delete
                    if (preg_match('#^/admin/minsal/indicadores/significadocampo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_significadocampo_delete')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_delete',));
                    }

                    // admin_minsal_indicadores_significadocampo_show
                    if (preg_match('#^/admin/minsal/indicadores/significadocampo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_significadocampo_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::showAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_show',));
                    }

                    // admin_minsal_indicadores_significadocampo_export
                    if ($pathinfo === '/admin/minsal/indicadores/significadocampo/export') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SignificadoCampoAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.significado_campo',  '_sonata_name' => 'admin_minsal_indicadores_significadocampo_export',  '_route' => 'admin_minsal_indicadores_significadocampo_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/alerta')) {
                    // admin_minsal_indicadores_alerta_list
                    if ($pathinfo === '/admin/minsal/indicadores/alerta/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_list',  '_route' => 'admin_minsal_indicadores_alerta_list',);
                    }

                    // admin_minsal_indicadores_alerta_create
                    if ($pathinfo === '/admin/minsal/indicadores/alerta/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_create',  '_route' => 'admin_minsal_indicadores_alerta_create',);
                    }

                    // admin_minsal_indicadores_alerta_batch
                    if ($pathinfo === '/admin/minsal/indicadores/alerta/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_batch',  '_route' => 'admin_minsal_indicadores_alerta_batch',);
                    }

                    // admin_minsal_indicadores_alerta_edit
                    if (preg_match('#^/admin/minsal/indicadores/alerta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_alerta_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_edit',));
                    }

                    // admin_minsal_indicadores_alerta_delete
                    if (preg_match('#^/admin/minsal/indicadores/alerta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_alerta_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_delete',));
                    }

                    // admin_minsal_indicadores_alerta_show
                    if (preg_match('#^/admin/minsal/indicadores/alerta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_alerta_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_show',));
                    }

                    // admin_minsal_indicadores_alerta_export
                    if ($pathinfo === '/admin/minsal/indicadores/alerta/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.colores_alertas',  '_sonata_name' => 'admin_minsal_indicadores_alerta_export',  '_route' => 'admin_minsal_indicadores_alerta_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/conexion')) {
                    // admin_minsal_indicadores_conexion_list
                    if ($pathinfo === '/admin/minsal/indicadores/conexion/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_list',  '_route' => 'admin_minsal_indicadores_conexion_list',);
                    }

                    // admin_minsal_indicadores_conexion_create
                    if ($pathinfo === '/admin/minsal/indicadores/conexion/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_create',  '_route' => 'admin_minsal_indicadores_conexion_create',);
                    }

                    // admin_minsal_indicadores_conexion_batch
                    if ($pathinfo === '/admin/minsal/indicadores/conexion/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_batch',  '_route' => 'admin_minsal_indicadores_conexion_batch',);
                    }

                    // admin_minsal_indicadores_conexion_edit
                    if (preg_match('#^/admin/minsal/indicadores/conexion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_conexion_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_edit',));
                    }

                    // admin_minsal_indicadores_conexion_delete
                    if (preg_match('#^/admin/minsal/indicadores/conexion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_conexion_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_delete',));
                    }

                    // admin_minsal_indicadores_conexion_show
                    if (preg_match('#^/admin/minsal/indicadores/conexion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_conexion_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_show',));
                    }

                    // admin_minsal_indicadores_conexion_export
                    if ($pathinfo === '/admin/minsal/indicadores/conexion/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_indicadores_conexion_export',  '_route' => 'admin_minsal_indicadores_conexion_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/origendatos')) {
                    // admin_minsal_indicadores_origendatos_list
                    if ($pathinfo === '/admin/minsal/indicadores/origendatos/list') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::listAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_list',  '_route' => 'admin_minsal_indicadores_origendatos_list',);
                    }

                    // admin_minsal_indicadores_origendatos_create
                    if ($pathinfo === '/admin/minsal/indicadores/origendatos/create') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::createAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_create',  '_route' => 'admin_minsal_indicadores_origendatos_create',);
                    }

                    // admin_minsal_indicadores_origendatos_batch
                    if ($pathinfo === '/admin/minsal/indicadores/origendatos/batch') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_batch',  '_route' => 'admin_minsal_indicadores_origendatos_batch',);
                    }

                    // admin_minsal_indicadores_origendatos_edit
                    if (preg_match('#^/admin/minsal/indicadores/origendatos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_origendatos_edit')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::editAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_edit',));
                    }

                    // admin_minsal_indicadores_origendatos_delete
                    if (preg_match('#^/admin/minsal/indicadores/origendatos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_origendatos_delete')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_delete',));
                    }

                    // admin_minsal_indicadores_origendatos_show
                    if (preg_match('#^/admin/minsal/indicadores/origendatos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_origendatos_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::showAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_show',));
                    }

                    // admin_minsal_indicadores_origendatos_export
                    if ($pathinfo === '/admin/minsal/indicadores/origendatos/export') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_export',  '_route' => 'admin_minsal_indicadores_origendatos_export',);
                    }

                    // admin_minsal_indicadores_origendatos_merge_save
                    if ($pathinfo === '/admin/minsal/indicadores/origendatos/merge/save') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::mergeSaveAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_merge_save',  '_route' => 'admin_minsal_indicadores_origendatos_merge_save',);
                    }

                    // admin_minsal_indicadores_origendatos_load_data
                    if ($pathinfo === '/admin/minsal/indicadores/origendatos/load_data') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\OrigenDatosAdminController::loadDataAction',  '_sonata_admin' => 'sonata.admin.origen_dato',  '_sonata_name' => 'admin_minsal_indicadores_origendatos_load_data',  '_route' => 'admin_minsal_indicadores_origendatos_load_data',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/variabledato')) {
                    // admin_minsal_indicadores_variabledato_list
                    if ($pathinfo === '/admin/minsal/indicadores/variabledato/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_list',  '_route' => 'admin_minsal_indicadores_variabledato_list',);
                    }

                    // admin_minsal_indicadores_variabledato_create
                    if ($pathinfo === '/admin/minsal/indicadores/variabledato/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_create',  '_route' => 'admin_minsal_indicadores_variabledato_create',);
                    }

                    // admin_minsal_indicadores_variabledato_batch
                    if ($pathinfo === '/admin/minsal/indicadores/variabledato/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_batch',  '_route' => 'admin_minsal_indicadores_variabledato_batch',);
                    }

                    // admin_minsal_indicadores_variabledato_edit
                    if (preg_match('#^/admin/minsal/indicadores/variabledato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_variabledato_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_edit',));
                    }

                    // admin_minsal_indicadores_variabledato_delete
                    if (preg_match('#^/admin/minsal/indicadores/variabledato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_variabledato_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_delete',));
                    }

                    // admin_minsal_indicadores_variabledato_show
                    if (preg_match('#^/admin/minsal/indicadores/variabledato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_variabledato_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_show',));
                    }

                    // admin_minsal_indicadores_variabledato_export
                    if ($pathinfo === '/admin/minsal/indicadores/variabledato/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.variable',  '_sonata_name' => 'admin_minsal_indicadores_variabledato_export',  '_route' => 'admin_minsal_indicadores_variabledato_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/fichatecnica')) {
                    // admin_minsal_indicadores_fichatecnica_list
                    if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/list') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::listAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_list',  '_route' => 'admin_minsal_indicadores_fichatecnica_list',);
                    }

                    // admin_minsal_indicadores_fichatecnica_create
                    if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/create') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::createAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_create',  '_route' => 'admin_minsal_indicadores_fichatecnica_create',);
                    }

                    // admin_minsal_indicadores_fichatecnica_batch
                    if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/batch') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_batch',  '_route' => 'admin_minsal_indicadores_fichatecnica_batch',);
                    }

                    // admin_minsal_indicadores_fichatecnica_edit
                    if (preg_match('#^/admin/minsal/indicadores/fichatecnica/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fichatecnica_edit')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::editAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_edit',));
                    }

                    // admin_minsal_indicadores_fichatecnica_delete
                    if (preg_match('#^/admin/minsal/indicadores/fichatecnica/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fichatecnica_delete')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_delete',));
                    }

                    // admin_minsal_indicadores_fichatecnica_show
                    if (preg_match('#^/admin/minsal/indicadores/fichatecnica/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fichatecnica_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::showAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_show',));
                    }

                    // admin_minsal_indicadores_fichatecnica_export
                    if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/export') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_export',  '_route' => 'admin_minsal_indicadores_fichatecnica_export',);
                    }

                    // admin_minsal_indicadores_fichatecnica_tablero
                    if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/tablero') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::tableroAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_tablero',  '_route' => 'admin_minsal_indicadores_fichatecnica_tablero',);
                    }

                    // admin_minsal_indicadores_fichatecnica_cubos
                    if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/cubos') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::cubosAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_cubos',  '_route' => 'admin_minsal_indicadores_fichatecnica_cubos',);
                    }

                    // admin_minsal_indicadores_fichatecnica_pivotTable
                    if ($pathinfo === '/admin/minsal/indicadores/fichatecnica/pivotTable') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::pivotTableAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_pivotTable',  '_route' => 'admin_minsal_indicadores_fichatecnica_pivotTable',);
                    }

                    // admin_minsal_indicadores_fichatecnica_reporte
                    if (preg_match('#^/admin/minsal/indicadores/fichatecnica/(?P<id>[^/]++)/reporte$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_fichatecnica_reporte')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\FichaTecnicaAdminController::reporteAction',  '_sonata_admin' => 'sonata.admin.ficha',  '_sonata_name' => 'admin_minsal_indicadores_fichatecnica_reporte',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/indicadoralertas')) {
                    // admin_minsal_indicadores_indicadoralertas_list
                    if ($pathinfo === '/admin/minsal/indicadores/indicadoralertas/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_list',  '_route' => 'admin_minsal_indicadores_indicadoralertas_list',);
                    }

                    // admin_minsal_indicadores_indicadoralertas_create
                    if ($pathinfo === '/admin/minsal/indicadores/indicadoralertas/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_create',  '_route' => 'admin_minsal_indicadores_indicadoralertas_create',);
                    }

                    // admin_minsal_indicadores_indicadoralertas_batch
                    if ($pathinfo === '/admin/minsal/indicadores/indicadoralertas/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_batch',  '_route' => 'admin_minsal_indicadores_indicadoralertas_batch',);
                    }

                    // admin_minsal_indicadores_indicadoralertas_edit
                    if (preg_match('#^/admin/minsal/indicadores/indicadoralertas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_indicadoralertas_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_edit',));
                    }

                    // admin_minsal_indicadores_indicadoralertas_delete
                    if (preg_match('#^/admin/minsal/indicadores/indicadoralertas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_indicadoralertas_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_delete',));
                    }

                    // admin_minsal_indicadores_indicadoralertas_show
                    if (preg_match('#^/admin/minsal/indicadores/indicadoralertas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_indicadoralertas_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_show',));
                    }

                    // admin_minsal_indicadores_indicadoralertas_export
                    if ($pathinfo === '/admin/minsal/indicadores/indicadoralertas/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.indicador_alertas',  '_sonata_name' => 'admin_minsal_indicadores_indicadoralertas_export',  '_route' => 'admin_minsal_indicadores_indicadoralertas_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/boletin')) {
                    // admin_minsal_indicadores_boletin_list
                    if ($pathinfo === '/admin/minsal/indicadores/boletin/list') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CorreoController::listAction',  '_sonata_admin' => 'sonata.admin.boletin',  '_sonata_name' => 'admin_minsal_indicadores_boletin_list',  '_route' => 'admin_minsal_indicadores_boletin_list',);
                    }

                    // admin_minsal_indicadores_boletin_create
                    if ($pathinfo === '/admin/minsal/indicadores/boletin/create') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CorreoController::createAction',  '_sonata_admin' => 'sonata.admin.boletin',  '_sonata_name' => 'admin_minsal_indicadores_boletin_create',  '_route' => 'admin_minsal_indicadores_boletin_create',);
                    }

                    // admin_minsal_indicadores_boletin_batch
                    if ($pathinfo === '/admin/minsal/indicadores/boletin/batch') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CorreoController::batchAction',  '_sonata_admin' => 'sonata.admin.boletin',  '_sonata_name' => 'admin_minsal_indicadores_boletin_batch',  '_route' => 'admin_minsal_indicadores_boletin_batch',);
                    }

                    // admin_minsal_indicadores_boletin_edit
                    if (preg_match('#^/admin/minsal/indicadores/boletin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_boletin_edit')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CorreoController::editAction',  '_sonata_admin' => 'sonata.admin.boletin',  '_sonata_name' => 'admin_minsal_indicadores_boletin_edit',));
                    }

                    // admin_minsal_indicadores_boletin_delete
                    if (preg_match('#^/admin/minsal/indicadores/boletin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_boletin_delete')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CorreoController::deleteAction',  '_sonata_admin' => 'sonata.admin.boletin',  '_sonata_name' => 'admin_minsal_indicadores_boletin_delete',));
                    }

                    // admin_minsal_indicadores_boletin_show
                    if (preg_match('#^/admin/minsal/indicadores/boletin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_boletin_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CorreoController::showAction',  '_sonata_admin' => 'sonata.admin.boletin',  '_sonata_name' => 'admin_minsal_indicadores_boletin_show',));
                    }

                    // admin_minsal_indicadores_boletin_export
                    if ($pathinfo === '/admin/minsal/indicadores/boletin/export') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\CorreoController::exportAction',  '_sonata_admin' => 'sonata.admin.boletin',  '_sonata_name' => 'admin_minsal_indicadores_boletin_export',  '_route' => 'admin_minsal_indicadores_boletin_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/salaacciones')) {
                    // admin_minsal_indicadores_salaacciones_list
                    if ($pathinfo === '/admin/minsal/indicadores/salaacciones/list') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::listAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_list',  '_route' => 'admin_minsal_indicadores_salaacciones_list',);
                    }

                    // admin_minsal_indicadores_salaacciones_create
                    if ($pathinfo === '/admin/minsal/indicadores/salaacciones/create') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::createAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_create',  '_route' => 'admin_minsal_indicadores_salaacciones_create',);
                    }

                    // admin_minsal_indicadores_salaacciones_batch
                    if ($pathinfo === '/admin/minsal/indicadores/salaacciones/batch') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_batch',  '_route' => 'admin_minsal_indicadores_salaacciones_batch',);
                    }

                    // admin_minsal_indicadores_salaacciones_edit
                    if (preg_match('#^/admin/minsal/indicadores/salaacciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_salaacciones_edit')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::editAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_edit',));
                    }

                    // admin_minsal_indicadores_salaacciones_delete
                    if (preg_match('#^/admin/minsal/indicadores/salaacciones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_salaacciones_delete')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_delete',));
                    }

                    // admin_minsal_indicadores_salaacciones_show
                    if (preg_match('#^/admin/minsal/indicadores/salaacciones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_salaacciones_show')), array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::showAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_show',));
                    }

                    // admin_minsal_indicadores_salaacciones_export
                    if ($pathinfo === '/admin/minsal/indicadores/salaacciones/export') {
                        return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\SalaAccionesAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.sala_acciones',  '_sonata_name' => 'admin_minsal_indicadores_salaacciones_export',  '_route' => 'admin_minsal_indicadores_salaacciones_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/indicadores/user')) {
                    // admin_minsal_indicadores_user_list
                    if ($pathinfo === '/admin/minsal/indicadores/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_list',  '_route' => 'admin_minsal_indicadores_user_list',);
                    }

                    // admin_minsal_indicadores_user_create
                    if ($pathinfo === '/admin/minsal/indicadores/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_create',  '_route' => 'admin_minsal_indicadores_user_create',);
                    }

                    // admin_minsal_indicadores_user_batch
                    if ($pathinfo === '/admin/minsal/indicadores/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_batch',  '_route' => 'admin_minsal_indicadores_user_batch',);
                    }

                    // admin_minsal_indicadores_user_edit
                    if (preg_match('#^/admin/minsal/indicadores/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_edit',));
                    }

                    // admin_minsal_indicadores_user_delete
                    if (preg_match('#^/admin/minsal/indicadores/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_delete',));
                    }

                    // admin_minsal_indicadores_user_show
                    if (preg_match('#^/admin/minsal/indicadores/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_indicadores_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_show',));
                    }

                    // admin_minsal_indicadores_user_export
                    if ($pathinfo === '/admin/minsal/indicadores/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_minsal_indicadores_user_export',  '_route' => 'admin_minsal_indicadores_user_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                // admin_sonata_user_group_list
                if ($pathinfo === '/admin/sonata/user/group/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                }

                // admin_sonata_user_group_create
                if ($pathinfo === '/admin/sonata/user/group/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                }

                // admin_sonata_user_group_batch
                if ($pathinfo === '/admin/sonata/user/group/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                }

                // admin_sonata_user_group_edit
                if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                }

                // admin_sonata_user_group_delete
                if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                }

                // admin_sonata_user_group_show
                if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                }

                // admin_sonata_user_group_export
                if ($pathinfo === '/admin/sonata/user/group/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/sonata/cache')) {
            // sonata_cache_esi
            if (0 === strpos($pathinfo, '/sonata/cache/esi') && preg_match('#^/sonata/cache/esi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_esi')), array (  '_controller' => 'sonata.cache.esi:cacheAction',));
            }

            // sonata_cache_ssi
            if (0 === strpos($pathinfo, '/sonata/cache/ssi') && preg_match('#^/sonata/cache/ssi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_ssi')), array (  '_controller' => 'sonata.cache.ssi:cacheAction',));
            }

            if (0 === strpos($pathinfo, '/sonata/cache/js-')) {
                // sonata_cache_js_async
                if ($pathinfo === '/sonata/cache/js-async') {
                    return array (  '_controller' => 'sonata.cache.js_async:cacheAction',  '_route' => 'sonata_cache_js_async',);
                }

                // sonata_cache_js_sync
                if ($pathinfo === '/sonata/cache/js-sync') {
                    return array (  '_controller' => 'sonata.cache.js_sync:cacheAction',  '_route' => 'sonata_cache_js_sync',);
                }

            }

            // sonata_cache_apc
            if (0 === strpos($pathinfo, '/sonata/cache/apc') && preg_match('#^/sonata/cache/apc/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_apc')), array (  '_controller' => 'sonata.cache.apc:cacheAction',));
            }

            // sonata_cache_symfony
            if (0 === strpos($pathinfo, '/sonata/cache/symfony') && preg_match('#^/sonata/cache/symfony/(?P<token>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_symfony')), array (  '_controller' => 'sonata.cache.symfony:cacheAction',));
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

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

            return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupname>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupname>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupname>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        if (0 === strpos($pathinfo, '/admin/log')) {
            if (0 === strpos($pathinfo, '/admin/login')) {
                // sonata_user_admin_security_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if ($pathinfo === '/admin/login_check') {
                    return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                }

            }

            // sonata_user_admin_security_logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'MINSAL\\IndicadoresBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
