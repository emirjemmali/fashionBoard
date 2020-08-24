<?php

namespace ContainerN2v3hVI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcApp_KernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters = [];
    private $targetDirs = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'doctrine' => 'getDoctrineService',
            'event_dispatcher' => 'getEventDispatcherService',
            'form.factory' => 'getForm_FactoryService',
            'http_kernel' => 'getHttpKernelService',
            'hwi_oauth.resource_ownermap.secured_area' => 'getHwiOauth_ResourceOwnermap_SecuredAreaService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.extension.craue_arrayHelper' => 'getTwig_Extension_CraueArrayHelperService',
            'twig.extension.craue_changeLanguage' => 'getTwig_Extension_CraueChangeLanguageService',
            'twig.extension.craue_decorateEmptyValue' => 'getTwig_Extension_CraueDecorateEmptyValueService',
            'twig.extension.craue_form' => 'getTwig_Extension_CraueFormService',
            'twig.extension.craue_formatDateTime' => 'getTwig_Extension_CraueFormatDateTimeService',
            'twig.extension.craue_formatNumber' => 'getTwig_Extension_CraueFormatNumberService',
            'twig.extension.craue_stringHelper' => 'getTwig_Extension_CraueStringHelperService',
        ];
        $this->fileMap = [
            'App\\Controller\\DefaultController' => 'getDefaultControllerService.php',
            'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController' => 'getConnectControllerService.php',
            'HWI\\Bundle\\OAuthBundle\\Controller\\LoginController' => 'getLoginControllerService.php',
            'HWI\\Bundle\\OAuthBundle\\Controller\\RedirectToServiceController' => 'getRedirectToServiceControllerService.php',
            'JMS\\Payment\\CoreBundle\\Cryptography\\DefusePhpEncryptionService' => 'getDefusePhpEncryptionServiceService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService.php',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService.php',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService.php',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService.php',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService.php',
            'fos_user.user_manager' => 'getFosUser_UserManagerService.php',
            'httplug.client' => 'getHttplug_ClientService.php',
            'httplug.message_factory' => 'getHttplug_MessageFactoryService.php',
            'httplug.psr17_request_factory' => 'getHttplug_Psr17RequestFactoryService.php',
            'httplug.psr17_response_factory' => 'getHttplug_Psr17ResponseFactoryService.php',
            'httplug.psr17_server_request_factory' => 'getHttplug_Psr17ServerRequestFactoryService.php',
            'httplug.psr17_stream_factory' => 'getHttplug_Psr17StreamFactoryService.php',
            'httplug.psr17_uploaded_file_factory' => 'getHttplug_Psr17UploadedFileFactoryService.php',
            'httplug.psr17_uri_factory' => 'getHttplug_Psr17UriFactoryService.php',
            'httplug.psr18_client' => 'getHttplug_Psr18ClientService.php',
            'httplug.stream_factory' => 'getHttplug_StreamFactoryService.php',
            'httplug.uri_factory' => 'getHttplug_UriFactoryService.php',
            'hwi_oauth.resource_owner.keycloak' => 'getHwiOauth_ResourceOwner_KeycloakService.php',
            'hwi_oauth.user_checker' => 'getHwiOauth_UserCheckerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'validator' => 'getValidatorService.php',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'hwi_oauth.http.client' => 'httplug.client',
            'hwi_oauth.http.message_factory' => 'httplug.message_factory',
            'mailer' => 'swiftmailer.mailer.default',
            'payment.encryption' => 'JMS\\Payment\\CoreBundle\\Cryptography\\DefusePhpEncryptionService',
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['httplug.strategy'] ?? $this->getHttplug_StrategyService());
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['httplug.strategy'] ?? $this->getHttplug_StrategyService());
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'onKernelException'], -2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('fos_user.security.implicit_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->load('getFosUser_Security_InteractiveLoginListenerService.php'));
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->load('getFosUser_Security_InteractiveLoginListenerService.php'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.registration.confirmed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.create.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.delete.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.profile.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.initialize', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetInitialize'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.request', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetRequest'], 0);

        return $instance;
    }

    /*
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->load('getSecurity_UserValueResolverService.php'));
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 7)));
    }

    /*
     * Gets the public 'hwi_oauth.resource_ownermap.secured_area' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap
     */
    protected function getHwiOauth_ResourceOwnermap_SecuredAreaService()
    {
        $this->services['hwi_oauth.resource_ownermap.secured_area'] = $instance = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap(($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), $this->parameters['hwi_oauth.resource_owners'], $this->parameters['hwi_oauth.resource_ownermap.configured.secured_area']);

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => NULL, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));

        return $instance;
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.af.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.af.yml')], 'ar' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.ar.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ar.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ar.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ar.yml')], 'az' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.az.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.az.xlf')], 'be' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.be.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.be.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.be.xlf')], 'bg' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.bg.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.bg.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bg.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bg.yml')], 'ca' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.ca.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ca.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ca.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ca.yml')], 'cs' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.cs.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.cs.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.cs.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.cs.yml')], 'cy' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.da.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.da.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.da.yml')], 'de' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.de.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.de.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.de.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.de.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.de.yml')], 'el' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.el.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.el.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.el.yml')], 'en' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.en.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.en.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.en.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.en.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.en.yml')], 'es' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.es.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.es.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.es.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.es.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.es.yml')], 'et' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.et.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.et.yml')], 'eu' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.eu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.eu.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.eu.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.eu.yml')], 'fa' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.fa.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.fa.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.fa.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fa.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fa.yml')], 'fi' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.fi.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fi.yml')], 'fr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.fr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.fr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.fr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fr.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fr.yml')], 'gl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.gl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.gl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.gl.yml')], 'he' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.he.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.he.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.he.yml')], 'hr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.hr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.hr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.hr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.hr.yml')], 'hu' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.hu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.hu.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.hu.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.hu.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.hu.yml')], 'hy' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.id.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.id.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.id.yml')], 'it' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.it.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.it.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.it.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.it.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.it.yml')], 'ja' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.ja.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ja.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ja.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ja.yml')], 'lb' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.lb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.lb.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lb.yml')], 'lt' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.lt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.lt.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.lt.yml')], 'lv' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.lv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.lv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.lv.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.lv.yml')], 'mn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.nb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.nb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.nb.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.nb.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.nb.yml')], 'nl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.nl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.nl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.nl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.nl.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.nl.yml')], 'nn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.nn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.nn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.nn.xlf')], 'no' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.no.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.no.xlf')], 'pl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.pl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.pl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.pl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pl.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pl.yml')], 'pt' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.pt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pt.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pt.yml')], 'pt_BR' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pt_BR.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pt_BR.yml')], 'ro' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.ro.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ro.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ro.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ro.yml')], 'ru' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.ru.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.ru.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.ru.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ru.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ru.yml')], 'sk' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.sk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.sk.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sk.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sk.yml')], 'sl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.sl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.sl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sl.yml')], 'sq' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sr_Latn.yml')], 'sv' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.sv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.sv.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sv.yml')], 'th' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.th.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.th.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.th.yml')], 'tl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.tl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.tl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.tr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.tr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.tr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.tr.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.tr.yml')], 'uk' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.uk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.uk.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.uk.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.uk.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.uk.yml')], 'vi' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.vi.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.vi.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.vi.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.vi.yml')], 'zh_CN' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.zh_CN.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.zh_CN.yml')], 'zh_TW' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_TW.xlf')], 'pt_PT' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_PT.xlf')], 'zh' => [0 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.zh.yml')], 'bn' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bn.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bn.yml')], 'bn_BD' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bn_BD.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bn_BD.yml')], 'eo' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.eo.yml')], 'ky' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ky.yml')]], 'scanned_directories' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations'), 5 => ($this->targetDirs[3].'/translations'), 6 => ($this->targetDirs[3].'\\vendor\\php-http\\httplug-bundle\\src/Resources/translations'), 7 => ($this->targetDirs[3].'\\src/Resources/HttplugBundle/translations'), 8 => ($this->targetDirs[3].'\\src/Resources/HWIOAuthBundle/translations'), 9 => ($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/translations'), 10 => ($this->targetDirs[3].'\\src/Resources/FrameworkBundle/translations'), 11 => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/translations'), 12 => ($this->targetDirs[3].'\\src/Resources/DoctrineBundle/translations'), 13 => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-migrations-bundle/Resources/translations'), 14 => ($this->targetDirs[3].'\\src/Resources/DoctrineMigrationsBundle/translations'), 15 => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\src/Resources/translations'), 16 => ($this->targetDirs[3].'\\src/Resources/SensioFrameworkExtraBundle/translations'), 17 => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/translations'), 18 => ($this->targetDirs[3].'\\src/Resources/SwiftmailerBundle/translations'), 19 => ($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/translations'), 20 => ($this->targetDirs[3].'\\src/Resources/TwigBundle/translations'), 21 => ($this->targetDirs[3].'\\vendor\\twig\\extra-bundle\\src/Resources/translations'), 22 => ($this->targetDirs[3].'\\src/Resources/TwigExtraBundle/translations'), 23 => ($this->targetDirs[3].'\\vendor\\craue\\twigextensions-bundle/Resources/translations'), 24 => ($this->targetDirs[3].'\\src/Resources/CraueTwigExtensionsBundle/translations'), 25 => ($this->targetDirs[3].'\\vendor\\jms\\payment-core-bundle\\JMS\\Payment\\CoreBundle/Resources/translations'), 26 => ($this->targetDirs[3].'\\src/Resources/JMSPaymentCoreBundle/translations'), 27 => ($this->targetDirs[3].'\\vendor\\jms\\payment-paypal-bundle\\JMS\\Payment\\PaypalBundle/Resources/translations'), 28 => ($this->targetDirs[3].'\\src/Resources/JMSPaymentPaypalBundle/translations'), 29 => ($this->targetDirs[3].'\\vendor\\symfony\\security-bundle/Resources/translations'), 30 => ($this->targetDirs[3].'\\src/Resources/SecurityBundle/translations'), 31 => ($this->targetDirs[3].'\\src/Resources/FOSUserBundle/translations'), 32 => ($this->targetDirs[3].'\\src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\security-core/Resources/translations'), 3 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations'), 5 => 'translations', 6 => ($this->targetDirs[3].'\\vendor\\php-http\\httplug-bundle\\src/Resources/translations'), 7 => ($this->targetDirs[3].'\\src/Resources/HttplugBundle/translations'), 8 => ($this->targetDirs[3].'\\src/Resources/HWIOAuthBundle/translations'), 9 => ($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/translations'), 10 => ($this->targetDirs[3].'\\src/Resources/FrameworkBundle/translations'), 11 => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/translations'), 12 => ($this->targetDirs[3].'\\src/Resources/DoctrineBundle/translations'), 13 => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-migrations-bundle/Resources/translations'), 14 => ($this->targetDirs[3].'\\src/Resources/DoctrineMigrationsBundle/translations'), 15 => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\src/Resources/translations'), 16 => ($this->targetDirs[3].'\\src/Resources/SensioFrameworkExtraBundle/translations'), 17 => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/translations'), 18 => ($this->targetDirs[3].'\\src/Resources/SwiftmailerBundle/translations'), 19 => ($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/translations'), 20 => ($this->targetDirs[3].'\\src/Resources/TwigBundle/translations'), 21 => ($this->targetDirs[3].'\\vendor\\twig\\extra-bundle\\src/Resources/translations'), 22 => ($this->targetDirs[3].'\\src/Resources/TwigExtraBundle/translations'), 23 => ($this->targetDirs[3].'\\vendor\\craue\\twigextensions-bundle/Resources/translations'), 24 => ($this->targetDirs[3].'\\src/Resources/CraueTwigExtensionsBundle/translations'), 25 => ($this->targetDirs[3].'\\vendor\\jms\\payment-core-bundle\\JMS\\Payment\\CoreBundle/Resources/translations'), 26 => ($this->targetDirs[3].'\\src/Resources/JMSPaymentCoreBundle/translations'), 27 => ($this->targetDirs[3].'\\vendor\\jms\\payment-paypal-bundle\\JMS\\Payment\\PaypalBundle/Resources/translations'), 28 => ($this->targetDirs[3].'\\src/Resources/JMSPaymentPaypalBundle/translations'), 29 => ($this->targetDirs[3].'\\vendor\\symfony\\security-bundle/Resources/translations'), 30 => ($this->targetDirs[3].'\\src/Resources/SecurityBundle/translations'), 31 => ($this->targetDirs[3].'\\src/Resources/FOSUserBundle/translations'), 32 => ($this->targetDirs[3].'\\src/Resources/translations')]]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->load('getTemplating_LocatorService.php')), ($this->privates['templating.name_parser'] ?? $this->load('getTemplating_NameParserService.php')), $this->targetDirs[3]);
        $a->addPath(($this->targetDirs[3].'\\vendor\\php-http\\httplug-bundle\\src/Resources/views'), 'Httplug');
        $a->addPath(($this->targetDirs[3].'\\vendor\\php-http\\httplug-bundle\\src/Resources/views'), '!Httplug');
        $a->addPath(($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/views'), 'HWIOAuth');
        $a->addPath(($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/views'), '!HWIOAuth');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[3].'\\vendor\\craue\\twigextensions-bundle/Resources/views'), 'CraueTwigExtensions');
        $a->addPath(($this->targetDirs[3].'\\vendor\\craue\\twigextensions-bundle/Resources/views'), '!CraueTwigExtensions');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\security-bundle/Resources/views'), 'Security');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\security-bundle/Resources/views'), '!Security');
        $a->addPath(($this->targetDirs[3].'/templates/bundles/FOSUserBundle'), 'FOSUser');
        $a->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), 'FOSUser');
        $a->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), '!FOSUser');
        $a->addPath(($this->targetDirs[3].'/templates'));
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => false, 'strict_variables' => false, 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8']);

        $b = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $c = new \Symfony\Bridge\Twig\AppVariable();
        $c->setEnvironment('prod');
        $c->setDebug(false);
        if ($this->has('security.token_storage')) {
            $c->setTokenStorage(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
        }
        if ($this->has('request_stack')) {
            $c->setRequestStack($b);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), $this->targetDirs[3], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($b, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension(($this->privates['hwi_oauth.templating.helper.oauth'] ?? $this->getHwiOauth_Templating_Helper_OauthService())));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Twig\Extra\Intl\IntlExtension());
        $instance->addExtension(($this->services['twig.extension.craue_arrayHelper'] ?? $this->getTwig_Extension_CraueArrayHelperService()));
        $instance->addExtension(($this->services['twig.extension.craue_changeLanguage'] ?? $this->getTwig_Extension_CraueChangeLanguageService()));
        $instance->addExtension(($this->services['twig.extension.craue_decorateEmptyValue'] ?? $this->getTwig_Extension_CraueDecorateEmptyValueService()));
        $instance->addExtension(($this->services['twig.extension.craue_formatDateTime'] ?? $this->getTwig_Extension_CraueFormatDateTimeService()));
        $instance->addExtension(($this->services['twig.extension.craue_formatNumber'] ?? $this->getTwig_Extension_CraueFormatNumberService()));
        $instance->addExtension(($this->services['twig.extension.craue_form'] ?? $this->getTwig_Extension_CraueFormService()));
        $instance->addExtension(($this->services['twig.extension.craue_stringHelper'] ?? $this->getTwig_Extension_CraueStringHelperService()));
        $instance->addGlobal('app', $c);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'twig.extension.craue_arrayHelper' shared service.
     *
     * @return \Craue\TwigExtensionsBundle\Twig\Extension\ArrayHelperExtension
     */
    protected function getTwig_Extension_CraueArrayHelperService()
    {
        $this->services['twig.extension.craue_arrayHelper'] = $instance = new \Craue\TwigExtensionsBundle\Twig\Extension\ArrayHelperExtension();

        if ($this->has('translator')) {
            $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
        }
        $instance->setAliases('', '', '', '');

        return $instance;
    }

    /*
     * Gets the public 'twig.extension.craue_changeLanguage' shared service.
     *
     * @return \Craue\TwigExtensionsBundle\Twig\Extension\ChangeLanguageExtension
     */
    protected function getTwig_Extension_CraueChangeLanguageService()
    {
        $this->services['twig.extension.craue_changeLanguage'] = $instance = new \Craue\TwigExtensionsBundle\Twig\Extension\ChangeLanguageExtension();

        $instance->setAvailableLocales([]);
        $instance->setLocale(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        $instance->setShowForeignLanguageNames(true);
        $instance->setShowFirstUppercase(false);
        $instance->setAliases('', '');

        return $instance;
    }

    /*
     * Gets the public 'twig.extension.craue_decorateEmptyValue' shared service.
     *
     * @return \Craue\TwigExtensionsBundle\Twig\Extension\DecorateEmptyValueExtension
     */
    protected function getTwig_Extension_CraueDecorateEmptyValueService()
    {
        $this->services['twig.extension.craue_decorateEmptyValue'] = $instance = new \Craue\TwigExtensionsBundle\Twig\Extension\DecorateEmptyValueExtension();

        $instance->setPlaceholder('&mdash;');
        $instance->setAlias('');

        return $instance;
    }

    /*
     * Gets the public 'twig.extension.craue_form' shared service.
     *
     * @return \Craue\TwigExtensionsBundle\Twig\Extension\FormExtension
     */
    protected function getTwig_Extension_CraueFormService()
    {
        $this->services['twig.extension.craue_form'] = $instance = new \Craue\TwigExtensionsBundle\Twig\Extension\FormExtension();

        if ($this->has('form.factory')) {
            $instance->setFormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()));
        }
        $instance->setAliases('');

        return $instance;
    }

    /*
     * Gets the public 'twig.extension.craue_formatDateTime' shared service.
     *
     * @return \Craue\TwigExtensionsBundle\Twig\Extension\FormatDateTimeExtension
     */
    protected function getTwig_Extension_CraueFormatDateTimeService()
    {
        $this->services['twig.extension.craue_formatDateTime'] = $instance = new \Craue\TwigExtensionsBundle\Twig\Extension\FormatDateTimeExtension();

        $instance->setDateTimeTypes('medium', 'medium');
        $instance->setTimeZone('');
        $instance->setLocale(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        $instance->setAliases('', '', '');

        return $instance;
    }

    /*
     * Gets the public 'twig.extension.craue_formatNumber' shared service.
     *
     * @return \Craue\TwigExtensionsBundle\Twig\Extension\FormatNumberExtension
     */
    protected function getTwig_Extension_CraueFormatNumberService()
    {
        $this->services['twig.extension.craue_formatNumber'] = $instance = new \Craue\TwigExtensionsBundle\Twig\Extension\FormatNumberExtension();

        $instance->setLocale(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        $instance->setCurrency('');
        $instance->setAliases('', '', '');

        return $instance;
    }

    /*
     * Gets the public 'twig.extension.craue_stringHelper' shared service.
     *
     * @return \Craue\TwigExtensionsBundle\Twig\Extension\StringHelperExtension
     */
    protected function getTwig_Extension_CraueStringHelperService()
    {
        $this->services['twig.extension.craue_stringHelper'] = $instance = new \Craue\TwigExtensionsBundle\Twig\Extension\StringHelperExtension();

        $instance->setAliases('');

        return $instance;
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false, 'UTF-8');
    }

    /*
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => ['privates', 'fos_user.change_password.form.type', 'getFosUser_ChangePassword_Form_TypeService.php', true],
            'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => ['privates', 'fos_user.profile.form.type', 'getFosUser_Profile_Form_TypeService.php', true],
            'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => ['privates', 'fos_user.registration.form.type', 'getFosUser_Registration_Form_TypeService.php', true],
            'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => ['privates', 'fos_user.resetting.form.type', 'getFosUser_Resetting_Form_TypeService.php', true],
            'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => ['privates', 'fos_user.username_form_type', 'getFosUser_UsernameFormTypeService.php', true],
            'JMS\\Payment\\CoreBundle\\Form\\ChoosePaymentMethodType' => ['privates', 'payment.form.choose_payment_method_type', 'getPayment_Form_ChoosePaymentMethodTypeService.php', true],
            'JMS\\Payment\\PaypalBundle\\Form\\ExpressCheckoutType' => ['privates', 'payment.form.paypal_express_checkout_type', 'getPayment_Form_PaypalExpressCheckoutTypeService.php', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService.php', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService.php', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService.php', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService.php', true],
        ], [
            'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => '?',
            'JMS\\Payment\\CoreBundle\\Form\\ChoosePaymentMethodType' => '?',
            'JMS\\Payment\\PaypalBundle\\Form\\ExpressCheckoutType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php'));
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
        }, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'httplug.strategy' shared service.
     *
     * @return \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy
     */
    protected function getHttplug_StrategyService()
    {
        return $this->privates['httplug.strategy'] = new \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy(\Http\Discovery\HttpClientDiscovery::find(), NULL);
    }

    /*
     * Gets the private 'hwi_oauth.security.oauth_utils' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\OAuthUtils
     */
    protected function getHwiOauth_Security_OauthUtilsService()
    {
        $this->privates['hwi_oauth.security.oauth_utils'] = $instance = new \HWI\Bundle\OAuthBundle\Security\OAuthUtils(($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), false, 'IS_AUTHENTICATED_REMEMBERED');

        $instance->addResourceOwnerMap(($this->services['hwi_oauth.resource_ownermap.secured_area'] ?? $this->getHwiOauth_ResourceOwnermap_SecuredAreaService()));

        return $instance;
    }

    /*
     * Gets the private 'hwi_oauth.templating.helper.oauth' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper
     */
    protected function getHwiOauth_Templating_Helper_OauthService()
    {
        return $this->privates['hwi_oauth.templating.helper.oauth'] = new \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper(($this->privates['hwi_oauth.security.oauth_utils'] ?? $this->getHwiOauth_Security_OauthUtilsService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), $this->targetDirs[3], false);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['security.access.role_hierarchy_voter'] ?? $this->load('getSecurity_Access_RoleHierarchyVoterService.php'));
        }, 2), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->load('getSecurity_Authentication_Provider_Dao_MainService.php'));
            yield 1 => ($this->privates['hwi_oauth.authentication.provider.oauth.secured_area'] ?? $this->load('getHwiOauth_Authentication_Provider_Oauth_SecuredAreaService.php'));
            yield 2 => ($this->privates['security.authentication.provider.anonymous.secured_area'] ?? ($this->privates['security.authentication.provider.anonymous.secured_area'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 3), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService.php', true],
            'security.firewall.map.context.secured_area' => ['privates', 'security.firewall.map.context.secured_area', 'getSecurity_Firewall_Map_Context_SecuredAreaService.php', true],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
            'security.firewall.map.context.secured_area' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
            yield 'security.firewall.map.context.secured_area' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 3)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));

        $instance->registerListener('secured_area', '/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), NULL), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), NULL, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, true],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService.php', true],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService.php', true],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'doctrine.orm.proxy_dir' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'twig.default_path' => false,
    ];
    private $dynamicParameters = [];

    /*
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'\\src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'\\log'); break;
            case 'kernel.bundles_metadata': $value = [
                'HttplugBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\php-http\\httplug-bundle\\src'),
                    'namespace' => 'Http\\HttplugBundle',
                ],
                'HWIOAuthBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle'),
                    'namespace' => 'HWI\\Bundle\\OAuthBundle',
                ],
                'FrameworkBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'DoctrineBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'TwigBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\twig\\extra-bundle\\src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'CraueTwigExtensionsBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\craue\\twigextensions-bundle'),
                    'namespace' => 'Craue\\TwigExtensionsBundle',
                ],
                'JMSPaymentCoreBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\jms\\payment-core-bundle\\JMS\\Payment\\CoreBundle'),
                    'namespace' => 'JMS\\Payment\\CoreBundle',
                ],
                'JMSPaymentPaypalBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\jms\\payment-paypal-bundle\\JMS\\Payment\\PaypalBundle'),
                    'namespace' => 'JMS\\Payment\\PaypalBundle',
                ],
                'SecurityBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'FOSUserBundle' => [
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ],
            ]; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'src',
            'kernel.bundles' => [
                'HttplugBundle' => 'Http\\HttplugBundle\\HttplugBundle',
                'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'CraueTwigExtensionsBundle' => 'Craue\\TwigExtensionsBundle\\CraueTwigExtensionsBundle',
                'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle',
                'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelProdContainer',
            'container.dumper.inline_class_loader' => false,
            'container.dumper.inline_factories' => true,
            'hwi_oauth.resource_owner.oauth1.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth1ResourceOwner',
            'hwi_oauth.resource_owner.oauth2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner',
            'hwi_oauth.resource_owner.amazon.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AmazonResourceOwner',
            'hwi_oauth.resource_owner.asana.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AsanaResourceOwner',
            'hwi_oauth.resource_owner.auth0.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Auth0ResourceOwner',
            'hwi_oauth.resource_owner.azure.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AzureResourceOwner',
            'hwi_oauth.resource_owner.bitbucket.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitbucketResourceOwner',
            'hwi_oauth.resource_owner.bitbucket2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Bitbucket2ResourceOwner',
            'hwi_oauth.resource_owner.bitly.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitlyResourceOwner',
            'hwi_oauth.resource_owner.box.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BoxResourceOwner',
            'hwi_oauth.resource_owner.bufferapp.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BufferAppResourceOwner',
            'hwi_oauth.resource_owner.clever.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\CleverResourceOwner',
            'hwi_oauth.resource_owner.dailymotion.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DailymotionResourceOwner',
            'hwi_oauth.resource_owner.deviantart.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeviantartResourceOwner',
            'hwi_oauth.resource_owner.deezer.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeezerResourceOwner',
            'hwi_oauth.resource_owner.discogs.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DiscogsResourceOwner',
            'hwi_oauth.resource_owner.disqus.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DisqusResourceOwner',
            'hwi_oauth.resource_owner.dropbox.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DropboxResourceOwner',
            'hwi_oauth.resource_owner.eve_online.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EveOnlineResourceOwner',
            'hwi_oauth.resource_owner.eventbrite.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EventbriteResourceOwner',
            'hwi_oauth.resource_owner.facebook.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FacebookResourceOwner',
            'hwi_oauth.resource_owner.fiware.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FiwareResourceOwner',
            'hwi_oauth.resource_owner.flickr.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FlickrResourceOwner',
            'hwi_oauth.resource_owner.foursquare.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FoursquareResourceOwner',
            'hwi_oauth.resource_owner.genius.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GeniusResourceOwner',
            'hwi_oauth.resource_owner.github.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitHubResourceOwner',
            'hwi_oauth.resource_owner.gitlab.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitLabResourceOwner',
            'hwi_oauth.resource_owner.google.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GoogleResourceOwner',
            'hwi_oauth.resource_owner.youtube.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YoutubeResourceOwner',
            'hwi_oauth.resource_owner.hubic.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\HubicResourceOwner',
            'hwi_oauth.resource_owner.instagram.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\InstagramResourceOwner',
            'hwi_oauth.resource_owner.jawbone.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JawboneResourceOwner',
            'hwi_oauth.resource_owner.jira.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JiraResourceOwner',
            'hwi_oauth.resource_owner.linkedin.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\LinkedinResourceOwner',
            'hwi_oauth.resource_owner.mailru.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\MailRuResourceOwner',
            'hwi_oauth.resource_owner.office365.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Office365ResourceOwner',
            'hwi_oauth.resource_owner.paypal.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\PaypalResourceOwner',
            'hwi_oauth.resource_owner.qq.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\QQResourceOwner',
            'hwi_oauth.resource_owner.reddit.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RedditResourceOwner',
            'hwi_oauth.resource_owner.runkeeper.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RunKeeperResourceOwner',
            'hwi_oauth.resource_owner.salesforce.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SalesforceResourceOwner',
            'hwi_oauth.resource_owner.sensio_connect.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SensioConnectResourceOwner',
            'hwi_oauth.resource_owner.sina_weibo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SinaWeiboResourceOwner',
            'hwi_oauth.resource_owner.slack.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SlackResourceOwner',
            'hwi_oauth.resource_owner.spotify.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SpotifyResourceOwner',
            'hwi_oauth.resource_owner.soundcloud.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SoundcloudResourceOwner',
            'hwi_oauth.resource_owner.stack_exchange.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StackExchangeResourceOwner',
            'hwi_oauth.resource_owner.stereomood.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StereomoodResourceOwner',
            'hwi_oauth.resource_owner.strava.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StravaResourceOwner',
            'hwi_oauth.resource_owner.toshl.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ToshlResourceOwner',
            'hwi_oauth.resource_owner.trakt.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TraktResourceOwner',
            'hwi_oauth.resource_owner.trello.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TrelloResourceOwner',
            'hwi_oauth.resource_owner.twitch.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitchResourceOwner',
            'hwi_oauth.resource_owner.twitter.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitterResourceOwner',
            'hwi_oauth.resource_owner.vkontakte.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\VkontakteResourceOwner',
            'hwi_oauth.resource_owner.windows_live.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WindowsLiveResourceOwner',
            'hwi_oauth.resource_owner.wordpress.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WordpressResourceOwner',
            'hwi_oauth.resource_owner.wunderlist.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WunderlistResourceOwner',
            'hwi_oauth.resource_owner.xing.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\XingResourceOwner',
            'hwi_oauth.resource_owner.yahoo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YahooResourceOwner',
            'hwi_oauth.resource_owner.yandex.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YandexResourceOwner',
            'hwi_oauth.resource_owner.odnoklassniki.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\OdnoklassnikiResourceOwner',
            'hwi_oauth.resource_owner.37signals.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ThirtySevenSignalsResourceOwner',
            'hwi_oauth.resource_owner.itembase.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ItembaseResourceOwner',
            'hwi_oauth.firewall_names' => [
                0 => 'secured_area',
            ],
            'hwi_oauth.target_path_parameter' => NULL,
            'hwi_oauth.target_path_domains_whitelist' => [

            ],
            'hwi_oauth.use_referer' => false,
            'hwi_oauth.failed_use_referer' => false,
            'hwi_oauth.failed_auth_path' => 'hwi_oauth_connect',
            'hwi_oauth.grant_rule' => 'IS_AUTHENTICATED_REMEMBERED',
            'hwi_oauth.resource_owners' => [
                'keycloak' => 'keycloak',
            ],
            'hwi_oauth.fosub_enabled' => false,
            'hwi_oauth.connect' => false,
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
                1 => 'php',
            ],
            'templating.helper.form.resources' => [
                0 => 'FrameworkBundle:Form',
            ],
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelProdContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [
                'extended_payment_data' => [
                    'class' => 'JMS\\Payment\\CoreBundle\\Entity\\ExtendedDataType',
                ],
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine.migrations.preferred_em' => NULL,
            'doctrine.migrations.preferred_connection' => NULL,
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'craue_twig_extensions.arrayHelper.class' => 'Craue\\TwigExtensionsBundle\\Twig\\Extension\\ArrayHelperExtension',
            'craue_twig_extensions.arrayHelper.withoutAlias' => '',
            'craue_twig_extensions.arrayHelper.replaceKeyAlias' => '',
            'craue_twig_extensions.arrayHelper.removeKeyAlias' => '',
            'craue_twig_extensions.arrayHelper.translateArrayAlias' => '',
            'craue_twig_extensions.changeLanguage.class' => 'Craue\\TwigExtensionsBundle\\Twig\\Extension\\ChangeLanguageExtension',
            'craue_twig_extensions.changeLanguage.availableLocales' => [

            ],
            'craue_twig_extensions.changeLanguage.showForeignLanguageNames' => true,
            'craue_twig_extensions.changeLanguage.showFirstUppercase' => false,
            'craue_twig_extensions.changeLanguage.languageNameAlias' => '',
            'craue_twig_extensions.changeLanguage.availableLocalesAlias' => '',
            'craue_twig_extensions.decorateEmptyValue.class' => 'Craue\\TwigExtensionsBundle\\Twig\\Extension\\DecorateEmptyValueExtension',
            'craue_twig_extensions.decorateEmptyValue.placeholder' => '&mdash;',
            'craue_twig_extensions.decorateEmptyValue.filterAlias' => '',
            'craue_twig_extensions.formatDateTime.class' => 'Craue\\TwigExtensionsBundle\\Twig\\Extension\\FormatDateTimeExtension',
            'craue_twig_extensions.formatDateTime.datetype' => 'medium',
            'craue_twig_extensions.formatDateTime.timetype' => 'medium',
            'craue_twig_extensions.formatDateTime.timeZone' => '',
            'craue_twig_extensions.formatDateTime.dateFilterAlias' => '',
            'craue_twig_extensions.formatDateTime.timeFilterAlias' => '',
            'craue_twig_extensions.formatDateTime.dateTimeFilterAlias' => '',
            'craue_twig_extensions.formatNumber.class' => 'Craue\\TwigExtensionsBundle\\Twig\\Extension\\FormatNumberExtension',
            'craue_twig_extensions.formatNumber.currency' => '',
            'craue_twig_extensions.formatNumber.numberFilterAlias' => '',
            'craue_twig_extensions.formatNumber.currencyFilterAlias' => '',
            'craue_twig_extensions.formatNumber.spelloutFilterAlias' => '',
            'craue_twig_extensions.form.class' => 'Craue\\TwigExtensionsBundle\\Twig\\Extension\\FormExtension',
            'craue_twig_extensions.form.cloneFormAlias' => '',
            'craue_twig_extensions.stringHelper.class' => 'Craue\\TwigExtensionsBundle\\Twig\\Extension\\StringHelperExtension',
            'craue_twig_extensions.stringHelper.trailingDotAlias' => '',
            'payment.plugin_controller.entity.class' => 'JMS\\Payment\\CoreBundle\\PluginController\\EntityPluginController',
            'payment.plugin_controller.entity.options.result_class' => 'JMS\\Payment\\CoreBundle\\PluginController\\Result',
            'payment.plugin_controller.entity.options.payment_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Payment',
            'payment.plugin_controller.entity.options.payment_instruction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction',
            'payment.plugin_controller.entity.options.financial_transaction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\FinancialTransaction',
            'payment.plugin_controller.entity.options.credit_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Credit',
            'payment.form.choose_payment_method_type.class' => 'JMS\\Payment\\CoreBundle\\Form\\ChoosePaymentMethodType',
            'payment.form.choose_payment_method_transformer.class' => 'JMS\\Payment\\CoreBundle\\Form\\Transformer\\ChoosePaymentMethodTransformer',
            'payment.encryption.mcrypt.class' => 'JMS\\Payment\\CoreBundle\\Cryptography\\MCryptEncryptionService',
            'payment.encryption.mcrypt.secret' => 'def00000f3a2e15c4da3cf6053f76dc0e045e6f8253cbb88fe103a46d420dc9f28e31119e578a60c67f0d5c6eb9026a039fdbb33b748979023632c435b42526e34caf225',
            'payment.encryption.mcrypt.cipher' => 'rijndael-256',
            'payment.encryption.mcrypt.mode' => 'ctr',
            'payment.encryption.defuse_php_encryption.class' => 'JMS\\Payment\\CoreBundle\\Cryptography\\DefusePhpEncryptionService',
            'payment.encryption.defuse_php_encryption.secret' => 'def00000f3a2e15c4da3cf6053f76dc0e045e6f8253cbb88fe103a46d420dc9f28e31119e578a60c67f0d5c6eb9026a039fdbb33b748979023632c435b42526e34caf225',
            'payment.encryption_service.class' => 'JMS\\Payment\\CoreBundle\\Cryptography\\MCryptEncryptionService',
            'payment.encryption_service.secret' => '',
            'payment.encryption_service.cipher' => 'rijndael-256',
            'payment.encryption_service.mode' => 'ctr',
            'payment.encryption.enabled' => true,
            'payment.encryption' => 'defuse_php_encryption',
            'payment.encryption.secret' => 'def00000f3a2e15c4da3cf6053f76dc0e045e6f8253cbb88fe103a46d420dc9f28e31119e578a60c67f0d5c6eb9026a039fdbb33b748979023632c435b42526e34caf225',
            'payment.plugin.paypal_express_checkout.class' => 'JMS\\Payment\\PaypalBundle\\Plugin\\ExpressCheckoutPlugin',
            'payment.paypal.express_checkout.return_url' => 'http://127.0.0.1:8000/profile',
            'payment.paypal.express_checkout.cancel_url' => 'http://127.0.0.1:8000',
            'payment.paypal.express_checkout.notify_url' => NULL,
            'payment.paypal.express_checkout.useraction' => NULL,
            'payment.paypal.authentication_strategy.token.class' => 'JMS\\Payment\\PaypalBundle\\Client\\Authentication\\TokenAuthenticationStrategy',
            'payment.paypal.username' => 'admin-facilitator_api1.derp6.com',
            'payment.paypal.password' => 'U33NJEL9JZU62QVG',
            'payment.paypal.signature' => 'AtL7oQxTmzrw7-xA7-rku3v0ecLLAwABEnLS-y2G3yyj-n9ai5Mkr6t4',
            'payment.form.paypal_express_checkout_type.class' => 'JMS\\Payment\\PaypalBundle\\Form\\ExpressCheckoutType',
            'payment.paypal.client.class' => 'JMS\\Payment\\PaypalBundle\\Client\\Client',
            'payment.paypal.debug' => true,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [
                'ROLE_ADMIN' => [
                    0 => 'ROLE_USER',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_ADMIN',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'hwi_oauth.resource_ownermap.configured.secured_area' => [
                'facebook' => '/login/check-facebook',
                'google' => '/login/check-google',
                'auth0' => '/auth0/callback',
            ],
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'App\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => [
                0 => 'Profile',
                1 => 'Default',
            ],
            'fos_user.registration.confirmation.from_email' => [
                'a@a.com' => 'a@a.com',
            ],
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => [
                0 => 'ChangePassword',
                1 => 'Default',
            ],
            'fos_user.resetting.email.from_email' => [
                'a@a.com' => 'a@a.com',
            ],
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => [
                0 => 'ResetPassword',
                1 => 'Default',
            ],
            'console.command.ids' => [

            ],
        ];
    }
}
