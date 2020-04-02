<?php

namespace ContainerXuQgT13;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelTestDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\HomeController' => 'getHomeControllerService',
            'App\\Controller\\InvitationsController' => 'getInvitationsControllerService',
            'App\\Controller\\RegistrationController' => 'getRegistrationControllerService',
            'App\\Controller\\SecurityController' => 'getSecurityControllerService',
            'App\\Controller\\ShareController' => 'getShareControllerService',
            'App\\Controller\\TasksController' => 'getTasksControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'http_kernel' => 'getHttpKernelService',
            'knp_paginator' => 'getKnpPaginatorService',
            'liip_test_fixtures.services.database_tool_collection' => 'getLiipTestFixtures_Services_DatabaseToolCollectionService',
            'liip_test_fixtures.services.fixtures_loader_factory' => 'getLiipTestFixtures_Services_FixturesLoaderFactoryService',
            'liip_test_fixtures.services_database_backup.mongodb' => 'getLiipTestFixtures_ServicesDatabaseBackup_MongodbService',
            'liip_test_fixtures.services_database_backup.mysql' => 'getLiipTestFixtures_ServicesDatabaseBackup_MysqlService',
            'liip_test_fixtures.services_database_backup.sqlite' => 'getLiipTestFixtures_ServicesDatabaseBackup_SqliteService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'test.client' => 'getTest_ClientService',
            'test.private_services_locator' => 'getTest_PrivateServicesLocatorService',
            'test.service_container' => 'getTest_ServiceContainerService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\KernelInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Kernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Kernel\\MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'\\src\\Kernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\EventListener\\ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ErrorListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\container\\src\\ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\RequestStack.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\UrlHelper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\PruneableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ResetInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\TraceableAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Marshaller\\MarshallerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Marshaller\\DefaultMarshaller.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation-contracts\\LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation-contracts\\TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation-contracts\\TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractTestSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\TestSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\SessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\Packages.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\Context\\ContextInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\Context\\RequestStackContext.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\VersionStrategy\\VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\VersionStrategy\\EmptyVersionStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\PackageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\Package.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\PathPackage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\EventListener\\MessageLoggerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Validation.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Util\\LegacyTranslatorProxy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ContainerConstraintValidatorFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Loader\\LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Loader\\AutoMappingTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Loader\\PropertyInfoLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Translator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Translation\\Translator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\ChoiceMessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\MessageFormatter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\Profiler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\FileProfilerStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ProfilerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\ConfigDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\AjaxDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\EventDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\LoggerDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\TimeDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\MemoryDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\DataCollector\\RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DataCollector\\CacheDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataExtractor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\DataCollector\\ValidatorDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\DataCollector\\MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client\\DataCollector\\HttpClientDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Debug\\FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\stopwatch\\Stopwatch.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\TraceableControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\TraceableArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Log\\DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bridge\\Processor\\DebugProcessor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RequestContext.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\RouterListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyTypeExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyDescriptionExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyAccessExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyListExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyInfoExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyInitializableExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyInfoExtractor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-link\\EventListener\\AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Environment.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\AppVariable.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\Loader\\NativeFilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Profiler\\Profile.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\DataCollector\\TwigDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\AssetExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CodeExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\RoutingExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\WebLinkExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\RuntimeLoader\\RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\RuntimeLoader\\ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src\\MissingExtensionSuggestor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\ControllerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\expression-language\\ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Templating\\TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\TemplateListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\SecurityListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Security\\ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\SQLLogger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Logger\\DbalLogger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\DataCollector\\DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\DataCollector\\DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Registry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Twig\\DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\DebugStack.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\LoggerChain.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Repository\\RepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ContainerRepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ObjectInitializerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Validator\\DoctrineInitializer.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\NamingStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\QuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Configuration.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DoctrineProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\EntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\EntityListenerServiceResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\ContainerEntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ManagerConfigurator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Validator\\DoctrineLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\TokenStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Role\\RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Role\\RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallMap.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\RememberMe\\ResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\SecurityExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\DataCollector\\SecurityDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\TraceableAccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\EventListener\\FirewallListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Debug\\TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Twig\\WebProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\DataDumperInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Cloner\\DumperInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\AbstractDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\CliDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\HtmlDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Logger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bridge\\Logger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bridge\\Handler\\FingersCrossed\\HttpCodeActivationStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\HandlerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\FingersCrossedHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\DumpExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\DumpDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Cloner\\ClonerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Cloner\\AbstractCloner.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Cloner\\VarCloner.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Subscriber\\SlidingPaginationSubscriber.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Helper\\Processor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Twig\\Extension\\PaginationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client-contracts\\HttpClientInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client\\TraceableHttpClient.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client\\HttpClient.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\NullHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Factory\\MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Validator\\ValidatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher-contracts\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\AbstractTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ContractsTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\FilesystemTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\FilesystemAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ArrayTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\ArrayAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\DataCollectorTranslator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Matcher\\UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Generator\\UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RouterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Matcher\\RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Router.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\DependencyInjection\\CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\Router.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Validator\\TraceableValidator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Debug\\TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /**
     * Gets the public 'App\Controller\HomeController' shared autowired service.
     *
     * @return \App\Controller\HomeController
     */
    protected function getHomeControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\HomeController.php';

        $this->services['App\\Controller\\HomeController'] = $instance = new \App\Controller\HomeController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\HomeController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\InvitationsController' shared autowired service.
     *
     * @return \App\Controller\InvitationsController
     */
    protected function getInvitationsControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\InvitationsController.php';

        $this->services['App\\Controller\\InvitationsController'] = $instance = new \App\Controller\InvitationsController(($this->privates['App\\Repository\\InvitationsRepository'] ?? $this->getInvitationsRepositoryService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\InvitationsController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\RegistrationController
     */
    protected function getRegistrationControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\RegistrationController.php';

        $this->services['App\\Controller\\RegistrationController'] = $instance = new \App\Controller\RegistrationController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\RegistrationController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\SecurityController' shared autowired service.
     *
     * @return \App\Controller\SecurityController
     */
    protected function getSecurityControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\SecurityController.php';

        $this->services['App\\Controller\\SecurityController'] = $instance = new \App\Controller\SecurityController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\SecurityController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\ShareController' shared autowired service.
     *
     * @return \App\Controller\ShareController
     */
    protected function getShareControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\ShareController.php';

        $this->services['App\\Controller\\ShareController'] = $instance = new \App\Controller\ShareController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\ShareController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\TasksController' shared autowired service.
     *
     * @return \App\Controller\TasksController
     */
    protected function getTasksControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\TasksController.php';

        $this->services['App\\Controller\\TasksController'] = $instance = new \App\Controller\TasksController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\TasksController', $this));

        return $instance;
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()), NULL);
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.app.recorder_inner'] ?? $this->getCache_App_RecorderInnerService()));
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService())]);
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.doctrine.orm.default.metadata.recorder_inner'] ?? ($this->privates['cache.doctrine.orm.default.metadata.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.doctrine.orm.default.query.recorder_inner'] ?? ($this->privates['cache.doctrine.orm.default.query.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.doctrine.orm.default.result.recorder_inner'] ?? ($this->privates['cache.doctrine.orm.default.result.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.doctrine.orm.default.metadata' => ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()), 'cache.doctrine.orm.default.result' => ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()), 'cache.doctrine.orm.default.query' => ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.system.recorder_inner'] ?? $this->getCache_System_RecorderInnerService()));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 1 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 2 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 3 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 4 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
            yield 5 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 6 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
        }, 7), true, ($this->targetDir.''.'/srcApp_KernelTestDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\CommandLoader\\CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\CommandLoader\\ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.fixtures_load_command' => ['privates', 'doctrine.fixtures_load_command', 'getDoctrine_FixturesLoadCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'monolog.command.server_log' => ['privates', 'monolog.command.server_log', 'getMonolog_Command_ServerLogService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'var_dumper.command.server_dump' => ['privates', 'var_dumper.command.server_dump', 'getVarDumper_Command_ServerDumpService', false],
        ], [
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.fixtures_load_command' => 'Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand',
            'monolog.command.server_log' => 'Symfony\\Bridge\\Monolog\\Command\\ServerLogCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
            'var_dumper.command.server_dump' => 'Symfony\\Bundle\\DebugBundle\\Command\\ServerDumpPlaceholderCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'security:encode-password' => 'security.command.user_password_encoder', 'server:dump' => 'var_dumper.command.server_dump', 'server:log' => 'monolog.command.server_log', 'doctrine:fixtures:load' => 'doctrine.fixtures_load_command']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', NULL, NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        return $this->services['doctrine.dbal.default_connection'] = ($this->privates['doctrine.dbal.connection_factory'] ?? ($this->privates['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([])))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driver' => 'pdo_mysql', 'driverOptions' => [], 'defaultTableOptions' => []], ($this->privates['doctrine.dbal.default_connection.configuration'] ?? $this->getDoctrine_Dbal_DefaultConnection_ConfigurationService()), ($this->privates['doctrine.dbal.default_connection.event_manager'] ?? $this->getDoctrine_Dbal_DefaultConnection_EventManagerService()), []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->privates['doctrine.orm.default_configuration'] ?? $this->getDoctrine_Orm_DefaultConfigurationService()));

        ($this->privates['doctrine.orm.default_manager_configurator'] ?? ($this->privates['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], [])))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ErrorController.php';

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', ($this->privates['error_handler.error_renderer.serializer'] ?? $this->getErrorHandler_ErrorRenderer_SerializerService()));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(($this->privates['debug.event_dispatcher.inner'] ?? ($this->privates['debug.event_dispatcher.inner'] = new \Symfony\Component\EventDispatcher\EventDispatcher())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['monolog.logger.event'] ?? $this->getMonolog_Logger_EventService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'onKernelRequest'], 0);
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
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelRequest'], 192);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->getTwig_Mailer_MessageListenerService());
        }, 1 => 'onMessage'], 0);
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
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->getDebug_Security_Voter_VoteListenerService());
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->getDebug_DumpListenerService());
        }, 1 => 'configure'], 1024);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'before'], 0);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'pagination'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sortable'] ?? ($this->privates['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.filtration'] ?? ($this->privates['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'pagination'], 1);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormFactory.php';

        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php';

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['debug.controller_resolver'] ?? $this->getDebug_ControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['debug.argument_resolver'] ?? $this->getDebug_ArgumentResolverService()));
    }

    /**
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    protected function getKnpPaginatorService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-components\\src\\Knp\\Component\\Pager\\PaginatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-components\\src\\Knp\\Component\\Pager\\Paginator.php';

        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setDefaultPaginatorOptions(['pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true]);

        return $instance;
    }

    /**
     * Gets the public 'liip_test_fixtures.services.database_tool_collection' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseToolCollection
     */
    protected function getLiipTestFixtures_Services_DatabaseToolCollectionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseToolCollection.php';

        $this->services['liip_test_fixtures.services.database_tool_collection'] = $instance = new \Liip\TestFixturesBundle\Services\DatabaseToolCollection($this, ($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()));

        $instance->add(($this->privates['liip_test_fixtures.services_database_tools.orm_database_tool'] ?? $this->getLiipTestFixtures_ServicesDatabaseTools_OrmDatabaseToolService()));
        $instance->add(($this->privates['liip_test_fixtures.services_database_tools.orm_sqlite_database_tool'] ?? $this->getLiipTestFixtures_ServicesDatabaseTools_OrmSqliteDatabaseToolService()));
        $instance->add(($this->privates['liip_test_fixtures.services_database_tools.mongodb_database_tool'] ?? $this->getLiipTestFixtures_ServicesDatabaseTools_MongodbDatabaseToolService()));
        $instance->add(($this->privates['liip_test_fixtures.services_database_tools.phpcr_database_tool'] ?? $this->getLiipTestFixtures_ServicesDatabaseTools_PhpcrDatabaseToolService()));

        return $instance;
    }

    /**
     * Gets the public 'liip_test_fixtures.services.fixtures_loader_factory' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\FixturesLoaderFactory
     */
    protected function getLiipTestFixtures_Services_FixturesLoaderFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\FixturesLoaderFactory.php';

        return $this->services['liip_test_fixtures.services.fixtures_loader_factory'] = new \Liip\TestFixturesBundle\Services\FixturesLoaderFactory($this, ($this->privates['doctrine.fixtures.loader'] ?? $this->getDoctrine_Fixtures_LoaderService()));
    }

    /**
     * Gets the public 'liip_test_fixtures.services_database_backup.mongodb' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseBackup\MongodbDatabaseBackup
     */
    protected function getLiipTestFixtures_ServicesDatabaseBackup_MongodbService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseBackup\\DatabaseBackupInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseBackup\\AbstractDatabaseBackup.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseBackup\\MongodbDatabaseBackup.php';

        return $this->services['liip_test_fixtures.services_database_backup.mongodb'] = new \Liip\TestFixturesBundle\Services\DatabaseBackup\MongodbDatabaseBackup($this, ($this->services['liip_test_fixtures.services.fixtures_loader_factory'] ?? $this->getLiipTestFixtures_Services_FixturesLoaderFactoryService()));
    }

    /**
     * Gets the public 'liip_test_fixtures.services_database_backup.mysql' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseBackup\MysqlDatabaseBackup
     */
    protected function getLiipTestFixtures_ServicesDatabaseBackup_MysqlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseBackup\\DatabaseBackupInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseBackup\\AbstractDatabaseBackup.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseBackup\\MysqlDatabaseBackup.php';

        return $this->services['liip_test_fixtures.services_database_backup.mysql'] = new \Liip\TestFixturesBundle\Services\DatabaseBackup\MysqlDatabaseBackup($this, ($this->services['liip_test_fixtures.services.fixtures_loader_factory'] ?? $this->getLiipTestFixtures_Services_FixturesLoaderFactoryService()));
    }

    /**
     * Gets the public 'liip_test_fixtures.services_database_backup.sqlite' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseBackup\SqliteDatabaseBackup
     */
    protected function getLiipTestFixtures_ServicesDatabaseBackup_SqliteService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseBackup\\DatabaseBackupInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseBackup\\AbstractDatabaseBackup.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseBackup\\SqliteDatabaseBackup.php';

        return $this->services['liip_test_fixtures.services_database_backup.sqlite'] = new \Liip\TestFixturesBundle\Services\DatabaseBackup\SqliteDatabaseBackup($this, ($this->services['liip_test_fixtures.services.fixtures_loader_factory'] ?? $this->getLiipTestFixtures_Services_FixturesLoaderFactoryService()));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(($this->privates['profiler.storage'] ?? ($this->privates['profiler.storage'] = new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')))), ($this->privates['monolog.logger.profiler'] ?? $this->getMonolog_Logger_ProfilerService()), false);

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(($this->privates['data_collector.time'] ?? $this->getDataCollector_TimeService()));
        $instance->add(($this->privates['data_collector.memory'] ?? ($this->privates['data_collector.memory'] = new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector())));
        $instance->add(($this->privates['data_collector.validator'] ?? $this->getDataCollector_ValidatorService()));
        $instance->add(($this->privates['data_collector.ajax'] ?? ($this->privates['data_collector.ajax'] = new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector())));
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(($this->privates['data_collector.exception'] ?? ($this->privates['data_collector.exception'] = new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector())));
        $instance->add(($this->privates['data_collector.logger'] ?? $this->getDataCollector_LoggerService()));
        $instance->add(($this->privates['data_collector.events'] ?? $this->getDataCollector_EventsService()));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add(($this->privates['data_collector.cache'] ?? $this->getDataCollector_CacheService()));
        $instance->add(($this->privates['data_collector.translation'] ?? $this->getDataCollector_TranslationService()));
        $instance->add(($this->privates['data_collector.security'] ?? $this->getDataCollector_SecurityService()));
        $instance->add(($this->privates['data_collector.twig'] ?? $this->getDataCollector_TwigService()));
        $instance->add(($this->privates['data_collector.http_client'] ?? $this->getDataCollector_HttpClientService()));
        $instance->add(($this->privates['data_collector.doctrine'] ?? $this->getDataCollector_DoctrineService()));
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add(($this->privates['mailer.data_collector'] ?? $this->getMailer_DataCollectorService()));
        $instance->add(($this->privates['data_collector.config'] ?? $this->getDataCollector_ConfigService()));

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['monolog.logger.router'] ?? $this->getMonolog_Logger_RouterService()), 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\DelegatingLoader.php';

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['routing.resolver'] ?? $this->getRouting_ResolverService()), [], ['utf8' => true]);
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticationUtils.php';

        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\UriSafeTokenGenerator.php';

        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(($this->privates['security.csrf.token_generator'] ?? ($this->privates['security.csrf.token_generator'] = new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator())), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\UserPasswordEncoder.php';

        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Serializer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ProblemNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\JsonSerializableNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateTimeNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateTimeZoneNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateIntervalNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ArrayDenormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\XmlEncoder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\JsonEncoder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\YamlEncoder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\CsvEncoder.php';

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => ($this->privates['serializer.normalizer.problem'] ?? ($this->privates['serializer.normalizer.problem'] = new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true))), 1 => ($this->privates['serializer.normalizer.json_serializable'] ?? ($this->privates['serializer.normalizer.json_serializable'] = new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer())), 2 => ($this->privates['serializer.normalizer.datetime'] ?? ($this->privates['serializer.normalizer.datetime'] = new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer())), 3 => ($this->privates['serializer.normalizer.constraint_violation_list'] ?? $this->getSerializer_Normalizer_ConstraintViolationListService()), 4 => ($this->privates['serializer.normalizer.datetimezone'] ?? ($this->privates['serializer.normalizer.datetimezone'] = new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer())), 5 => ($this->privates['serializer.normalizer.dateinterval'] ?? ($this->privates['serializer.normalizer.dateinterval'] = new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer())), 6 => ($this->privates['serializer.normalizer.data_uri'] ?? $this->getSerializer_Normalizer_DataUriService()), 7 => ($this->privates['serializer.denormalizer.array'] ?? ($this->privates['serializer.denormalizer.array'] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer())), 8 => ($this->privates['serializer.normalizer.object'] ?? $this->getSerializer_Normalizer_ObjectService())], [0 => ($this->privates['serializer.encoder.xml'] ?? ($this->privates['serializer.encoder.xml'] = new \Symfony\Component\Serializer\Encoder\XmlEncoder())), 1 => ($this->privates['serializer.encoder.json'] ?? ($this->privates['serializer.encoder.json'] = new \Symfony\Component\Serializer\Encoder\JsonEncoder())), 2 => ($this->privates['serializer.encoder.yaml'] ?? ($this->privates['serializer.encoder.yaml'] = new \Symfony\Component\Serializer\Encoder\YamlEncoder())), 3 => ($this->privates['serializer.encoder.csv'] ?? ($this->privates['serializer.encoder.csv'] = new \Symfony\Component\Serializer\Encoder\CsvEncoder()))]);
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DependencyInjection\\ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->services['profiler'])) {
                yield 'profiler' => ($this->services['profiler'] ?? null);
            }
            if (isset($this->services['validator'])) {
                yield 'debug.validator' => ($this->services['validator'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($this->services['event_dispatcher'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($this->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['event_dispatcher'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->privates['monolog.handler.main']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.validator' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Session.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBag.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBag.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.mock_file'] ?? $this->getSession_Storage_MockFileService()), ($this->privates['session.attribute_bag'] ?? ($this->privates['session.attribute_bag'] = new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag())), ($this->privates['session.flash_bag'] ?? ($this->privates['session.flash_bag'] = new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag())));
    }

    /**
     * Gets the public 'test.client' service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\KernelBrowser
     */
    protected function getTest_ClientService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\Client.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\AbstractBrowser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Client.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernelBrowser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Client.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\KernelBrowser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\History.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\CookieJar.php';

        return new \Symfony\Bundle\FrameworkBundle\KernelBrowser(($this->services['kernel'] ?? $this->get('kernel', 1)), [], (new \Symfony\Component\BrowserKit\History()), (new \Symfony\Component\BrowserKit\CookieJar()));
    }

    /**
     * Gets the public 'test.private_services_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getTest_PrivateServicesLocatorService()
    {
        return $this->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\DataFixtures\\AppFixtures' => ['privates', 'App\\DataFixtures\\AppFixtures', 'getAppFixturesService', false],
            'App\\DataFixtures\\UserFixtures' => ['privates', 'App\\DataFixtures\\UserFixtures', 'getUserFixturesService', false],
            'App\\Form\\FriendsSearchType' => ['privates', 'App\\Form\\FriendsSearchType', 'getFriendsSearchTypeService', false],
            'App\\Form\\InvitationsType' => ['privates', 'App\\Form\\InvitationsType', 'getInvitationsTypeService', false],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', false],
            'App\\Form\\TasksType' => ['privates', 'App\\Form\\TasksType', 'getTasksTypeService', false],
            'App\\Repository\\InvitationsRepository' => ['privates', 'App\\Repository\\InvitationsRepository', 'getInvitationsRepositoryService', false],
            'App\\Repository\\TasksTypeRepository' => ['privates', 'App\\Repository\\TasksTypeRepository', 'getTasksTypeRepositoryService', false],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
            'App\\Security\\LoginFormAuthenticator' => ['privates', 'App\\Security\\LoginFormAuthenticator', 'getLoginFormAuthenticatorService', false],
            'Doctrine\\Common\\Annotations\\Reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'Doctrine\\DBAL\\Connection' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'Doctrine\\DBAL\\Driver\\Connection' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'Doctrine\\ORM\\EntityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'Doctrine\\Persistence\\ManagerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'Knp\\Component\\Pager\\PaginatorInterface' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
            'Psr\\Cache\\CacheItemPoolInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Psr\\Container\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Psr\\Container\\ContainerInterface $parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Psr\\Log\\LoggerInterface' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'Psr\\Log\\LoggerInterface $cacheLogger' => ['privates', 'monolog.logger.cache', 'getMonolog_Logger_CacheService', false],
            'Psr\\Log\\LoggerInterface $consoleLogger' => ['privates', 'monolog.logger.console', 'getMonolog_Logger_ConsoleService', false],
            'Psr\\Log\\LoggerInterface $debugLogger' => ['privates', 'monolog.logger.debug', 'getMonolog_Logger_DebugService', false],
            'Psr\\Log\\LoggerInterface $doctrineLogger' => ['privates', 'monolog.logger.doctrine', 'getMonolog_Logger_DoctrineService', false],
            'Psr\\Log\\LoggerInterface $eventLogger' => ['privates', 'monolog.logger.event', 'getMonolog_Logger_EventService', false],
            'Psr\\Log\\LoggerInterface $httpClientLogger' => ['privates', 'monolog.logger.http_client', 'getMonolog_Logger_HttpClientService', false],
            'Psr\\Log\\LoggerInterface $phpLogger' => ['privates', 'monolog.logger.php', 'getMonolog_Logger_PhpService', false],
            'Psr\\Log\\LoggerInterface $profilerLogger' => ['privates', 'monolog.logger.profiler', 'getMonolog_Logger_ProfilerService', false],
            'Psr\\Log\\LoggerInterface $requestLogger' => ['privates', 'monolog.logger.request', 'getMonolog_Logger_RequestService', false],
            'Psr\\Log\\LoggerInterface $routerLogger' => ['privates', 'monolog.logger.router', 'getMonolog_Logger_RouterService', false],
            'Psr\\Log\\LoggerInterface $securityLogger' => ['privates', 'monolog.logger.security', 'getMonolog_Logger_SecurityService', false],
            'Symfony\\Component\\Asset\\Packages' => ['privates', 'assets.packages', 'getAssets_PackagesService', false],
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Component\\Filesystem\\Filesystem' => ['services', 'filesystem', 'getFilesystemService', false],
            'Symfony\\Component\\Form\\FormFactoryInterface' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'Symfony\\Component\\Form\\FormRegistryInterface' => ['privates', 'form.registry', 'getForm_RegistryService', false],
            'Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface' => ['privates', 'form.resolved_type_factory', 'getForm_ResolvedTypeFactoryService', false],
            'Symfony\\Component\\HttpFoundation\\RequestStack' => ['services', 'request_stack', 'getRequestStackService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => ['privates', 'session.flash_bag', 'getSession_FlashBagService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => ['services', 'session', 'getSessionService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'Symfony\\Component\\HttpFoundation\\UrlHelper' => ['privates', 'url_helper', 'getUrlHelperService', false],
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'Symfony\\Component\\HttpKernel\\KernelInterface' => ['services', 'kernel', 'getKernelService', false],
            'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => ['privates', 'property_accessor', 'getPropertyAccessorService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RequestContext' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RouterInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface' => ['privates', 'security.authentication.manager', 'getSecurity_Authentication_ManagerService', false],
            'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface' => ['privates', 'debug.security.access.decision_manager', 'getDebug_Security_Access_DecisionManagerService', false],
            'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface' => ['privates', 'security.encoder_factory.generic', 'getSecurity_EncoderFactory_GenericService', false],
            'Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface' => ['privates', 'security.role_hierarchy', 'getSecurity_RoleHierarchyService', false],
            'Symfony\\Component\\Security\\Core\\Security' => ['privates', 'security.helper', 'getSecurity_HelperService', false],
            'Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'Symfony\\Component\\Security\\Core\\User\\UserProviderInterface' => ['privates', 'security.user.provider.concrete.app_user_provider', 'getSecurity_User_Provider_Concrete_AppUserProviderService', false],
            'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', false],
            'Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface' => ['privates', 'security.csrf.token_storage', 'getSecurity_Csrf_TokenStorageService', false],
            'Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', false],
            'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
            'Symfony\\Component\\Security\\Http\\Firewall' => ['privates', 'debug.security.firewall', 'getDebug_Security_FirewallService', false],
            'Symfony\\Component\\Security\\Http\\HttpUtils' => ['privates', 'security.http_utils', 'getSecurity_HttpUtilsService', false],
            'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface' => ['privates', 'security.authentication.session_strategy', 'getSecurity_Authentication_SessionStrategyService', false],
            'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface' => ['privates', 'serializer.mapping.class_discriminator_resolver', 'getSerializer_Mapping_ClassDiscriminatorResolverService', false],
            'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface' => ['privates', 'serializer.mapping.class_metadata_factory', 'getSerializer_Mapping_ClassMetadataFactoryService', false],
            'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer' => ['privates', 'serializer.normalizer.object', 'getSerializer_Normalizer_ObjectService', false],
            'Symfony\\Component\\Serializer\\SerializerInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Stopwatch\\Stopwatch' => ['privates', 'debug.stopwatch', 'getDebug_StopwatchService', false],
            'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => ['privates', 'translation.extractor', 'getTranslation_ExtractorService', false],
            'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => ['privates', 'translation.reader', 'getTranslation_ReaderService', false],
            'Symfony\\Component\\Translation\\TranslatorInterface' => ['services', 'translator', 'getTranslatorService', false],
            'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => ['privates', 'translation.writer', 'getTranslation_WriterService', false],
            'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => ['services', 'validator', 'getValidatorService', false],
            'Symfony\\Contracts\\Cache\\CacheInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Contracts\\HttpClient\\HttpClientInterface' => ['privates', '.debug.http_client', 'get_Debug_HttpClientService', false],
            'Symfony\\Contracts\\Translation\\TranslatorInterface' => ['services', 'translator', 'getTranslatorService', false],
            'Twig\\Environment' => ['services', 'twig', 'getTwigService', false],
            'Twig_Environment' => ['services', 'twig', 'getTwigService', false],
            'annotation_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'annotations.cache' => ['privates', 'annotations.cache', 'getAnnotations_CacheService', false],
            'annotations.cache_warmer' => ['privates', 'annotations.cache_warmer', 'getAnnotations_CacheWarmerService', false],
            'annotations.cached_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'annotations.dummy_registry' => ['privates', 'annotations.dummy_registry', 'getAnnotations_DummyRegistryService', false],
            'annotations.reader' => ['privates', 'annotations.reader', 'getAnnotations_ReaderService', false],
            'argument_metadata_factory' => ['privates', 'argument_metadata_factory', 'getArgumentMetadataFactoryService', false],
            'argument_resolver' => ['privates', 'debug.argument_resolver', 'getDebug_ArgumentResolverService', false],
            'argument_resolver.controller_locator' => ['privates', '.service_locator.531YlXk', 'get_ServiceLocator_531YlXkService', false],
            'argument_resolver.default' => ['privates', 'debug.argument_resolver.default', 'getDebug_ArgumentResolver_DefaultService', false],
            'argument_resolver.not_tagged_controller' => ['privates', 'debug.argument_resolver.not_tagged_controller', 'getDebug_ArgumentResolver_NotTaggedControllerService', false],
            'argument_resolver.request' => ['privates', 'debug.argument_resolver.request', 'getDebug_ArgumentResolver_RequestService', false],
            'argument_resolver.request_attribute' => ['privates', 'debug.argument_resolver.request_attribute', 'getDebug_ArgumentResolver_RequestAttributeService', false],
            'argument_resolver.service' => ['privates', 'debug.argument_resolver.service', 'getDebug_ArgumentResolver_ServiceService', false],
            'argument_resolver.session' => ['privates', 'debug.argument_resolver.session', 'getDebug_ArgumentResolver_SessionService', false],
            'argument_resolver.variadic' => ['privates', 'debug.argument_resolver.variadic', 'getDebug_ArgumentResolver_VariadicService', false],
            'assets._default_package' => ['privates', 'assets._default_package', 'getAssets_DefaultPackageService', false],
            'assets.context' => ['privates', 'assets.context', 'getAssets_ContextService', false],
            'assets.empty_version_strategy' => ['privates', 'assets.empty_version_strategy', 'getAssets_EmptyVersionStrategyService', false],
            'assets.packages' => ['privates', 'assets.packages', 'getAssets_PackagesService', false],
            'cache.annotations' => ['privates', 'cache.annotations', 'getCache_AnnotationsService', false],
            'cache.annotations.recorder_inner' => ['privates', 'cache.annotations.recorder_inner', 'getCache_Annotations_RecorderInnerService', false],
            'cache.app.recorder_inner' => ['privates', 'cache.app.recorder_inner', 'getCache_App_RecorderInnerService', false],
            'cache.default_clearer' => ['services', 'cache.app_clearer', 'getCache_AppClearerService', false],
            'cache.default_marshaller' => ['privates', 'cache.default_marshaller', 'getCache_DefaultMarshallerService', false],
            'cache.default_pdo_provider' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'cache.doctrine.orm.default.metadata.recorder_inner' => ['privates', 'cache.doctrine.orm.default.metadata.recorder_inner', 'getCache_Doctrine_Orm_Default_Metadata_RecorderInnerService', false],
            'cache.doctrine.orm.default.query.recorder_inner' => ['privates', 'cache.doctrine.orm.default.query.recorder_inner', 'getCache_Doctrine_Orm_Default_Query_RecorderInnerService', false],
            'cache.doctrine.orm.default.result.recorder_inner' => ['privates', 'cache.doctrine.orm.default.result.recorder_inner', 'getCache_Doctrine_Orm_Default_Result_RecorderInnerService', false],
            'cache.property_access' => ['privates', 'cache.property_access', 'getCache_PropertyAccessService', false],
            'cache.property_info' => ['privates', 'cache.property_info', 'getCache_PropertyInfoService', false],
            'cache.property_info.recorder_inner' => ['privates', 'cache.property_info.recorder_inner', 'getCache_PropertyInfo_RecorderInnerService', false],
            'cache.security_expression_language' => ['privates', 'cache.security_expression_language', 'getCache_SecurityExpressionLanguageService', false],
            'cache.security_expression_language.recorder_inner' => ['privates', 'cache.security_expression_language.recorder_inner', 'getCache_SecurityExpressionLanguage_RecorderInnerService', false],
            'cache.serializer' => ['privates', 'cache.serializer', 'getCache_SerializerService', false],
            'cache.serializer.recorder_inner' => ['privates', 'cache.serializer.recorder_inner', 'getCache_Serializer_RecorderInnerService', false],
            'cache.system.recorder_inner' => ['privates', 'cache.system.recorder_inner', 'getCache_System_RecorderInnerService', false],
            'cache.validator' => ['privates', 'cache.validator', 'getCache_ValidatorService', false],
            'cache.validator.recorder_inner' => ['privates', 'cache.validator.recorder_inner', 'getCache_Validator_RecorderInnerService', false],
            'config.resource.self_checking_resource_checker' => ['privates', 'config.resource.self_checking_resource_checker', 'getConfig_Resource_SelfCheckingResourceCheckerService', false],
            'config_cache_factory' => ['privates', 'config_cache_factory', 'getConfigCacheFactoryService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'console.error_listener' => ['privates', 'console.error_listener', 'getConsole_ErrorListenerService', false],
            'console.suggest_missing_package_subscriber' => ['privates', 'console.suggest_missing_package_subscriber', 'getConsole_SuggestMissingPackageSubscriberService', false],
            'container.env_var_processor' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'controller_name_converter' => ['privates', '.legacy_controller_name_converter', 'get_LegacyControllerNameConverterService', false],
            'controller_resolver' => ['privates', 'debug.controller_resolver', 'getDebug_ControllerResolverService', false],
            'data_collector.ajax' => ['privates', 'data_collector.ajax', 'getDataCollector_AjaxService', false],
            'data_collector.cache' => ['privates', 'data_collector.cache', 'getDataCollector_CacheService', false],
            'data_collector.config' => ['privates', 'data_collector.config', 'getDataCollector_ConfigService', false],
            'data_collector.doctrine' => ['privates', 'data_collector.doctrine', 'getDataCollector_DoctrineService', false],
            'data_collector.events' => ['privates', 'data_collector.events', 'getDataCollector_EventsService', false],
            'data_collector.exception' => ['privates', 'data_collector.exception', 'getDataCollector_ExceptionService', false],
            'data_collector.form' => ['privates', 'data_collector.form', 'getDataCollector_FormService', false],
            'data_collector.form.extractor' => ['privates', 'data_collector.form.extractor', 'getDataCollector_Form_ExtractorService', false],
            'data_collector.http_client' => ['privates', 'data_collector.http_client', 'getDataCollector_HttpClientService', false],
            'data_collector.logger' => ['privates', 'data_collector.logger', 'getDataCollector_LoggerService', false],
            'data_collector.memory' => ['privates', 'data_collector.memory', 'getDataCollector_MemoryService', false],
            'data_collector.request' => ['privates', 'data_collector.request', 'getDataCollector_RequestService', false],
            'data_collector.router' => ['privates', 'data_collector.router', 'getDataCollector_RouterService', false],
            'data_collector.security' => ['privates', 'data_collector.security', 'getDataCollector_SecurityService', false],
            'data_collector.time' => ['privates', 'data_collector.time', 'getDataCollector_TimeService', false],
            'data_collector.translation' => ['privates', 'data_collector.translation', 'getDataCollector_TranslationService', false],
            'data_collector.twig' => ['privates', 'data_collector.twig', 'getDataCollector_TwigService', false],
            'data_collector.validator' => ['privates', 'data_collector.validator', 'getDataCollector_ValidatorService', false],
            'debug.argument_resolver' => ['privates', 'debug.argument_resolver', 'getDebug_ArgumentResolverService', false],
            'debug.argument_resolver.default' => ['privates', 'debug.argument_resolver.default', 'getDebug_ArgumentResolver_DefaultService', false],
            'debug.argument_resolver.default.inner' => ['privates', 'debug.argument_resolver.default.inner', 'getDebug_ArgumentResolver_Default_InnerService', false],
            'debug.argument_resolver.inner' => ['privates', 'debug.argument_resolver.inner', 'getDebug_ArgumentResolver_InnerService', false],
            'debug.argument_resolver.not_tagged_controller' => ['privates', 'debug.argument_resolver.not_tagged_controller', 'getDebug_ArgumentResolver_NotTaggedControllerService', false],
            'debug.argument_resolver.not_tagged_controller.inner' => ['privates', 'debug.argument_resolver.not_tagged_controller.inner', 'getDebug_ArgumentResolver_NotTaggedController_InnerService', false],
            'debug.argument_resolver.request' => ['privates', 'debug.argument_resolver.request', 'getDebug_ArgumentResolver_RequestService', false],
            'debug.argument_resolver.request.inner' => ['privates', 'debug.argument_resolver.request.inner', 'getDebug_ArgumentResolver_Request_InnerService', false],
            'debug.argument_resolver.request_attribute' => ['privates', 'debug.argument_resolver.request_attribute', 'getDebug_ArgumentResolver_RequestAttributeService', false],
            'debug.argument_resolver.request_attribute.inner' => ['privates', 'debug.argument_resolver.request_attribute.inner', 'getDebug_ArgumentResolver_RequestAttribute_InnerService', false],
            'debug.argument_resolver.service' => ['privates', 'debug.argument_resolver.service', 'getDebug_ArgumentResolver_ServiceService', false],
            'debug.argument_resolver.service.inner' => ['privates', 'debug.argument_resolver.service.inner', 'getDebug_ArgumentResolver_Service_InnerService', false],
            'debug.argument_resolver.session' => ['privates', 'debug.argument_resolver.session', 'getDebug_ArgumentResolver_SessionService', false],
            'debug.argument_resolver.session.inner' => ['privates', 'debug.argument_resolver.session.inner', 'getDebug_ArgumentResolver_Session_InnerService', false],
            'debug.argument_resolver.variadic' => ['privates', 'debug.argument_resolver.variadic', 'getDebug_ArgumentResolver_VariadicService', false],
            'debug.argument_resolver.variadic.inner' => ['privates', 'debug.argument_resolver.variadic.inner', 'getDebug_ArgumentResolver_Variadic_InnerService', false],
            'debug.controller_resolver' => ['privates', 'debug.controller_resolver', 'getDebug_ControllerResolverService', false],
            'debug.controller_resolver.inner' => ['privates', 'debug.controller_resolver.inner', 'getDebug_ControllerResolver_InnerService', false],
            'debug.debug_handlers_listener' => ['privates', 'debug.debug_handlers_listener', 'getDebug_DebugHandlersListenerService', false],
            'debug.dump_listener' => ['privates', 'debug.dump_listener', 'getDebug_DumpListenerService', false],
            'debug.event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'debug.event_dispatcher.inner' => ['privates', 'debug.event_dispatcher.inner', 'getDebug_EventDispatcher_InnerService', false],
            'debug.file_link_formatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'debug.file_link_formatter.url_format' => ['privates', 'debug.file_link_formatter.url_format', 'getDebug_FileLinkFormatter_UrlFormatService', false],
            'debug.log_processor' => ['privates', 'debug.log_processor', 'getDebug_LogProcessorService', false],
            'debug.security.access.decision_manager' => ['privates', 'debug.security.access.decision_manager', 'getDebug_Security_Access_DecisionManagerService', false],
            'debug.security.access.decision_manager.inner' => ['privates', 'debug.security.access.decision_manager.inner', 'getDebug_Security_Access_DecisionManager_InnerService', false],
            'debug.security.firewall' => ['privates', 'debug.security.firewall', 'getDebug_Security_FirewallService', false],
            'debug.security.user_value_resolver' => ['privates', 'debug.security.user_value_resolver', 'getDebug_Security_UserValueResolverService', false],
            'debug.security.user_value_resolver.inner' => ['privates', 'debug.security.user_value_resolver.inner', 'getDebug_Security_UserValueResolver_InnerService', false],
            'debug.security.voter.security.access.authenticated_voter' => ['privates', 'debug.security.voter.security.access.authenticated_voter', 'getDebug_Security_Voter_Security_Access_AuthenticatedVoterService', false],
            'debug.security.voter.security.access.expression_voter' => ['privates', 'debug.security.voter.security.access.expression_voter', 'getDebug_Security_Voter_Security_Access_ExpressionVoterService', false],
            'debug.security.voter.security.access.simple_role_voter' => ['privates', 'debug.security.voter.security.access.simple_role_voter', 'getDebug_Security_Voter_Security_Access_SimpleRoleVoterService', false],
            'debug.security.voter.vote_listener' => ['privates', 'debug.security.voter.vote_listener', 'getDebug_Security_Voter_VoteListenerService', false],
            'debug.stopwatch' => ['privates', 'debug.stopwatch', 'getDebug_StopwatchService', false],
            'debug.validator' => ['services', 'validator', 'getValidatorService', false],
            'debug.validator.inner' => ['privates', 'debug.validator.inner', 'getDebug_Validator_InnerService', false],
            'dependency_injection.config.container_parameters_resource_checker' => ['privates', 'dependency_injection.config.container_parameters_resource_checker', 'getDependencyInjection_Config_ContainerParametersResourceCheckerService', false],
            'disallow_search_engine_index_response_listener' => ['privates', 'disallow_search_engine_index_response_listener', 'getDisallowSearchEngineIndexResponseListenerService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.dbal.connection_factory' => ['privates', 'doctrine.dbal.connection_factory', 'getDoctrine_Dbal_ConnectionFactoryService', false],
            'doctrine.dbal.default_connection.configuration' => ['privates', 'doctrine.dbal.default_connection.configuration', 'getDoctrine_Dbal_DefaultConnection_ConfigurationService', false],
            'doctrine.dbal.default_connection.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.dbal.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.dbal.logger' => ['privates', 'doctrine.dbal.logger', 'getDoctrine_Dbal_LoggerService', false],
            'doctrine.dbal.logger.chain.default' => ['privates', 'doctrine.dbal.logger.chain.default', 'getDoctrine_Dbal_Logger_Chain_DefaultService', false],
            'doctrine.dbal.logger.profiling.default' => ['privates', 'doctrine.dbal.logger.profiling.default', 'getDoctrine_Dbal_Logger_Profiling_DefaultService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.fixtures.loader' => ['privates', 'doctrine.fixtures.loader', 'getDoctrine_Fixtures_LoaderService', false],
            'doctrine.fixtures_load_command' => ['privates', 'doctrine.fixtures_load_command', 'getDoctrine_FixturesLoadCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService', false],
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.query', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService', false],
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService', false],
            'doctrine.orm.container_repository_factory' => ['privates', 'doctrine.orm.container_repository_factory', 'getDoctrine_Orm_ContainerRepositoryFactoryService', false],
            'doctrine.orm.default_annotation_metadata_driver' => ['privates', 'doctrine.orm.default_annotation_metadata_driver', 'getDoctrine_Orm_DefaultAnnotationMetadataDriverService', false],
            'doctrine.orm.default_configuration' => ['privates', 'doctrine.orm.default_configuration', 'getDoctrine_Orm_DefaultConfigurationService', false],
            'doctrine.orm.default_entity_listener_resolver' => ['privates', 'doctrine.orm.default_entity_listener_resolver', 'getDoctrine_Orm_DefaultEntityListenerResolverService', false],
            'doctrine.orm.default_entity_manager.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.orm.default_entity_manager.property_info_extractor' => ['privates', 'doctrine.orm.default_entity_manager.property_info_extractor', 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService', false],
            'doctrine.orm.default_entity_manager.validator_loader' => ['privates', 'doctrine.orm.default_entity_manager.validator_loader', 'getDoctrine_Orm_DefaultEntityManager_ValidatorLoaderService', false],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
            'doctrine.orm.default_manager_configurator' => ['privates', 'doctrine.orm.default_manager_configurator', 'getDoctrine_Orm_DefaultManagerConfiguratorService', false],
            'doctrine.orm.default_metadata_cache' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService', false],
            'doctrine.orm.default_metadata_driver' => ['privates', 'doctrine.orm.default_metadata_driver', 'getDoctrine_Orm_DefaultMetadataDriverService', false],
            'doctrine.orm.default_query_cache' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.query', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService', false],
            'doctrine.orm.default_result_cache' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService', false],
            'doctrine.orm.metadata.annotation_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'doctrine.orm.naming_strategy.underscore_number_aware' => ['privates', 'doctrine.orm.naming_strategy.underscore_number_aware', 'getDoctrine_Orm_NamingStrategy_UnderscoreNumberAwareService', false],
            'doctrine.orm.proxy_cache_warmer' => ['privates', 'doctrine.orm.proxy_cache_warmer', 'getDoctrine_Orm_ProxyCacheWarmerService', false],
            'doctrine.orm.quote_strategy.default' => ['privates', 'doctrine.orm.quote_strategy.default', 'getDoctrine_Orm_QuoteStrategy_DefaultService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'doctrine.orm.validator_initializer' => ['privates', 'doctrine.orm.validator_initializer', 'getDoctrine_Orm_ValidatorInitializerService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine.twig.doctrine_extension' => ['privates', 'doctrine.twig.doctrine_extension', 'getDoctrine_Twig_DoctrineExtensionService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'error_handler.error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'error_handler.error_renderer.serializer' => ['privates', 'error_handler.error_renderer.serializer', 'getErrorHandler_ErrorRenderer_SerializerService', false],
            'error_renderer' => ['privates', 'error_handler.error_renderer.serializer', 'getErrorHandler_ErrorRenderer_SerializerService', false],
            'error_renderer.html' => ['privates', 'twig.error_renderer.html', 'getTwig_ErrorRenderer_HtmlService', false],
            'error_renderer.serializer' => ['privates', 'error_handler.error_renderer.serializer', 'getErrorHandler_ErrorRenderer_SerializerService', false],
            'exception_listener' => ['privates', 'exception_listener', 'getExceptionListenerService', false],
            'file_locator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'form.choice_list_factory' => ['privates', 'form.choice_list_factory.cached', 'getForm_ChoiceListFactory_CachedService', false],
            'form.choice_list_factory.cached' => ['privates', 'form.choice_list_factory.cached', 'getForm_ChoiceListFactory_CachedService', false],
            'form.choice_list_factory.default' => ['privates', 'form.choice_list_factory.default', 'getForm_ChoiceListFactory_DefaultService', false],
            'form.choice_list_factory.property_access' => ['privates', 'form.choice_list_factory.property_access', 'getForm_ChoiceListFactory_PropertyAccessService', false],
            'form.extension' => ['privates', 'form.extension', 'getForm_ExtensionService', false],
            'form.property_accessor' => ['privates', 'property_accessor', 'getPropertyAccessorService', false],
            'form.registry' => ['privates', 'form.registry', 'getForm_RegistryService', false],
            'form.resolved_type_factory' => ['privates', 'form.resolved_type_factory', 'getForm_ResolvedTypeFactoryService', false],
            'form.server_params' => ['privates', 'form.server_params', 'getForm_ServerParamsService', false],
            'form.type.choice' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'form.type.entity' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'form.type.form' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
            'form.type_extension.csrf' => ['privates', 'form.type_extension.csrf', 'getForm_TypeExtension_CsrfService', false],
            'form.type_extension.form.data_collector' => ['privates', 'form.type_extension.form.data_collector', 'getForm_TypeExtension_Form_DataCollectorService', false],
            'form.type_extension.form.http_foundation' => ['privates', 'form.type_extension.form.http_foundation', 'getForm_TypeExtension_Form_HttpFoundationService', false],
            'form.type_extension.form.request_handler' => ['privates', 'form.type_extension.form.request_handler', 'getForm_TypeExtension_Form_RequestHandlerService', false],
            'form.type_extension.form.transformation_failure_handling' => ['privates', 'form.type_extension.form.transformation_failure_handling', 'getForm_TypeExtension_Form_TransformationFailureHandlingService', false],
            'form.type_extension.form.validator' => ['privates', 'form.type_extension.form.validator', 'getForm_TypeExtension_Form_ValidatorService', false],
            'form.type_extension.repeated.validator' => ['privates', 'form.type_extension.repeated.validator', 'getForm_TypeExtension_Repeated_ValidatorService', false],
            'form.type_extension.submit.validator' => ['privates', 'form.type_extension.submit.validator', 'getForm_TypeExtension_Submit_ValidatorService', false],
            'form.type_extension.upload.validator' => ['privates', 'form.type_extension.upload.validator', 'getForm_TypeExtension_Upload_ValidatorService', false],
            'form.type_guesser.doctrine' => ['privates', 'form.type_guesser.doctrine', 'getForm_TypeGuesser_DoctrineService', false],
            'form.type_guesser.validator' => ['privates', 'form.type_guesser.validator', 'getForm_TypeGuesser_ValidatorService', false],
            'fragment.handler' => ['privates', 'fragment.handler', 'getFragment_HandlerService', false],
            'fragment.renderer.inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
            'framework_extra_bundle.argument_name_convertor' => ['privates', 'framework_extra_bundle.argument_name_convertor', 'getFrameworkExtraBundle_ArgumentNameConvertorService', false],
            'framework_extra_bundle.date_time_param_converter' => ['privates', 'framework_extra_bundle.date_time_param_converter', 'getFrameworkExtraBundle_DateTimeParamConverterService', false],
            'framework_extra_bundle.event.is_granted' => ['privates', 'framework_extra_bundle.event.is_granted', 'getFrameworkExtraBundle_Event_IsGrantedService', false],
            'http_client' => ['privates', '.debug.http_client', 'get_Debug_HttpClientService', false],
            'identity_translator' => ['privates', 'identity_translator', 'getIdentityTranslatorService', false],
            'knp_paginator.helper.processor' => ['privates', 'knp_paginator.helper.processor', 'getKnpPaginator_Helper_ProcessorService', false],
            'knp_paginator.subscriber.filtration' => ['privates', 'knp_paginator.subscriber.filtration', 'getKnpPaginator_Subscriber_FiltrationService', false],
            'knp_paginator.subscriber.paginate' => ['privates', 'knp_paginator.subscriber.paginate', 'getKnpPaginator_Subscriber_PaginateService', false],
            'knp_paginator.subscriber.sliding_pagination' => ['privates', 'knp_paginator.subscriber.sliding_pagination', 'getKnpPaginator_Subscriber_SlidingPaginationService', false],
            'knp_paginator.subscriber.sortable' => ['privates', 'knp_paginator.subscriber.sortable', 'getKnpPaginator_Subscriber_SortableService', false],
            'knp_paginator.twig.extension.pagination' => ['privates', 'knp_paginator.twig.extension.pagination', 'getKnpPaginator_Twig_Extension_PaginationService', false],
            'liip_test_fixtures.services_database_tools.mongodb_database_tool' => ['privates', 'liip_test_fixtures.services_database_tools.mongodb_database_tool', 'getLiipTestFixtures_ServicesDatabaseTools_MongodbDatabaseToolService', false],
            'liip_test_fixtures.services_database_tools.orm_database_tool' => ['privates', 'liip_test_fixtures.services_database_tools.orm_database_tool', 'getLiipTestFixtures_ServicesDatabaseTools_OrmDatabaseToolService', false],
            'liip_test_fixtures.services_database_tools.orm_sqlite_database_tool' => ['privates', 'liip_test_fixtures.services_database_tools.orm_sqlite_database_tool', 'getLiipTestFixtures_ServicesDatabaseTools_OrmSqliteDatabaseToolService', false],
            'liip_test_fixtures.services_database_tools.phpcr_database_tool' => ['privates', 'liip_test_fixtures.services_database_tools.phpcr_database_tool', 'getLiipTestFixtures_ServicesDatabaseTools_PhpcrDatabaseToolService', false],
            'locale_aware_listener' => ['privates', 'locale_aware_listener', 'getLocaleAwareListenerService', false],
            'locale_listener' => ['privates', 'locale_listener', 'getLocaleListenerService', false],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'mailer.data_collector' => ['privates', 'mailer.data_collector', 'getMailer_DataCollectorService', false],
            'mailer.envelope_listener' => ['privates', 'mailer.envelope_listener', 'getMailer_EnvelopeListenerService', false],
            'mailer.logger_message_listener' => ['privates', 'mailer.logger_message_listener', 'getMailer_LoggerMessageListenerService', false],
            'mime_types' => ['privates', 'mime_types', 'getMimeTypesService', false],
            'monolog.command.server_log' => ['privates', 'monolog.command.server_log', 'getMonolog_Command_ServerLogService', false],
            'monolog.handler.main' => ['privates', 'monolog.handler.main', 'getMonolog_Handler_MainService', false],
            'monolog.handler.main.http_code_strategy' => ['privates', 'monolog.handler.main.http_code_strategy', 'getMonolog_Handler_Main_HttpCodeStrategyService', false],
            'monolog.handler.nested' => ['privates', 'monolog.handler.nested', 'getMonolog_Handler_NestedService', false],
            'monolog.handler.null_internal' => ['privates', 'monolog.handler.null_internal', 'getMonolog_Handler_NullInternalService', false],
            'monolog.logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'monolog.logger.cache' => ['privates', 'monolog.logger.cache', 'getMonolog_Logger_CacheService', false],
            'monolog.logger.console' => ['privates', 'monolog.logger.console', 'getMonolog_Logger_ConsoleService', false],
            'monolog.logger.debug' => ['privates', 'monolog.logger.debug', 'getMonolog_Logger_DebugService', false],
            'monolog.logger.doctrine' => ['privates', 'monolog.logger.doctrine', 'getMonolog_Logger_DoctrineService', false],
            'monolog.logger.event' => ['privates', 'monolog.logger.event', 'getMonolog_Logger_EventService', false],
            'monolog.logger.http_client' => ['privates', 'monolog.logger.http_client', 'getMonolog_Logger_HttpClientService', false],
            'monolog.logger.php' => ['privates', 'monolog.logger.php', 'getMonolog_Logger_PhpService', false],
            'monolog.logger.profiler' => ['privates', 'monolog.logger.profiler', 'getMonolog_Logger_ProfilerService', false],
            'monolog.logger.request' => ['privates', 'monolog.logger.request', 'getMonolog_Logger_RequestService', false],
            'monolog.logger.router' => ['privates', 'monolog.logger.router', 'getMonolog_Logger_RouterService', false],
            'monolog.logger.security' => ['privates', 'monolog.logger.security', 'getMonolog_Logger_SecurityService', false],
            'monolog.processor.psr_log_message' => ['privates', 'monolog.processor.psr_log_message', 'getMonolog_Processor_PsrLogMessageService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'profiler.storage' => ['privates', 'profiler.storage', 'getProfiler_StorageService', false],
            'profiler_listener' => ['privates', 'profiler_listener', 'getProfilerListenerService', false],
            'property_accessor' => ['privates', 'property_accessor', 'getPropertyAccessorService', false],
            'property_info' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'property_info.php_doc_extractor' => ['privates', 'property_info.php_doc_extractor', 'getPropertyInfo_PhpDocExtractorService', false],
            'property_info.reflection_extractor' => ['privates', 'property_info.reflection_extractor', 'getPropertyInfo_ReflectionExtractorService', false],
            'property_info.serializer_extractor' => ['privates', 'property_info.serializer_extractor', 'getPropertyInfo_SerializerExtractorService', false],
            'resolve_controller_name_subscriber' => ['privates', '.legacy_resolve_controller_name_subscriber', 'get_LegacyResolveControllerNameSubscriberService', false],
            'response_listener' => ['privates', 'response_listener', 'getResponseListenerService', false],
            'router.cache_warmer' => ['privates', 'router.cache_warmer', 'getRouter_CacheWarmerService', false],
            'router.default' => ['services', 'router', 'getRouterService', false],
            'router.request_context' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'router_listener' => ['privates', 'router_listener', 'getRouterListenerService', false],
            'routing.loader.annotation' => ['privates', 'routing.loader.annotation', 'getRouting_Loader_AnnotationService', false],
            'routing.loader.annotation.directory' => ['privates', 'routing.loader.annotation.directory', 'getRouting_Loader_Annotation_DirectoryService', false],
            'routing.loader.annotation.file' => ['privates', 'routing.loader.annotation.file', 'getRouting_Loader_Annotation_FileService', false],
            'routing.loader.container' => ['privates', 'routing.loader.container', 'getRouting_Loader_ContainerService', false],
            'routing.loader.directory' => ['privates', 'routing.loader.directory', 'getRouting_Loader_DirectoryService', false],
            'routing.loader.glob' => ['privates', 'routing.loader.glob', 'getRouting_Loader_GlobService', false],
            'routing.loader.php' => ['privates', 'routing.loader.php', 'getRouting_Loader_PhpService', false],
            'routing.loader.xml' => ['privates', 'routing.loader.xml', 'getRouting_Loader_XmlService', false],
            'routing.loader.yml' => ['privates', 'routing.loader.yml', 'getRouting_Loader_YmlService', false],
            'routing.resolver' => ['privates', 'routing.resolver', 'getRouting_ResolverService', false],
            'secrets.local_vault' => ['privates', 'secrets.local_vault', 'getSecrets_LocalVaultService', false],
            'secrets.vault' => ['privates', 'secrets.vault', 'getSecrets_VaultService', false],
            'security.access.authenticated_voter' => ['privates', 'security.access.authenticated_voter', 'getSecurity_Access_AuthenticatedVoterService', false],
            'security.access.decision_manager' => ['privates', 'debug.security.access.decision_manager', 'getDebug_Security_Access_DecisionManagerService', false],
            'security.access.expression_voter' => ['privates', 'security.access.expression_voter', 'getSecurity_Access_ExpressionVoterService', false],
            'security.access.simple_role_voter' => ['privates', 'security.access.simple_role_voter', 'getSecurity_Access_SimpleRoleVoterService', false],
            'security.access_listener' => ['privates', 'security.access_listener', 'getSecurity_AccessListenerService', false],
            'security.access_map' => ['privates', 'security.access_map', 'getSecurity_AccessMapService', false],
            'security.authentication.failure_handler.main.form_login' => ['privates', 'security.authentication.failure_handler.main.form_login', 'getSecurity_Authentication_FailureHandler_Main_FormLoginService', false],
            'security.authentication.form_entry_point.main' => ['privates', 'security.authentication.form_entry_point.main', 'getSecurity_Authentication_FormEntryPoint_MainService', false],
            'security.authentication.guard_handler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', false],
            'security.authentication.listener.anonymous.main' => ['privates', 'security.authentication.listener.anonymous.main', 'getSecurity_Authentication_Listener_Anonymous_MainService', false],
            'security.authentication.listener.form.main' => ['privates', 'security.authentication.listener.form.main', 'getSecurity_Authentication_Listener_Form_MainService', false],
            'security.authentication.listener.guard.main' => ['privates', 'security.authentication.listener.guard.main', 'getSecurity_Authentication_Listener_Guard_MainService', false],
            'security.authentication.manager' => ['privates', 'security.authentication.manager', 'getSecurity_Authentication_ManagerService', false],
            'security.authentication.provider.anonymous.main' => ['privates', 'security.authentication.provider.anonymous.main', 'getSecurity_Authentication_Provider_Anonymous_MainService', false],
            'security.authentication.provider.dao.main' => ['privates', 'security.authentication.provider.dao.main', 'getSecurity_Authentication_Provider_Dao_MainService', false],
            'security.authentication.provider.guard.main' => ['privates', 'security.authentication.provider.guard.main', 'getSecurity_Authentication_Provider_Guard_MainService', false],
            'security.authentication.retry_entry_point' => ['privates', 'security.authentication.retry_entry_point', 'getSecurity_Authentication_RetryEntryPointService', false],
            'security.authentication.session_strategy' => ['privates', 'security.authentication.session_strategy', 'getSecurity_Authentication_SessionStrategyService', false],
            'security.authentication.session_strategy.main' => ['privates', 'security.authentication.session_strategy', 'getSecurity_Authentication_SessionStrategyService', false],
            'security.authentication.success_handler.main.form_login' => ['privates', 'security.authentication.success_handler.main.form_login', 'getSecurity_Authentication_SuccessHandler_Main_FormLoginService', false],
            'security.authentication.trust_resolver' => ['privates', 'security.authentication.trust_resolver', 'getSecurity_Authentication_TrustResolverService', false],
            'security.channel_listener' => ['privates', 'security.channel_listener', 'getSecurity_ChannelListenerService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'security.context_listener.0' => ['privates', 'security.context_listener.0', 'getSecurity_ContextListener_0Service', false],
            'security.csrf.token_generator' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', false],
            'security.csrf.token_storage' => ['privates', 'security.csrf.token_storage', 'getSecurity_Csrf_TokenStorageService', false],
            'security.encoder_factory' => ['privates', 'security.encoder_factory.generic', 'getSecurity_EncoderFactory_GenericService', false],
            'security.encoder_factory.generic' => ['privates', 'security.encoder_factory.generic', 'getSecurity_EncoderFactory_GenericService', false],
            'security.exception_listener.main' => ['privates', 'security.exception_listener.main', 'getSecurity_ExceptionListener_MainService', false],
            'security.expression_language' => ['privates', 'security.expression_language', 'getSecurity_ExpressionLanguageService', false],
            'security.firewall' => ['privates', 'debug.security.firewall', 'getDebug_Security_FirewallService', false],
            'security.firewall.map' => ['privates', 'security.firewall.map', 'getSecurity_Firewall_MapService', false],
            'security.firewall.map.config.dev' => ['privates', 'security.firewall.map.config.dev', 'getSecurity_Firewall_Map_Config_DevService', false],
            'security.firewall.map.config.main' => ['privates', 'security.firewall.map.config.main', 'getSecurity_Firewall_Map_Config_MainService', false],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
            'security.helper' => ['privates', 'security.helper', 'getSecurity_HelperService', false],
            'security.http_utils' => ['privates', 'security.http_utils', 'getSecurity_HttpUtilsService', false],
            'security.logout.handler.csrf_token_clearing' => ['privates', 'security.logout.handler.csrf_token_clearing', 'getSecurity_Logout_Handler_CsrfTokenClearingService', false],
            'security.logout.handler.session' => ['privates', 'security.logout.handler.session', 'getSecurity_Logout_Handler_SessionService', false],
            'security.logout.success_handler.main' => ['privates', 'security.logout.success_handler.main', 'getSecurity_Logout_SuccessHandler_MainService', false],
            'security.logout_listener.main' => ['privates', 'security.logout_listener.main', 'getSecurity_LogoutListener_MainService', false],
            'security.logout_url_generator' => ['privates', 'security.logout_url_generator', 'getSecurity_LogoutUrlGeneratorService', false],
            'security.rememberme.response_listener' => ['privates', 'security.rememberme.response_listener', 'getSecurity_Rememberme_ResponseListenerService', false],
            'security.role_hierarchy' => ['privates', 'security.role_hierarchy', 'getSecurity_RoleHierarchyService', false],
            'security.untracked_token_storage' => ['privates', 'security.untracked_token_storage', 'getSecurity_UntrackedTokenStorageService', false],
            'security.user.provider.concrete.app_user_provider' => ['privates', 'security.user.provider.concrete.app_user_provider', 'getSecurity_User_Provider_Concrete_AppUserProviderService', false],
            'security.user_checker' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'security.user_checker.main' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'security.user_password_encoder.generic' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'security.user_value_resolver' => ['privates', 'debug.security.user_value_resolver', 'getDebug_Security_UserValueResolverService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'sensio_framework_extra.cache.listener' => ['privates', 'sensio_framework_extra.cache.listener', 'getSensioFrameworkExtra_Cache_ListenerService', false],
            'sensio_framework_extra.controller.listener' => ['privates', 'sensio_framework_extra.controller.listener', 'getSensioFrameworkExtra_Controller_ListenerService', false],
            'sensio_framework_extra.converter.doctrine.orm' => ['privates', 'sensio_framework_extra.converter.doctrine.orm', 'getSensioFrameworkExtra_Converter_Doctrine_OrmService', false],
            'sensio_framework_extra.converter.doctrine.orm.expression_language' => ['privates', 'sensio_framework_extra.converter.doctrine.orm.expression_language.default', 'getSensioFrameworkExtra_Converter_Doctrine_Orm_ExpressionLanguage_DefaultService', false],
            'sensio_framework_extra.converter.doctrine.orm.expression_language.default' => ['privates', 'sensio_framework_extra.converter.doctrine.orm.expression_language.default', 'getSensioFrameworkExtra_Converter_Doctrine_Orm_ExpressionLanguage_DefaultService', false],
            'sensio_framework_extra.converter.listener' => ['privates', 'sensio_framework_extra.converter.listener', 'getSensioFrameworkExtra_Converter_ListenerService', false],
            'sensio_framework_extra.converter.manager' => ['privates', 'sensio_framework_extra.converter.manager', 'getSensioFrameworkExtra_Converter_ManagerService', false],
            'sensio_framework_extra.security.expression_language' => ['privates', 'sensio_framework_extra.security.expression_language.default', 'getSensioFrameworkExtra_Security_ExpressionLanguage_DefaultService', false],
            'sensio_framework_extra.security.expression_language.default' => ['privates', 'sensio_framework_extra.security.expression_language.default', 'getSensioFrameworkExtra_Security_ExpressionLanguage_DefaultService', false],
            'sensio_framework_extra.security.listener' => ['privates', 'sensio_framework_extra.security.listener', 'getSensioFrameworkExtra_Security_ListenerService', false],
            'sensio_framework_extra.view.guesser' => ['privates', 'sensio_framework_extra.view.guesser', 'getSensioFrameworkExtra_View_GuesserService', false],
            'sensio_framework_extra.view.listener' => ['privates', 'sensio_framework_extra.view.listener', 'getSensioFrameworkExtra_View_ListenerService', false],
            'serializer.denormalizer.array' => ['privates', 'serializer.denormalizer.array', 'getSerializer_Denormalizer_ArrayService', false],
            'serializer.encoder.csv' => ['privates', 'serializer.encoder.csv', 'getSerializer_Encoder_CsvService', false],
            'serializer.encoder.json' => ['privates', 'serializer.encoder.json', 'getSerializer_Encoder_JsonService', false],
            'serializer.encoder.xml' => ['privates', 'serializer.encoder.xml', 'getSerializer_Encoder_XmlService', false],
            'serializer.encoder.yaml' => ['privates', 'serializer.encoder.yaml', 'getSerializer_Encoder_YamlService', false],
            'serializer.mapping.cache_warmer' => ['privates', 'serializer.mapping.cache_warmer', 'getSerializer_Mapping_CacheWarmerService', false],
            'serializer.mapping.chain_loader' => ['privates', 'serializer.mapping.chain_loader', 'getSerializer_Mapping_ChainLoaderService', false],
            'serializer.mapping.class_discriminator_resolver' => ['privates', 'serializer.mapping.class_discriminator_resolver', 'getSerializer_Mapping_ClassDiscriminatorResolverService', false],
            'serializer.mapping.class_metadata_factory' => ['privates', 'serializer.mapping.class_metadata_factory', 'getSerializer_Mapping_ClassMetadataFactoryService', false],
            'serializer.name_converter.metadata_aware' => ['privates', 'serializer.name_converter.metadata_aware', 'getSerializer_NameConverter_MetadataAwareService', false],
            'serializer.normalizer.constraint_violation_list' => ['privates', 'serializer.normalizer.constraint_violation_list', 'getSerializer_Normalizer_ConstraintViolationListService', false],
            'serializer.normalizer.data_uri' => ['privates', 'serializer.normalizer.data_uri', 'getSerializer_Normalizer_DataUriService', false],
            'serializer.normalizer.dateinterval' => ['privates', 'serializer.normalizer.dateinterval', 'getSerializer_Normalizer_DateintervalService', false],
            'serializer.normalizer.datetime' => ['privates', 'serializer.normalizer.datetime', 'getSerializer_Normalizer_DatetimeService', false],
            'serializer.normalizer.datetimezone' => ['privates', 'serializer.normalizer.datetimezone', 'getSerializer_Normalizer_DatetimezoneService', false],
            'serializer.normalizer.json_serializable' => ['privates', 'serializer.normalizer.json_serializable', 'getSerializer_Normalizer_JsonSerializableService', false],
            'serializer.normalizer.object' => ['privates', 'serializer.normalizer.object', 'getSerializer_Normalizer_ObjectService', false],
            'serializer.normalizer.problem' => ['privates', 'serializer.normalizer.problem', 'getSerializer_Normalizer_ProblemService', false],
            'serializer.property_accessor' => ['privates', 'property_accessor', 'getPropertyAccessorService', false],
            'session.attribute_bag' => ['privates', 'session.attribute_bag', 'getSession_AttributeBagService', false],
            'session.flash_bag' => ['privates', 'session.flash_bag', 'getSession_FlashBagService', false],
            'session.storage' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session.storage.filesystem' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session.storage.metadata_bag' => ['privates', 'session.storage.metadata_bag', 'getSession_Storage_MetadataBagService', false],
            'session.storage.mock_file' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session_listener' => ['privates', 'session_listener', 'getSessionListenerService', false],
            'streamed_response_listener' => ['privates', 'streamed_response_listener', 'getStreamedResponseListenerService', false],
            'test.client.cookiejar' => [false, 'test.client.cookiejar', 'getTest_Client_CookiejarService', false],
            'test.client.history' => [false, 'test.client.history', 'getTest_Client_HistoryService', false],
            'test.session.listener' => ['privates', 'test.session.listener', 'getTest_Session_ListenerService', false],
            'translation.dumper.csv' => ['privates', 'translation.dumper.csv', 'getTranslation_Dumper_CsvService', false],
            'translation.dumper.ini' => ['privates', 'translation.dumper.ini', 'getTranslation_Dumper_IniService', false],
            'translation.dumper.json' => ['privates', 'translation.dumper.json', 'getTranslation_Dumper_JsonService', false],
            'translation.dumper.mo' => ['privates', 'translation.dumper.mo', 'getTranslation_Dumper_MoService', false],
            'translation.dumper.php' => ['privates', 'translation.dumper.php', 'getTranslation_Dumper_PhpService', false],
            'translation.dumper.po' => ['privates', 'translation.dumper.po', 'getTranslation_Dumper_PoService', false],
            'translation.dumper.qt' => ['privates', 'translation.dumper.qt', 'getTranslation_Dumper_QtService', false],
            'translation.dumper.res' => ['privates', 'translation.dumper.res', 'getTranslation_Dumper_ResService', false],
            'translation.dumper.xliff' => ['privates', 'translation.dumper.xliff', 'getTranslation_Dumper_XliffService', false],
            'translation.dumper.yaml' => ['privates', 'translation.dumper.yaml', 'getTranslation_Dumper_YamlService', false],
            'translation.dumper.yml' => ['privates', 'translation.dumper.yml', 'getTranslation_Dumper_YmlService', false],
            'translation.extractor' => ['privates', 'translation.extractor', 'getTranslation_ExtractorService', false],
            'translation.extractor.php' => ['privates', 'translation.extractor.php', 'getTranslation_Extractor_PhpService', false],
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
            'translation.reader' => ['privates', 'translation.reader', 'getTranslation_ReaderService', false],
            'translation.warmer' => ['privates', 'translation.warmer', 'getTranslation_WarmerService', false],
            'translation.writer' => ['privates', 'translation.writer', 'getTranslation_WriterService', false],
            'translator.data_collector' => ['services', 'translator', 'getTranslatorService', false],
            'translator.data_collector.inner' => ['privates', 'translator.default', 'getTranslator_DefaultService', false],
            'translator.default' => ['privates', 'translator.default', 'getTranslator_DefaultService', false],
            'translator.formatter' => ['privates', 'translator.formatter.default', 'getTranslator_Formatter_DefaultService', false],
            'translator.formatter.default' => ['privates', 'translator.formatter.default', 'getTranslator_Formatter_DefaultService', false],
            'twig.app_variable' => ['privates', 'twig.app_variable', 'getTwig_AppVariableService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'twig.configurator.environment' => ['privates', 'twig.configurator.environment', 'getTwig_Configurator_EnvironmentService', false],
            'twig.error_renderer.html' => ['privates', 'twig.error_renderer.html', 'getTwig_ErrorRenderer_HtmlService', false],
            'twig.error_renderer.html.inner' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'twig.extension.assets' => ['privates', 'twig.extension.assets', 'getTwig_Extension_AssetsService', false],
            'twig.extension.code' => ['privates', 'twig.extension.code', 'getTwig_Extension_CodeService', false],
            'twig.extension.debug.stopwatch' => ['privates', 'twig.extension.debug.stopwatch', 'getTwig_Extension_Debug_StopwatchService', false],
            'twig.extension.dump' => ['privates', 'twig.extension.dump', 'getTwig_Extension_DumpService', false],
            'twig.extension.expression' => ['privates', 'twig.extension.expression', 'getTwig_Extension_ExpressionService', false],
            'twig.extension.form' => ['privates', 'twig.extension.form', 'getTwig_Extension_FormService', false],
            'twig.extension.httpfoundation' => ['privates', 'twig.extension.httpfoundation', 'getTwig_Extension_HttpfoundationService', false],
            'twig.extension.httpkernel' => ['privates', 'twig.extension.httpkernel', 'getTwig_Extension_HttpkernelService', false],
            'twig.extension.logout_url' => ['privates', 'twig.extension.logout_url', 'getTwig_Extension_LogoutUrlService', false],
            'twig.extension.profiler' => ['privates', 'twig.extension.profiler', 'getTwig_Extension_ProfilerService', false],
            'twig.extension.routing' => ['privates', 'twig.extension.routing', 'getTwig_Extension_RoutingService', false],
            'twig.extension.security' => ['privates', 'twig.extension.security', 'getTwig_Extension_SecurityService', false],
            'twig.extension.security_csrf' => ['privates', 'twig.extension.security_csrf', 'getTwig_Extension_SecurityCsrfService', false],
            'twig.extension.trans' => ['privates', 'twig.extension.trans', 'getTwig_Extension_TransService', false],
            'twig.extension.weblink' => ['privates', 'twig.extension.weblink', 'getTwig_Extension_WeblinkService', false],
            'twig.extension.webprofiler' => ['privates', 'twig.extension.webprofiler', 'getTwig_Extension_WebprofilerService', false],
            'twig.extension.yaml' => ['privates', 'twig.extension.yaml', 'getTwig_Extension_YamlService', false],
            'twig.form.engine' => ['privates', 'twig.form.engine', 'getTwig_Form_EngineService', false],
            'twig.form.renderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
            'twig.loader' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.loader.filesystem' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.loader.native_filesystem' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.mailer.message_listener' => ['privates', 'twig.mailer.message_listener', 'getTwig_Mailer_MessageListenerService', false],
            'twig.mime_body_renderer' => ['privates', 'twig.mime_body_renderer', 'getTwig_MimeBodyRendererService', false],
            'twig.missing_extension_suggestor' => ['privates', 'twig.missing_extension_suggestor', 'getTwig_MissingExtensionSuggestorService', false],
            'twig.profile' => ['privates', 'twig.profile', 'getTwig_ProfileService', false],
            'twig.runtime.httpkernel' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'twig.runtime.security_csrf' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'twig.runtime_loader' => ['privates', 'twig.runtime_loader', 'getTwig_RuntimeLoaderService', false],
            'twig.template_cache_warmer' => ['privates', 'twig.template_cache_warmer', 'getTwig_TemplateCacheWarmerService', false],
            'twig.template_iterator' => ['privates', 'twig.template_iterator', 'getTwig_TemplateIteratorService', false],
            'twig.translation.extractor' => ['privates', 'twig.translation.extractor', 'getTwig_Translation_ExtractorService', false],
            'url_helper' => ['privates', 'url_helper', 'getUrlHelperService', false],
            'validate_request_listener' => ['privates', 'validate_request_listener', 'getValidateRequestListenerService', false],
            'validator.builder' => ['privates', 'validator.builder', 'getValidator_BuilderService', false],
            'validator.email' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'validator.mapping.cache_warmer' => ['privates', 'validator.mapping.cache_warmer', 'getValidator_Mapping_CacheWarmerService', false],
            'validator.mapping.class_metadata_factory' => ['services', 'validator', 'getValidatorService', false],
            'validator.not_compromised_password' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'validator.property_info_loader' => ['privates', 'validator.property_info_loader', 'getValidator_PropertyInfoLoaderService', false],
            'validator.validator_factory' => ['privates', 'validator.validator_factory', 'getValidator_ValidatorFactoryService', false],
            'var_dumper.cli_dumper' => ['privates', 'var_dumper.contextualized_cli_dumper', 'getVarDumper_ContextualizedCliDumperService', false],
            'var_dumper.command.server_dump' => ['privates', 'var_dumper.command.server_dump', 'getVarDumper_Command_ServerDumpService', false],
            'var_dumper.contextualized_cli_dumper' => ['privates', 'var_dumper.contextualized_cli_dumper', 'getVarDumper_ContextualizedCliDumperService', false],
            'var_dumper.contextualized_cli_dumper.inner' => ['privates', 'var_dumper.contextualized_cli_dumper.inner', 'getVarDumper_ContextualizedCliDumper_InnerService', false],
            'var_dumper.dump_server' => ['privates', 'var_dumper.dump_server', 'getVarDumper_DumpServerService', false],
            'var_dumper.html_dumper' => ['privates', 'var_dumper.html_dumper', 'getVarDumper_HtmlDumperService', false],
            'web_link.add_link_header_listener' => ['privates', 'web_link.add_link_header_listener', 'getWebLink_AddLinkHeaderListenerService', false],
            'web_profiler.csp.handler' => ['privates', 'web_profiler.csp.handler', 'getWebProfiler_Csp_HandlerService', false],
        ], [
            'App\\DataFixtures\\AppFixtures' => '?',
            'App\\DataFixtures\\UserFixtures' => '?',
            'App\\Form\\FriendsSearchType' => '?',
            'App\\Form\\InvitationsType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\TasksType' => '?',
            'App\\Repository\\InvitationsRepository' => '?',
            'App\\Repository\\TasksTypeRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
            'App\\Security\\LoginFormAuthenticator' => '?',
            'Doctrine\\Common\\Annotations\\Reader' => '?',
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => '?',
            'Doctrine\\DBAL\\Connection' => '?',
            'Doctrine\\DBAL\\Driver\\Connection' => '?',
            'Doctrine\\ORM\\EntityManagerInterface' => '?',
            'Doctrine\\Persistence\\ManagerRegistry' => '?',
            'Knp\\Component\\Pager\\PaginatorInterface' => '?',
            'Psr\\Cache\\CacheItemPoolInterface' => '?',
            'Psr\\Container\\ContainerInterface' => '?',
            'Psr\\Container\\ContainerInterface $parameterBag' => '?',
            'Psr\\Log\\LoggerInterface' => '?',
            'Psr\\Log\\LoggerInterface $cacheLogger' => '?',
            'Psr\\Log\\LoggerInterface $consoleLogger' => '?',
            'Psr\\Log\\LoggerInterface $debugLogger' => '?',
            'Psr\\Log\\LoggerInterface $doctrineLogger' => '?',
            'Psr\\Log\\LoggerInterface $eventLogger' => '?',
            'Psr\\Log\\LoggerInterface $httpClientLogger' => '?',
            'Psr\\Log\\LoggerInterface $phpLogger' => '?',
            'Psr\\Log\\LoggerInterface $profilerLogger' => '?',
            'Psr\\Log\\LoggerInterface $requestLogger' => '?',
            'Psr\\Log\\LoggerInterface $routerLogger' => '?',
            'Psr\\Log\\LoggerInterface $securityLogger' => '?',
            'Symfony\\Component\\Asset\\Packages' => '?',
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Component\\Filesystem\\Filesystem' => '?',
            'Symfony\\Component\\Form\\FormFactoryInterface' => '?',
            'Symfony\\Component\\Form\\FormRegistryInterface' => '?',
            'Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\RequestStack' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\UrlHelper' => '?',
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => '?',
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => '?',
            'Symfony\\Component\\HttpKernel\\KernelInterface' => '?',
            'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface' => '?',
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => '?',
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => '?',
            'Symfony\\Component\\Routing\\RequestContext' => '?',
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => '?',
            'Symfony\\Component\\Routing\\RouterInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Security' => '?',
            'Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\User\\UserProviderInterface' => '?',
            'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface' => '?',
            'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface' => '?',
            'Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface' => '?',
            'Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler' => '?',
            'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils' => '?',
            'Symfony\\Component\\Security\\Http\\Firewall' => '?',
            'Symfony\\Component\\Security\\Http\\HttpUtils' => '?',
            'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface' => '?',
            'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface' => '?',
            'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface' => '?',
            'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface' => '?',
            'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface' => '?',
            'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface' => '?',
            'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface' => '?',
            'Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer' => '?',
            'Symfony\\Component\\Serializer\\SerializerInterface' => '?',
            'Symfony\\Component\\Stopwatch\\Stopwatch' => '?',
            'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => '?',
            'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => '?',
            'Symfony\\Component\\Translation\\TranslatorInterface' => '?',
            'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => '?',
            'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface' => '?',
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Contracts\\HttpClient\\HttpClientInterface' => '?',
            'Symfony\\Contracts\\Translation\\TranslatorInterface' => '?',
            'Twig\\Environment' => '?',
            'Twig_Environment' => '?',
            'annotation_reader' => '?',
            'annotations.cache' => '?',
            'annotations.cache_warmer' => '?',
            'annotations.cached_reader' => '?',
            'annotations.dummy_registry' => '?',
            'annotations.reader' => '?',
            'argument_metadata_factory' => '?',
            'argument_resolver' => '?',
            'argument_resolver.controller_locator' => '?',
            'argument_resolver.default' => '?',
            'argument_resolver.not_tagged_controller' => '?',
            'argument_resolver.request' => '?',
            'argument_resolver.request_attribute' => '?',
            'argument_resolver.service' => '?',
            'argument_resolver.session' => '?',
            'argument_resolver.variadic' => '?',
            'assets._default_package' => '?',
            'assets.context' => '?',
            'assets.empty_version_strategy' => '?',
            'assets.packages' => '?',
            'cache.annotations' => '?',
            'cache.annotations.recorder_inner' => '?',
            'cache.app.recorder_inner' => '?',
            'cache.default_clearer' => '?',
            'cache.default_marshaller' => '?',
            'cache.default_pdo_provider' => '?',
            'cache.doctrine.orm.default.metadata.recorder_inner' => '?',
            'cache.doctrine.orm.default.query.recorder_inner' => '?',
            'cache.doctrine.orm.default.result.recorder_inner' => '?',
            'cache.property_access' => '?',
            'cache.property_info' => '?',
            'cache.property_info.recorder_inner' => '?',
            'cache.security_expression_language' => '?',
            'cache.security_expression_language.recorder_inner' => '?',
            'cache.serializer' => '?',
            'cache.serializer.recorder_inner' => '?',
            'cache.system.recorder_inner' => '?',
            'cache.validator' => '?',
            'cache.validator.recorder_inner' => '?',
            'config.resource.self_checking_resource_checker' => '?',
            'config_cache_factory' => '?',
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.form_debug' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_set' => '?',
            'console.command.translation_debug' => '?',
            'console.command.translation_update' => '?',
            'console.command.xliff_lint' => '?',
            'console.command.yaml_lint' => '?',
            'console.error_listener' => '?',
            'console.suggest_missing_package_subscriber' => '?',
            'container.env_var_processor' => '?',
            'controller_name_converter' => '?',
            'controller_resolver' => '?',
            'data_collector.ajax' => '?',
            'data_collector.cache' => '?',
            'data_collector.config' => '?',
            'data_collector.doctrine' => '?',
            'data_collector.events' => '?',
            'data_collector.exception' => '?',
            'data_collector.form' => '?',
            'data_collector.form.extractor' => '?',
            'data_collector.http_client' => '?',
            'data_collector.logger' => '?',
            'data_collector.memory' => '?',
            'data_collector.request' => '?',
            'data_collector.router' => '?',
            'data_collector.security' => '?',
            'data_collector.time' => '?',
            'data_collector.translation' => '?',
            'data_collector.twig' => '?',
            'data_collector.validator' => '?',
            'debug.argument_resolver' => '?',
            'debug.argument_resolver.default' => '?',
            'debug.argument_resolver.default.inner' => '?',
            'debug.argument_resolver.inner' => '?',
            'debug.argument_resolver.not_tagged_controller' => '?',
            'debug.argument_resolver.not_tagged_controller.inner' => '?',
            'debug.argument_resolver.request' => '?',
            'debug.argument_resolver.request.inner' => '?',
            'debug.argument_resolver.request_attribute' => '?',
            'debug.argument_resolver.request_attribute.inner' => '?',
            'debug.argument_resolver.service' => '?',
            'debug.argument_resolver.service.inner' => '?',
            'debug.argument_resolver.session' => '?',
            'debug.argument_resolver.session.inner' => '?',
            'debug.argument_resolver.variadic' => '?',
            'debug.argument_resolver.variadic.inner' => '?',
            'debug.controller_resolver' => '?',
            'debug.controller_resolver.inner' => '?',
            'debug.debug_handlers_listener' => '?',
            'debug.dump_listener' => '?',
            'debug.event_dispatcher' => '?',
            'debug.event_dispatcher.inner' => '?',
            'debug.file_link_formatter' => '?',
            'debug.file_link_formatter.url_format' => '?',
            'debug.log_processor' => '?',
            'debug.security.access.decision_manager' => '?',
            'debug.security.access.decision_manager.inner' => '?',
            'debug.security.firewall' => '?',
            'debug.security.user_value_resolver' => '?',
            'debug.security.user_value_resolver.inner' => '?',
            'debug.security.voter.security.access.authenticated_voter' => '?',
            'debug.security.voter.security.access.expression_voter' => '?',
            'debug.security.voter.security.access.simple_role_voter' => '?',
            'debug.security.voter.vote_listener' => '?',
            'debug.stopwatch' => '?',
            'debug.validator' => '?',
            'debug.validator.inner' => '?',
            'dependency_injection.config.container_parameters_resource_checker' => '?',
            'disallow_search_engine_index_response_listener' => '?',
            'doctrine.cache_clear_metadata_command' => '?',
            'doctrine.cache_clear_query_cache_command' => '?',
            'doctrine.cache_clear_result_command' => '?',
            'doctrine.cache_collection_region_command' => '?',
            'doctrine.clear_entity_region_command' => '?',
            'doctrine.clear_query_region_command' => '?',
            'doctrine.database_create_command' => '?',
            'doctrine.database_drop_command' => '?',
            'doctrine.database_import_command' => '?',
            'doctrine.dbal.connection_factory' => '?',
            'doctrine.dbal.default_connection.configuration' => '?',
            'doctrine.dbal.default_connection.event_manager' => '?',
            'doctrine.dbal.event_manager' => '?',
            'doctrine.dbal.logger' => '?',
            'doctrine.dbal.logger.chain.default' => '?',
            'doctrine.dbal.logger.profiling.default' => '?',
            'doctrine.ensure_production_settings_command' => '?',
            'doctrine.fixtures.loader' => '?',
            'doctrine.fixtures_load_command' => '?',
            'doctrine.mapping_convert_command' => '?',
            'doctrine.mapping_import_command' => '?',
            'doctrine.mapping_info_command' => '?',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => '?',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => '?',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => '?',
            'doctrine.orm.container_repository_factory' => '?',
            'doctrine.orm.default_annotation_metadata_driver' => '?',
            'doctrine.orm.default_configuration' => '?',
            'doctrine.orm.default_entity_listener_resolver' => '?',
            'doctrine.orm.default_entity_manager.event_manager' => '?',
            'doctrine.orm.default_entity_manager.property_info_extractor' => '?',
            'doctrine.orm.default_entity_manager.validator_loader' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.default_manager_configurator' => '?',
            'doctrine.orm.default_metadata_cache' => '?',
            'doctrine.orm.default_metadata_driver' => '?',
            'doctrine.orm.default_query_cache' => '?',
            'doctrine.orm.default_result_cache' => '?',
            'doctrine.orm.metadata.annotation_reader' => '?',
            'doctrine.orm.naming_strategy.underscore_number_aware' => '?',
            'doctrine.orm.proxy_cache_warmer' => '?',
            'doctrine.orm.quote_strategy.default' => '?',
            'doctrine.orm.validator.unique' => '?',
            'doctrine.orm.validator_initializer' => '?',
            'doctrine.query_dql_command' => '?',
            'doctrine.query_sql_command' => '?',
            'doctrine.schema_create_command' => '?',
            'doctrine.schema_drop_command' => '?',
            'doctrine.schema_update_command' => '?',
            'doctrine.schema_validate_command' => '?',
            'doctrine.twig.doctrine_extension' => '?',
            'doctrine_migrations.diff_command' => '?',
            'doctrine_migrations.dump_schema_command' => '?',
            'doctrine_migrations.execute_command' => '?',
            'doctrine_migrations.generate_command' => '?',
            'doctrine_migrations.latest_command' => '?',
            'doctrine_migrations.migrate_command' => '?',
            'doctrine_migrations.rollup_command' => '?',
            'doctrine_migrations.status_command' => '?',
            'doctrine_migrations.up_to_date_command' => '?',
            'doctrine_migrations.version_command' => '?',
            'error_handler.error_renderer.html' => '?',
            'error_handler.error_renderer.serializer' => '?',
            'error_renderer' => '?',
            'error_renderer.html' => '?',
            'error_renderer.serializer' => '?',
            'exception_listener' => '?',
            'file_locator' => '?',
            'form.choice_list_factory' => '?',
            'form.choice_list_factory.cached' => '?',
            'form.choice_list_factory.default' => '?',
            'form.choice_list_factory.property_access' => '?',
            'form.extension' => '?',
            'form.property_accessor' => '?',
            'form.registry' => '?',
            'form.resolved_type_factory' => '?',
            'form.server_params' => '?',
            'form.type.choice' => '?',
            'form.type.entity' => '?',
            'form.type.form' => '?',
            'form.type_extension.csrf' => '?',
            'form.type_extension.form.data_collector' => '?',
            'form.type_extension.form.http_foundation' => '?',
            'form.type_extension.form.request_handler' => '?',
            'form.type_extension.form.transformation_failure_handling' => '?',
            'form.type_extension.form.validator' => '?',
            'form.type_extension.repeated.validator' => '?',
            'form.type_extension.submit.validator' => '?',
            'form.type_extension.upload.validator' => '?',
            'form.type_guesser.doctrine' => '?',
            'form.type_guesser.validator' => '?',
            'fragment.handler' => '?',
            'fragment.renderer.inline' => '?',
            'framework_extra_bundle.argument_name_convertor' => '?',
            'framework_extra_bundle.date_time_param_converter' => '?',
            'framework_extra_bundle.event.is_granted' => '?',
            'http_client' => '?',
            'identity_translator' => '?',
            'knp_paginator.helper.processor' => '?',
            'knp_paginator.subscriber.filtration' => '?',
            'knp_paginator.subscriber.paginate' => '?',
            'knp_paginator.subscriber.sliding_pagination' => '?',
            'knp_paginator.subscriber.sortable' => '?',
            'knp_paginator.twig.extension.pagination' => '?',
            'liip_test_fixtures.services_database_tools.mongodb_database_tool' => '?',
            'liip_test_fixtures.services_database_tools.orm_database_tool' => '?',
            'liip_test_fixtures.services_database_tools.orm_sqlite_database_tool' => '?',
            'liip_test_fixtures.services_database_tools.phpcr_database_tool' => '?',
            'locale_aware_listener' => '?',
            'locale_listener' => '?',
            'logger' => '?',
            'mailer.data_collector' => '?',
            'mailer.envelope_listener' => '?',
            'mailer.logger_message_listener' => '?',
            'mime_types' => '?',
            'monolog.command.server_log' => '?',
            'monolog.handler.main' => '?',
            'monolog.handler.main.http_code_strategy' => '?',
            'monolog.handler.nested' => '?',
            'monolog.handler.null_internal' => '?',
            'monolog.logger' => '?',
            'monolog.logger.cache' => '?',
            'monolog.logger.console' => '?',
            'monolog.logger.debug' => '?',
            'monolog.logger.doctrine' => '?',
            'monolog.logger.event' => '?',
            'monolog.logger.http_client' => '?',
            'monolog.logger.php' => '?',
            'monolog.logger.profiler' => '?',
            'monolog.logger.request' => '?',
            'monolog.logger.router' => '?',
            'monolog.logger.security' => '?',
            'monolog.processor.psr_log_message' => '?',
            'parameter_bag' => '?',
            'profiler.storage' => '?',
            'profiler_listener' => '?',
            'property_accessor' => '?',
            'property_info' => '?',
            'property_info.php_doc_extractor' => '?',
            'property_info.reflection_extractor' => '?',
            'property_info.serializer_extractor' => '?',
            'resolve_controller_name_subscriber' => '?',
            'response_listener' => '?',
            'router.cache_warmer' => '?',
            'router.default' => '?',
            'router.request_context' => '?',
            'router_listener' => '?',
            'routing.loader.annotation' => '?',
            'routing.loader.annotation.directory' => '?',
            'routing.loader.annotation.file' => '?',
            'routing.loader.container' => '?',
            'routing.loader.directory' => '?',
            'routing.loader.glob' => '?',
            'routing.loader.php' => '?',
            'routing.loader.xml' => '?',
            'routing.loader.yml' => '?',
            'routing.resolver' => '?',
            'secrets.local_vault' => '?',
            'secrets.vault' => '?',
            'security.access.authenticated_voter' => '?',
            'security.access.decision_manager' => '?',
            'security.access.expression_voter' => '?',
            'security.access.simple_role_voter' => '?',
            'security.access_listener' => '?',
            'security.access_map' => '?',
            'security.authentication.failure_handler.main.form_login' => '?',
            'security.authentication.form_entry_point.main' => '?',
            'security.authentication.guard_handler' => '?',
            'security.authentication.listener.anonymous.main' => '?',
            'security.authentication.listener.form.main' => '?',
            'security.authentication.listener.guard.main' => '?',
            'security.authentication.manager' => '?',
            'security.authentication.provider.anonymous.main' => '?',
            'security.authentication.provider.dao.main' => '?',
            'security.authentication.provider.guard.main' => '?',
            'security.authentication.retry_entry_point' => '?',
            'security.authentication.session_strategy' => '?',
            'security.authentication.session_strategy.main' => '?',
            'security.authentication.success_handler.main.form_login' => '?',
            'security.authentication.trust_resolver' => '?',
            'security.channel_listener' => '?',
            'security.command.user_password_encoder' => '?',
            'security.context_listener.0' => '?',
            'security.csrf.token_generator' => '?',
            'security.csrf.token_storage' => '?',
            'security.encoder_factory' => '?',
            'security.encoder_factory.generic' => '?',
            'security.exception_listener.main' => '?',
            'security.expression_language' => '?',
            'security.firewall' => '?',
            'security.firewall.map' => '?',
            'security.firewall.map.config.dev' => '?',
            'security.firewall.map.config.main' => '?',
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
            'security.helper' => '?',
            'security.http_utils' => '?',
            'security.logout.handler.csrf_token_clearing' => '?',
            'security.logout.handler.session' => '?',
            'security.logout.success_handler.main' => '?',
            'security.logout_listener.main' => '?',
            'security.logout_url_generator' => '?',
            'security.rememberme.response_listener' => '?',
            'security.role_hierarchy' => '?',
            'security.untracked_token_storage' => '?',
            'security.user.provider.concrete.app_user_provider' => '?',
            'security.user_checker' => '?',
            'security.user_checker.main' => '?',
            'security.user_password_encoder.generic' => '?',
            'security.user_value_resolver' => '?',
            'security.validator.user_password' => '?',
            'sensio_framework_extra.cache.listener' => '?',
            'sensio_framework_extra.controller.listener' => '?',
            'sensio_framework_extra.converter.doctrine.orm' => '?',
            'sensio_framework_extra.converter.doctrine.orm.expression_language' => '?',
            'sensio_framework_extra.converter.doctrine.orm.expression_language.default' => '?',
            'sensio_framework_extra.converter.listener' => '?',
            'sensio_framework_extra.converter.manager' => '?',
            'sensio_framework_extra.security.expression_language' => '?',
            'sensio_framework_extra.security.expression_language.default' => '?',
            'sensio_framework_extra.security.listener' => '?',
            'sensio_framework_extra.view.guesser' => '?',
            'sensio_framework_extra.view.listener' => '?',
            'serializer.denormalizer.array' => '?',
            'serializer.encoder.csv' => '?',
            'serializer.encoder.json' => '?',
            'serializer.encoder.xml' => '?',
            'serializer.encoder.yaml' => '?',
            'serializer.mapping.cache_warmer' => '?',
            'serializer.mapping.chain_loader' => '?',
            'serializer.mapping.class_discriminator_resolver' => '?',
            'serializer.mapping.class_metadata_factory' => '?',
            'serializer.name_converter.metadata_aware' => '?',
            'serializer.normalizer.constraint_violation_list' => '?',
            'serializer.normalizer.data_uri' => '?',
            'serializer.normalizer.dateinterval' => '?',
            'serializer.normalizer.datetime' => '?',
            'serializer.normalizer.datetimezone' => '?',
            'serializer.normalizer.json_serializable' => '?',
            'serializer.normalizer.object' => '?',
            'serializer.normalizer.problem' => '?',
            'serializer.property_accessor' => '?',
            'session.attribute_bag' => '?',
            'session.flash_bag' => '?',
            'session.storage' => '?',
            'session.storage.filesystem' => '?',
            'session.storage.metadata_bag' => '?',
            'session.storage.mock_file' => '?',
            'session_listener' => '?',
            'streamed_response_listener' => '?',
            'test.client.cookiejar' => '?',
            'test.client.history' => '?',
            'test.session.listener' => '?',
            'translation.dumper.csv' => '?',
            'translation.dumper.ini' => '?',
            'translation.dumper.json' => '?',
            'translation.dumper.mo' => '?',
            'translation.dumper.php' => '?',
            'translation.dumper.po' => '?',
            'translation.dumper.qt' => '?',
            'translation.dumper.res' => '?',
            'translation.dumper.xliff' => '?',
            'translation.dumper.yaml' => '?',
            'translation.dumper.yml' => '?',
            'translation.extractor' => '?',
            'translation.extractor.php' => '?',
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
            'translation.reader' => '?',
            'translation.warmer' => '?',
            'translation.writer' => '?',
            'translator.data_collector' => '?',
            'translator.data_collector.inner' => '?',
            'translator.default' => '?',
            'translator.formatter' => '?',
            'translator.formatter.default' => '?',
            'twig.app_variable' => '?',
            'twig.command.debug' => '?',
            'twig.command.lint' => '?',
            'twig.configurator.environment' => '?',
            'twig.error_renderer.html' => '?',
            'twig.error_renderer.html.inner' => '?',
            'twig.extension.assets' => '?',
            'twig.extension.code' => '?',
            'twig.extension.debug.stopwatch' => '?',
            'twig.extension.dump' => '?',
            'twig.extension.expression' => '?',
            'twig.extension.form' => '?',
            'twig.extension.httpfoundation' => '?',
            'twig.extension.httpkernel' => '?',
            'twig.extension.logout_url' => '?',
            'twig.extension.profiler' => '?',
            'twig.extension.routing' => '?',
            'twig.extension.security' => '?',
            'twig.extension.security_csrf' => '?',
            'twig.extension.trans' => '?',
            'twig.extension.weblink' => '?',
            'twig.extension.webprofiler' => '?',
            'twig.extension.yaml' => '?',
            'twig.form.engine' => '?',
            'twig.form.renderer' => '?',
            'twig.loader' => '?',
            'twig.loader.filesystem' => '?',
            'twig.loader.native_filesystem' => '?',
            'twig.mailer.message_listener' => '?',
            'twig.mime_body_renderer' => '?',
            'twig.missing_extension_suggestor' => '?',
            'twig.profile' => '?',
            'twig.runtime.httpkernel' => '?',
            'twig.runtime.security_csrf' => '?',
            'twig.runtime_loader' => '?',
            'twig.template_cache_warmer' => '?',
            'twig.template_iterator' => '?',
            'twig.translation.extractor' => '?',
            'url_helper' => '?',
            'validate_request_listener' => '?',
            'validator.builder' => '?',
            'validator.email' => '?',
            'validator.expression' => '?',
            'validator.mapping.cache_warmer' => '?',
            'validator.mapping.class_metadata_factory' => '?',
            'validator.not_compromised_password' => '?',
            'validator.property_info_loader' => '?',
            'validator.validator_factory' => '?',
            'var_dumper.cli_dumper' => '?',
            'var_dumper.command.server_dump' => '?',
            'var_dumper.contextualized_cli_dumper' => '?',
            'var_dumper.contextualized_cli_dumper.inner' => '?',
            'var_dumper.dump_server' => '?',
            'var_dumper.html_dumper' => '?',
            'web_link.add_link_header_listener' => '?',
            'web_profiler.csp.handler' => '?',
        ]);
    }

    /**
     * Gets the public 'test.service_container' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Test\TestContainer
     */
    protected function getTest_ServiceContainerService()
    {
        return $this->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($this->services['kernel'] ?? $this->get('kernel', 1)), 'test.private_services_locator');
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService()), ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $a = ($this->privates['twig.missing_extension_suggestor'] ?? ($this->privates['twig.missing_extension_suggestor'] = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor()));

        $instance->addExtension(($this->privates['twig.extension.security_csrf'] ?? ($this->privates['twig.extension.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfExtension())));
        $instance->addExtension(($this->privates['twig.extension.profiler'] ?? $this->getTwig_Extension_ProfilerService()));
        $instance->addExtension(($this->privates['twig.extension.trans'] ?? $this->getTwig_Extension_TransService()));
        $instance->addExtension(($this->privates['twig.extension.assets'] ?? $this->getTwig_Extension_AssetsService()));
        $instance->addExtension(($this->privates['twig.extension.code'] ?? $this->getTwig_Extension_CodeService()));
        $instance->addExtension(($this->privates['twig.extension.routing'] ?? $this->getTwig_Extension_RoutingService()));
        $instance->addExtension(($this->privates['twig.extension.yaml'] ?? ($this->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension())));
        $instance->addExtension(($this->privates['twig.extension.debug.stopwatch'] ?? $this->getTwig_Extension_Debug_StopwatchService()));
        $instance->addExtension(($this->privates['twig.extension.expression'] ?? ($this->privates['twig.extension.expression'] = new \Symfony\Bridge\Twig\Extension\ExpressionExtension())));
        $instance->addExtension(($this->privates['twig.extension.httpkernel'] ?? ($this->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension())));
        $instance->addExtension(($this->privates['twig.extension.httpfoundation'] ?? $this->getTwig_Extension_HttpfoundationService()));
        $instance->addExtension(($this->privates['twig.extension.weblink'] ?? $this->getTwig_Extension_WeblinkService()));
        $instance->addExtension(($this->privates['twig.extension.form'] ?? ($this->privates['twig.extension.form'] = new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']))));
        $instance->addExtension(($this->privates['twig.extension.logout_url'] ?? $this->getTwig_Extension_LogoutUrlService()));
        $instance->addExtension(($this->privates['twig.extension.security'] ?? $this->getTwig_Extension_SecurityService()));
        $instance->addExtension(($this->privates['twig.extension.dump'] ?? $this->getTwig_Extension_DumpService()));
        $instance->addExtension(($this->privates['doctrine.twig.doctrine_extension'] ?? ($this->privates['doctrine.twig.doctrine_extension'] = new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension())));
        $instance->addExtension(($this->privates['twig.extension.webprofiler'] ?? $this->getTwig_Extension_WebprofilerService()));
        $instance->addExtension(($this->privates['knp_paginator.twig.extension.pagination'] ?? $this->getKnpPaginator_Twig_Extension_PaginationService()));
        $instance->addGlobal('app', ($this->privates['twig.app_variable'] ?? $this->getTwig_AppVariableService()));
        $instance->addRuntimeLoader(($this->privates['twig.runtime_loader'] ?? $this->getTwig_RuntimeLoaderService()));
        $instance->registerUndefinedFilterCallback([0 => $a, 1 => 'suggestFilter']);
        $instance->registerUndefinedFunctionCallback([0 => $a, 1 => 'suggestFunction']);
        ($this->privates['twig.configurator.environment'] ?? $this->getTwig_Configurator_EnvironmentService())->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     *
     * @deprecated The "twig.controller.exception" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        @trigger_error('The "twig.controller.exception" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(($this->services['twig'] ?? $this->getTwigService()), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     *
     * @deprecated The "twig.controller.preview_error" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        @trigger_error('The "twig.controller.preview_error" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), NULL);
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['debug.validator.inner'] ?? $this->getDebug_Validator_InnerService()));
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);
        $instance->addCasters(['Closure' => 'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo']);

        return $instance;
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     *
     * @deprecated The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        @trigger_error('The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.', E_USER_DEPRECATED);

        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()));
    }

    /**
     * Gets the public 'web_profiler.controller.exception_panel' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController
     */
    protected function getWebProfiler_Controller_ExceptionPanelService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\ExceptionPanelController.php';

        return $this->services['web_profiler.controller.exception_panel'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController(($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), ($this->services['profiler'] ?? $this->getProfilerService()));
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\ProfilerController.php';

        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($this->services['router'] ?? $this->getRouterService()), ($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), $this->parameters['data_collector.templates'], ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()), \dirname(__DIR__, 4));
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\RouterController.php';

        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private '.debug.http_client' shared service.
     *
     * @return \Symfony\Component\HttpClient\TraceableHttpClient
     */
    protected function get_Debug_HttpClientService()
    {
        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);
        $a->setLogger(($this->privates['monolog.logger.http_client'] ?? $this->getMonolog_Logger_HttpClientService()));

        return $this->privates['.debug.http_client'] = new \Symfony\Component\HttpClient\TraceableHttpClient($a);
    }

    /**
     * Gets the private '.errored..service_locator.9KurNWJ.App\Entity\Tasks' shared service.
     *
     * @return \App\Entity\Tasks
     */
    protected function getTasksService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Tasks.php';

        return $this->privates['.errored..service_locator.9KurNWJ.App\\Entity\\Tasks'] = new \App\Entity\Tasks();
    }

    /**
     * Gets the private '.errored..service_locator.xN.bma6.App\Entity\Invitations' shared service.
     *
     * @return \App\Entity\Invitations
     */
    protected function getInvitationsService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Invitations.php';

        return $this->privates['.errored..service_locator.xN.bma6.App\\Entity\\Invitations'] = new \App\Entity\Invitations();
    }

    /**
     * Gets the private '.legacy_controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function get_LegacyControllerNameConverterService()
    {
        return $this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false);
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private '.service_locator.531YlXk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_531YlXkService()
    {
        return $this->privates['.service_locator.531YlXk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Controller\\InvitationsController::delete' => ['privates', '.service_locator.xN.bma6', 'get_ServiceLocator_XN_Bma6Service', false],
            'App\\Controller\\InvitationsController::edit' => ['privates', '.service_locator.xN.bma6', 'get_ServiceLocator_XN_Bma6Service', false],
            'App\\Controller\\InvitationsController::index' => ['privates', '.service_locator.qEYpLtH', 'get_ServiceLocator_QEYpLtHService', false],
            'App\\Controller\\InvitationsController::show' => ['privates', '.service_locator.xN.bma6', 'get_ServiceLocator_XN_Bma6Service', false],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.ccM2MGC', 'get_ServiceLocator_CcM2MGCService', false],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.g.xob4v', 'get_ServiceLocator_G_Xob4vService', false],
            'App\\Controller\\TasksController::delete' => ['privates', '.service_locator.9KurNWJ', 'get_ServiceLocator_9KurNWJService', false],
            'App\\Controller\\TasksController::edit' => ['privates', '.service_locator.9KurNWJ', 'get_ServiceLocator_9KurNWJService', false],
            'App\\Controller\\InvitationsController:delete' => ['privates', '.service_locator.xN.bma6', 'get_ServiceLocator_XN_Bma6Service', false],
            'App\\Controller\\InvitationsController:edit' => ['privates', '.service_locator.xN.bma6', 'get_ServiceLocator_XN_Bma6Service', false],
            'App\\Controller\\InvitationsController:index' => ['privates', '.service_locator.qEYpLtH', 'get_ServiceLocator_QEYpLtHService', false],
            'App\\Controller\\InvitationsController:show' => ['privates', '.service_locator.xN.bma6', 'get_ServiceLocator_XN_Bma6Service', false],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.ccM2MGC', 'get_ServiceLocator_CcM2MGCService', false],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.g.xob4v', 'get_ServiceLocator_G_Xob4vService', false],
            'App\\Controller\\TasksController:delete' => ['privates', '.service_locator.9KurNWJ', 'get_ServiceLocator_9KurNWJService', false],
            'App\\Controller\\TasksController:edit' => ['privates', '.service_locator.9KurNWJ', 'get_ServiceLocator_9KurNWJService', false],
        ], [
            'App\\Controller\\InvitationsController::delete' => '?',
            'App\\Controller\\InvitationsController::edit' => '?',
            'App\\Controller\\InvitationsController::index' => '?',
            'App\\Controller\\InvitationsController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TasksController::delete' => '?',
            'App\\Controller\\TasksController::edit' => '?',
            'App\\Controller\\InvitationsController:delete' => '?',
            'App\\Controller\\InvitationsController:edit' => '?',
            'App\\Controller\\InvitationsController:index' => '?',
            'App\\Controller\\InvitationsController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TasksController:delete' => '?',
            'App\\Controller\\TasksController:edit' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.9KurNWJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_9KurNWJService()
    {
        return $this->privates['.service_locator.9KurNWJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'task' => ['privates', '.errored..service_locator.9KurNWJ.App\\Entity\\Tasks', NULL, 'Cannot autowire service ".service_locator.9KurNWJ": it references class "App\\Entity\\Tasks" but no such service exists.'],
        ], [
            'task' => 'App\\Entity\\Tasks',
        ]);
    }

    /**
     * Gets the private '.service_locator.ccM2MGC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_CcM2MGCService()
    {
        return $this->privates['.service_locator.ccM2MGC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
        ], [
            'passwordEncoder' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.g.xob4v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_G_Xob4vService()
    {
        return $this->privates['.service_locator.g.xob4v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
        ], [
            'authenticationUtils' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.qEYpLtH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_QEYpLtHService()
    {
        return $this->privates['.service_locator.qEYpLtH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'invitationsRepository' => ['privates', 'App\\Repository\\InvitationsRepository', 'getInvitationsRepositoryService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
        ], [
            'invitationsRepository' => 'App\\Repository\\InvitationsRepository',
            'paginator' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.vdmMuyE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VdmMuyEService()
    {
        return $this->privates['.service_locator.vdmMuyE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.xN.bma6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_XN_Bma6Service()
    {
        return $this->privates['.service_locator.xN.bma6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'invitation' => ['privates', '.errored..service_locator.xN.bma6.App\\Entity\\Invitations', NULL, 'Cannot autowire service ".service_locator.xN.bma6": it references class "App\\Entity\\Invitations" but no such service exists.'],
        ], [
            'invitation' => 'App\\Entity\\Invitations',
        ]);
    }

    /**
     * Gets the private 'App\DataFixtures\AppFixtures' shared autowired service.
     *
     * @return \App\DataFixtures\AppFixtures
     */
    protected function getAppFixturesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Fixture.php';
        include_once \dirname(__DIR__, 4).'\\src\\DataFixtures\\AppFixtures.php';

        return $this->privates['App\\DataFixtures\\AppFixtures'] = new \App\DataFixtures\AppFixtures();
    }

    /**
     * Gets the private 'App\DataFixtures\UserFixtures' shared autowired service.
     *
     * @return \App\DataFixtures\UserFixtures
     */
    protected function getUserFixturesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Fixture.php';
        include_once \dirname(__DIR__, 4).'\\src\\DataFixtures\\UserFixtures.php';

        return $this->privates['App\\DataFixtures\\UserFixtures'] = new \App\DataFixtures\UserFixtures();
    }

    /**
     * Gets the private 'App\Form\FriendsSearchType' shared autowired service.
     *
     * @return \App\Form\FriendsSearchType
     */
    protected function getFriendsSearchTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\FriendsSearchType.php';

        return $this->privates['App\\Form\\FriendsSearchType'] = new \App\Form\FriendsSearchType();
    }

    /**
     * Gets the private 'App\Form\InvitationsType' shared autowired service.
     *
     * @return \App\Form\InvitationsType
     */
    protected function getInvitationsTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\InvitationsType.php';

        return $this->privates['App\\Form\\InvitationsType'] = new \App\Form\InvitationsType(($this->privates['security.helper'] ?? $this->getSecurity_HelperService()));
    }

    /**
     * Gets the private 'App\Form\RegistrationFormType' shared autowired service.
     *
     * @return \App\Form\RegistrationFormType
     */
    protected function getRegistrationFormTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\RegistrationFormType.php';

        return $this->privates['App\\Form\\RegistrationFormType'] = new \App\Form\RegistrationFormType();
    }

    /**
     * Gets the private 'App\Form\TasksType' shared autowired service.
     *
     * @return \App\Form\TasksType
     */
    protected function getTasksTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\TasksType.php';

        return $this->privates['App\\Form\\TasksType'] = new \App\Form\TasksType(($this->privates['security.helper'] ?? $this->getSecurity_HelperService()));
    }

    /**
     * Gets the private 'App\Repository\InvitationsRepository' shared autowired service.
     *
     * @return \App\Repository\InvitationsRepository
     */
    protected function getInvitationsRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\InvitationsRepository.php';

        return $this->privates['App\\Repository\\InvitationsRepository'] = new \App\Repository\InvitationsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\TasksTypeRepository' shared autowired service.
     *
     * @return \App\Repository\TasksTypeRepository
     */
    protected function getTasksTypeRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\TasksTypeRepository.php';

        return $this->privates['App\\Repository\\TasksTypeRepository'] = new \App\Repository\TasksTypeRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Repository\UserRepository
     */
    protected function getUserRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\UserRepository.php';

        return $this->privates['App\\Repository\\UserRepository'] = new \App\Repository\UserRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Security\LoginFormAuthenticator' shared autowired service.
     *
     * @return \App\Security\LoginFormAuthenticator
     */
    protected function getLoginFormAuthenticatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Authenticator\\AbstractFormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\PasswordAuthenticatedInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'\\src\\Security\\LoginFormAuthenticator.php';

        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['App\\Security\\LoginFormAuthenticator'] = new \App\Security\LoginFormAuthenticator(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), $a, ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()), $a);
    }

    /**
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\PhpArrayTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\PhpArrayAdapter.php';

        return $this->privates['annotations.cache'] = new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /**
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AnnotationsCacheWarmer.php';

        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', true);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->privates['annotations.cache'] ?? $this->getAnnotations_CacheService()), true);
    }

    /**
     * Gets the private 'annotations.dummy_registry' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationRegistry
     */
    protected function getAnnotations_DummyRegistryService()
    {
        $this->privates['annotations.dummy_registry'] = $instance = new \Doctrine\Common\Annotations\AnnotationRegistry();

        $instance->registerUniqueLoader('class_exists');

        return $instance;
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', ($this->privates['annotations.dummy_registry'] ?? $this->getAnnotations_DummyRegistryService()));

        return $instance;
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'assets._default_package' shared service.
     *
     * @return \Symfony\Component\Asset\PathPackage
     */
    protected function getAssets_DefaultPackageService()
    {
        return $this->privates['assets._default_package'] = new \Symfony\Component\Asset\PathPackage('', ($this->privates['assets.empty_version_strategy'] ?? ($this->privates['assets.empty_version_strategy'] = new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy())), ($this->privates['assets.context'] ?? $this->getAssets_ContextService()));
    }

    /**
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->privates['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false);
    }

    /**
     * Gets the private 'assets.empty_version_strategy' shared service.
     *
     * @return \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy
     */
    protected function getAssets_EmptyVersionStrategyService()
    {
        return $this->privates['assets.empty_version_strategy'] = new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy();
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(($this->privates['assets._default_package'] ?? $this->getAssets_DefaultPackageService()), []);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.annotations.recorder_inner'] ?? $this->getCache_Annotations_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.annotations.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Annotations_RecorderInnerService()
    {
        return $this->privates['cache.annotations.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('BH8OMWVRVY', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'cache.app.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_App_RecorderInnerService()
    {
        $this->privates['cache.app.recorder_inner'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('LCKLSPPShk', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /**
     * Gets the private 'cache.default_marshaller' shared service.
     *
     * @return \Symfony\Component\Cache\Marshaller\DefaultMarshaller
     */
    protected function getCache_DefaultMarshallerService()
    {
        return $this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL);
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.metadata.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_Metadata_RecorderInnerService()
    {
        return $this->privates['cache.doctrine.orm.default.metadata.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_Query_RecorderInnerService()
    {
        return $this->privates['cache.doctrine.orm.default.query.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_Result_RecorderInnerService()
    {
        return $this->privates['cache.doctrine.orm.default.result.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_PropertyAccessService()
    {
        return $this->privates['cache.property_access'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false);
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.property_info.recorder_inner'] ?? $this->getCache_PropertyInfo_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.property_info.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyInfo_RecorderInnerService()
    {
        return $this->privates['cache.property_info.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('fajy1dt0Ii', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.security_expression_language.recorder_inner'] ?? $this->getCache_SecurityExpressionLanguage_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.security_expression_language.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SecurityExpressionLanguage_RecorderInnerService()
    {
        return $this->privates['cache.security_expression_language.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('THj98aJkCX', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.serializer.recorder_inner'] ?? $this->getCache_Serializer_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.serializer.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Serializer_RecorderInnerService()
    {
        return $this->privates['cache.serializer.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('0y0J+-zXtV', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'cache.system.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_System_RecorderInnerService()
    {
        return $this->privates['cache.system.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('No-kBQcNLD', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.validator.recorder_inner'] ?? $this->getCache_Validator_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.validator.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Validator_RecorderInnerService()
    {
        return $this->privates['cache.validator.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('RjI6zQ91oh', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /**
     * Gets the private 'config.resource.self_checking_resource_checker' shared service.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker
     */
    protected function getConfig_Resource_SelfCheckingResourceCheckerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Resource\\SelfCheckingResourceChecker.php';

        return $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CacheClearCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.doctrine.orm.default.metadata', 7 => 'cache.doctrine.orm.default.result', 8 => 'cache.doctrine.orm.default.query', 9 => 'cache.security_expression_language']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService());
            yield 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService());
            yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService());
            yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService());
            yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService());
            yield 'cache.doctrine.orm.default.metadata' => ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService());
            yield 'cache.doctrine.orm.default.result' => ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService());
            yield 'cache.doctrine.orm.default.query' => ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService());
            yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService());
        }, 10));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Command\\DebugCommand.php';

        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\FriendsSearchType', 1 => 'App\\Form\\InvitationsType', 2 => 'App\\Form\\RegistrationFormType', 3 => 'App\\Form\\TasksType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 5 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 6 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 7 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php';

        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php'), 3 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php'), 4 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php'), 5 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php'), 6 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php'), 7 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Util\\LegacyTranslatorProxy.php'), 8 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php'), 9 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php'), 10 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php'), 11 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Helper\\Processor.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\TranslationUpdateCommand.php';

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($this->privates['translation.writer'] ?? $this->getTranslation_WriterService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php'), 3 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php'), 4 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php'), 5 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php'), 6 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php'), 7 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Util\\LegacyTranslatorProxy.php'), 8 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php'), 9 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php'), 10 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php'), 11 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Helper\\Processor.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /**
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Command\\XliffLintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\XliffLintCommand.php';

        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\yaml\\Command\\LintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\EventListener\\ErrorListener.php';

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['monolog.logger.console'] ?? $this->getMonolog_Logger_ConsoleService()));
    }

    /**
     * Gets the private 'console.suggest_missing_package_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber
     */
    protected function getConsole_SuggestMissingPackageSubscriberService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\EventListener\\SuggestMissingPackageSubscriber.php';

        return $this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber();
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'data_collector.ajax' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector
     */
    protected function getDataCollector_AjaxService()
    {
        return $this->privates['data_collector.ajax'] = new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector();
    }

    /**
     * Gets the private 'data_collector.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DataCollector\CacheDataCollector
     */
    protected function getDataCollector_CacheService()
    {
        $this->privates['data_collector.cache'] = $instance = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();

        $instance->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $instance->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $instance->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $instance->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $instance->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $instance->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $instance->addInstance('cache.doctrine.orm.default.metadata', ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
        $instance->addInstance('cache.doctrine.orm.default.result', ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $instance->addInstance('cache.doctrine.orm.default.query', ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $instance->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));

        return $instance;
    }

    /**
     * Gets the private 'data_collector.config' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector
     */
    protected function getDataCollector_ConfigService()
    {
        $this->privates['data_collector.config'] = $instance = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();

        if ($this->has('kernel')) {
            $instance->setKernel(($this->services['kernel'] ?? $this->get('kernel', 3)));
        }

        return $instance;
    }

    /**
     * Gets the private 'data_collector.doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector
     */
    protected function getDataCollector_DoctrineService()
    {
        $this->privates['data_collector.doctrine'] = $instance = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        return $instance;
    }

    /**
     * Gets the private 'data_collector.events' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\EventDataCollector
     */
    protected function getDataCollector_EventsService()
    {
        return $this->privates['data_collector.events'] = new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'data_collector.exception' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector
     */
    protected function getDataCollector_ExceptionService()
    {
        return $this->privates['data_collector.exception'] = new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector();
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(($this->privates['data_collector.form.extractor'] ?? ($this->privates['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor())));
    }

    /**
     * Gets the private 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->privates['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the private 'data_collector.http_client' shared service.
     *
     * @return \Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector
     */
    protected function getDataCollector_HttpClientService()
    {
        $this->privates['data_collector.http_client'] = $instance = new \Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector();

        $instance->registerClient('http_client', ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()));

        return $instance;
    }

    /**
     * Gets the private 'data_collector.logger' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector
     */
    protected function getDataCollector_LoggerService()
    {
        return $this->privates['data_collector.logger'] = new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector(($this->privates['monolog.logger.profiler'] ?? $this->getMonolog_Logger_ProfilerService()), ($this->targetDir.''.'/srcApp_KernelTestDebugContainer'), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'data_collector.memory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector
     */
    protected function getDataCollector_MemoryService()
    {
        return $this->privates['data_collector.memory'] = new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector();
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'data_collector.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector
     */
    protected function getDataCollector_SecurityService()
    {
        return $this->privates['data_collector.security'] = new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService()));
    }

    /**
     * Gets the private 'data_collector.time' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector
     */
    protected function getDataCollector_TimeService()
    {
        return $this->privates['data_collector.time'] = new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector(($this->services['kernel'] ?? $this->get('kernel', 3)), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'data_collector.translation' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->privates['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'data_collector.twig' shared service.
     *
     * @return \Symfony\Bridge\Twig\DataCollector\TwigDataCollector
     */
    protected function getDataCollector_TwigService()
    {
        return $this->privates['data_collector.twig'] = new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'data_collector.validator' shared service.
     *
     * @return \Symfony\Component\Validator\DataCollector\ValidatorDataCollector
     */
    protected function getDataCollector_ValidatorService()
    {
        return $this->privates['data_collector.validator'] = new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->privates['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(($this->privates['debug.argument_resolver.inner'] ?? $this->getDebug_ArgumentResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\DefaultValueResolver.php';

        return $this->privates['debug.argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.default.inner'] ?? ($this->privates['debug.argument_resolver.default.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.default.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getDebug_ArgumentResolver_Default_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\DefaultValueResolver.php';

        return $this->privates['debug.argument_resolver.default.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver
     */
    protected function getDebug_ArgumentResolver_InnerService()
    {
        return $this->privates['debug.argument_resolver.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->getDebug_ArgumentResolver_RequestAttributeService());
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->getDebug_ArgumentResolver_RequestService());
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->getDebug_ArgumentResolver_SessionService());
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->getDebug_Security_UserValueResolverService());
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->getDebug_ArgumentResolver_ServiceService());
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->getDebug_ArgumentResolver_DefaultService());
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->getDebug_ArgumentResolver_VariadicService());
            yield 7 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->getDebug_ArgumentResolver_NotTaggedControllerService());
        }, 8));
    }

    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_NotTaggedControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';

        return $this->privates['debug.argument_resolver.not_tagged_controller'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.not_tagged_controller.inner'] ?? $this->getDebug_ArgumentResolver_NotTaggedController_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver
     */
    protected function getDebug_ArgumentResolver_NotTaggedController_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver.php';

        return $this->privates['debug.argument_resolver.not_tagged_controller.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver(($this->privates['.service_locator.531YlXk'] ?? $this->get_ServiceLocator_531YlXkService()));
    }

    /**
     * Gets the private 'debug.argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestValueResolver.php';

        return $this->privates['debug.argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.request.inner'] ?? ($this->privates['debug.argument_resolver.request.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getDebug_ArgumentResolver_Request_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestValueResolver.php';

        return $this->privates['debug.argument_resolver.request.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestAttributeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver.php';

        return $this->privates['debug.argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.request_attribute.inner'] ?? ($this->privates['debug.argument_resolver.request_attribute.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request_attribute.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestAttribute_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver.php';

        return $this->privates['debug.argument_resolver.request_attribute.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';

        return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.service.inner'] ?? $this->getDebug_ArgumentResolver_Service_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.service.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getDebug_ArgumentResolver_Service_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

        return $this->privates['debug.argument_resolver.service.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator.531YlXk'] ?? $this->get_ServiceLocator_531YlXkService()));
    }

    /**
     * Gets the private 'debug.argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_SessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\SessionValueResolver.php';

        return $this->privates['debug.argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.session.inner'] ?? ($this->privates['debug.argument_resolver.session.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.session.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getDebug_ArgumentResolver_Session_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\SessionValueResolver.php';

        return $this->privates['debug.argument_resolver.session.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_VariadicService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\VariadicValueResolver.php';

        return $this->privates['debug.argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.variadic.inner'] ?? ($this->privates['debug.argument_resolver.variadic.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.variadic.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getDebug_ArgumentResolver_Variadic_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\VariadicValueResolver.php';

        return $this->privates['debug.argument_resolver.variadic.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->privates['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(($this->privates['debug.controller_resolver.inner'] ?? $this->getDebug_ControllerResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.controller_resolver.inner' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getDebug_ControllerResolver_InnerService()
    {
        return $this->privates['debug.controller_resolver.inner'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['monolog.logger.php'] ?? $this->getMonolog_Logger_PhpService()), NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DumpListener.php';

        return $this->privates['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.contextualized_cli_dumper'] ?? $this->getVarDumper_ContextualizedCliDumperService()), NULL);
    }

    /**
     * Gets the private 'debug.event_dispatcher.inner' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getDebug_EventDispatcher_InnerService()
    {
        return $this->privates['debug.event_dispatcher.inner'] = new \Symfony\Component\EventDispatcher\EventDispatcher();
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->getDebug_FileLinkFormatter_UrlFormatService());
        });
    }

    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    protected function getDebug_FileLinkFormatter_UrlFormatService()
    {
        return $this->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat(($this->services['router'] ?? $this->getRouterService()), '_profiler_open_file', '?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(($this->privates['debug.security.access.decision_manager.inner'] ?? $this->getDebug_Security_Access_DecisionManager_InnerService()));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager.inner' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManager_InnerService()
    {
        return $this->privates['debug.security.access.decision_manager.inner'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->getDebug_Security_Voter_Security_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['debug.security.voter.security.access.simple_role_voter'] ?? $this->getDebug_Security_Voter_Security_Access_SimpleRoleVoterService());
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->getDebug_Security_Voter_Security_Access_ExpressionVoterService());
        }, 3), 'affirmative', false, true);
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'debug.security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_Security_UserValueResolverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';

        return $this->privates['debug.security.user_value_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.security.user_value_resolver.inner'] ?? $this->getDebug_Security_UserValueResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.security.user_value_resolver.inner' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    protected function getDebug_Security_UserValueResolver_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Controller\\UserValueResolver.php';

        return $this->privates['debug.security.user_value_resolver.inner'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';

        return $this->privates['debug.security.voter.security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['security.access.authenticated_voter'] ?? $this->getSecurity_Access_AuthenticatedVoterService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_ExpressionVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';

        return $this->privates['debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['security.access.expression_voter'] ?? $this->getSecurity_Access_ExpressionVoterService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.simple_role_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_SimpleRoleVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\RoleVoter.php';

        return $this->privates['debug.security.voter.security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.vote_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\VoteListener
     */
    protected function getDebug_Security_Voter_VoteListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\EventListener\\VoteListener.php';

        return $this->privates['debug.security.voter.vote_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\VoteListener(($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'debug.validator.inner' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getDebug_Validator_InnerService()
    {
        return $this->privates['debug.validator.inner'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /**
     * Gets the private 'dependency_injection.config.container_parameters_resource_checker' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    protected function getDependencyInjection_Config_ContainerParametersResourceCheckerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\Config\\ContainerParametersResourceChecker.php';

        return $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the private 'disallow_search_engine_index_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener
     */
    protected function getDisallowSearchEngineIndexResponseListenerService()
    {
        return $this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener();
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\MetadataCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\ResultCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\CollectionRegionDoctrineCommand.php';

        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\EntityRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\CreateDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DropDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ImportDoctrineCommand.php';

        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->privates['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]);
    }

    /**
     * Gets the private 'doctrine.dbal.default_connection.configuration' shared service.
     *
     * @return \Doctrine\DBAL\Configuration
     */
    protected function getDoctrine_Dbal_DefaultConnection_ConfigurationService()
    {
        $this->privates['doctrine.dbal.default_connection.configuration'] = $instance = new \Doctrine\DBAL\Configuration();

        $instance->setSQLLogger(($this->privates['doctrine.dbal.logger.chain.default'] ?? $this->getDoctrine_Dbal_Logger_Chain_DefaultService()));

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.default_connection.event_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ContainerAwareEventManager
     */
    protected function getDoctrine_Dbal_DefaultConnection_EventManagerService()
    {
        $this->privates['doctrine.dbal.default_connection.event_manager'] = $instance = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));

        $instance->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.logger' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Logger\DbalLogger
     */
    protected function getDoctrine_Dbal_LoggerService()
    {
        return $this->privates['doctrine.dbal.logger'] = new \Symfony\Bridge\Doctrine\Logger\DbalLogger(($this->privates['monolog.logger.doctrine'] ?? $this->getMonolog_Logger_DoctrineService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'doctrine.dbal.logger.chain.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\LoggerChain
     */
    protected function getDoctrine_Dbal_Logger_Chain_DefaultService()
    {
        $this->privates['doctrine.dbal.logger.chain.default'] = $instance = new \Doctrine\DBAL\Logging\LoggerChain();

        $instance->addLogger(($this->privates['doctrine.dbal.logger'] ?? $this->getDoctrine_Dbal_LoggerService()));
        $instance->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\EnsureProductionSettingsCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand.php';

        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.fixtures.loader' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader
     */
    protected function getDoctrine_Fixtures_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\DataFixtures\\ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Loader\\SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Fixture.php';
        include_once \dirname(__DIR__, 4).'\\src\\DataFixtures\\AppFixtures.php';
        include_once \dirname(__DIR__, 4).'\\src\\DataFixtures\\UserFixtures.php';

        $this->privates['doctrine.fixtures.loader'] = $instance = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($this);

        $instance->addFixtures([0 => ['fixture' => ($this->privates['App\\DataFixtures\\AppFixtures'] ?? ($this->privates['App\\DataFixtures\\AppFixtures'] = new \App\DataFixtures\AppFixtures())), 'groups' => []], 1 => ['fixture' => ($this->privates['App\\DataFixtures\\UserFixtures'] ?? ($this->privates['App\\DataFixtures\\UserFixtures'] = new \App\DataFixtures\UserFixtures())), 'groups' => []]]);

        return $instance;
    }

    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    protected function getDoctrine_FixturesLoadCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Command\\LoadDataFixturesDoctrineCommand.php';

        $this->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand(($this->privates['doctrine.fixtures.loader'] ?? $this->getDoctrine_Fixtures_LoaderService()), ($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ConvertMappingCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ConvertMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\ImportMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\InfoCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\InfoDoctrineCommand.php';

        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()
    {
        return $this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()
    {
        return $this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
    }

    /**
     * Gets the private 'doctrine.orm.container_repository_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory
     */
    protected function getDoctrine_Orm_ContainerRepositoryFactoryService()
    {
        return $this->privates['doctrine.orm.container_repository_factory'] = new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\InvitationsRepository' => ['privates', 'App\\Repository\\InvitationsRepository', 'getInvitationsRepositoryService', false],
            'App\\Repository\\TasksTypeRepository' => ['privates', 'App\\Repository\\TasksTypeRepository', 'getTasksTypeRepositoryService', false],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'App\\Repository\\InvitationsRepository' => '?',
            'App\\Repository\\TasksTypeRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ]));
    }

    /**
     * Gets the private 'doctrine.orm.default_annotation_metadata_driver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\AnnotationDriver
     */
    protected function getDoctrine_Orm_DefaultAnnotationMetadataDriverService()
    {
        return $this->privates['doctrine.orm.default_annotation_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'\\src\\Entity')]);
    }

    /**
     * Gets the private 'doctrine.orm.default_configuration' shared service.
     *
     * @return \Doctrine\ORM\Configuration
     */
    protected function getDoctrine_Orm_DefaultConfigurationService()
    {
        $this->privates['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

        $instance->setEntityNamespaces(['App' => 'App\\Entity']);
        $instance->setMetadataCacheImpl(($this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] ?? $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()));
        $instance->setQueryCacheImpl(($this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] ?? $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()));
        $instance->setResultCacheImpl(($this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] ?? $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()));
        $instance->setMetadataDriverImpl(($this->privates['doctrine.orm.default_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultMetadataDriverService()));
        $instance->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $instance->setProxyNamespace('Proxies');
        $instance->setAutoGenerateProxyClasses(true);
        $instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $instance->setNamingStrategy(($this->privates['doctrine.orm.naming_strategy.underscore_number_aware'] ?? ($this->privates['doctrine.orm.naming_strategy.underscore_number_aware'] = new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true))));
        $instance->setQuoteStrategy(($this->privates['doctrine.orm.quote_strategy.default'] ?? ($this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy())));
        $instance->setEntityListenerResolver(($this->privates['doctrine.orm.default_entity_listener_resolver'] ?? ($this->privates['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this))));
        $instance->setRepositoryFactory(($this->privates['doctrine.orm.container_repository_factory'] ?? $this->getDoctrine_Orm_ContainerRepositoryFactoryService()));

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->privates['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this);
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\PropertyInfo\\DoctrineExtractor.php';

        return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.validator_loader' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineLoader
     */
    protected function getDoctrine_Orm_DefaultEntityManager_ValidatorLoaderService()
    {
        return $this->privates['doctrine.orm.default_entity_manager.validator_loader'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL);
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\AttachEntityListenersListener.php';

        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->privates['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []);
    }

    /**
     * Gets the private 'doctrine.orm.default_metadata_driver' shared service.
     *
     * @return \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain
     */
    protected function getDoctrine_Orm_DefaultMetadataDriverService()
    {
        $this->privates['doctrine.orm.default_metadata_driver'] = $instance = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

        $instance->addDriver(($this->privates['doctrine.orm.default_annotation_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultAnnotationMetadataDriverService()), 'App\\Entity');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.naming_strategy.underscore_number_aware' shared service.
     *
     * @return \Doctrine\ORM\Mapping\UnderscoreNamingStrategy
     */
    protected function getDoctrine_Orm_NamingStrategy_UnderscoreNumberAwareService()
    {
        return $this->privates['doctrine.orm.naming_strategy.underscore_number_aware'] = new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true);
    }

    /**
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\CacheWarmer\\ProxyCacheWarmer.php';

        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.quote_strategy.default' shared service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultQuoteStrategy
     */
    protected function getDoctrine_Orm_QuoteStrategy_DefaultService()
    {
        return $this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy();
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Validator\\Constraints\\UniqueEntityValidator.php';

        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->privates['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\RunDqlDoctrineCommand.php';

        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\RunSqlDoctrineCommand.php';

        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\CreateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\CreateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\DropCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\DropSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\UpdateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ValidateSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ValidateSchemaCommand.php';

        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.twig.doctrine_extension' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension
     */
    protected function getDoctrine_Twig_DoctrineExtensionService()
    {
        return $this->privates['doctrine.twig.doctrine_extension'] = new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension();
    }

    /**
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsDiffDoctrineCommand.php';

        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsDumpSchemaDoctrineCommand.php';

        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand();

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsExecuteDoctrineCommand.php';

        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsGenerateDoctrineCommand.php';

        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand();

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsLatestDoctrineCommand.php';

        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsMigrateDoctrineCommand.php';

        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsRollupDoctrineCommand.php';

        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand();

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsStatusDoctrineCommand.php';

        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand();

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsUpToDateDoctrineCommand.php';

        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand();

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsVersionDoctrineCommand.php';

        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /**
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'error_handler.error_renderer.serializer' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_SerializerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\SerializerErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.serializer'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), ($this->privates['twig.error_renderer.html'] ?? $this->getTwig_ErrorRenderer_HtmlService()), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), true);
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'\\src/Resources'), [0 => (\dirname(__DIR__, 4).'\\src')], false);
    }

    /**
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\CachingFactoryDecorator.php';

        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(($this->privates['form.choice_list_factory.property_access'] ?? $this->getForm_ChoiceListFactory_PropertyAccessService()));
    }

    /**
     * Gets the private 'form.choice_list_factory.default' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory
     */
    protected function getForm_ChoiceListFactory_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\DefaultChoiceListFactory.php';

        return $this->privates['form.choice_list_factory.default'] = new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory();
    }

    /**
     * Gets the private 'form.choice_list_factory.property_access' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator
     */
    protected function getForm_ChoiceListFactory_PropertyAccessService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\PropertyAccessDecorator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\DefaultChoiceListFactory.php';

        return $this->privates['form.choice_list_factory.property_access'] = new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(($this->privates['form.choice_list_factory.default'] ?? ($this->privates['form.choice_list_factory.default'] = new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory())), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'form.extension' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension
     */
    protected function getForm_ExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DependencyInjection\\DependencyInjectionExtension.php';

        return $this->privates['form.extension'] = new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Form\\FriendsSearchType' => ['privates', 'App\\Form\\FriendsSearchType', 'getFriendsSearchTypeService', false],
            'App\\Form\\InvitationsType' => ['privates', 'App\\Form\\InvitationsType', 'getInvitationsTypeService', false],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', false],
            'App\\Form\\TasksType' => ['privates', 'App\\Form\\TasksType', 'getTasksTypeService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
        ], [
            'App\\Form\\FriendsSearchType' => '?',
            'App\\Form\\InvitationsType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\TasksType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
            yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->getForm_TypeExtension_Form_DataCollectorService());
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2));
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRegistry.php';

        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => ($this->privates['form.extension'] ?? $this->getForm_ExtensionService())], ($this->privates['form.resolved_type_factory'] ?? $this->getForm_ResolvedTypeFactoryService()));
    }

    /**
     * Gets the private 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ResolvedFormTypeFactory.php';

        return $this->privates['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Util\\ServerParams.php';

        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\ChoiceType.php';

        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()));
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\Type\\DoctrineType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\Type\\EntityType.php';

        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\BaseType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FormType.php';

        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php';

        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension.php';

        return $this->privates['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension.php';

        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(($this->privates['form.type_extension.form.request_handler'] ?? $this->getForm_TypeExtension_Form_RequestHandlerService()));
    }

    /**
     * Gets the private 'form.type_extension.form.request_handler' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler
     */
    protected function getForm_TypeExtension_Form_RequestHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\RequestHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler.php';

        return $this->privates['form.type_extension.form.request_handler'] = new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /**
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php';

        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\BaseValidatorExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php';

        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension.php';

        return $this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\BaseValidatorExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension.php';

        return $this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php';

        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\DoctrineOrmTypeGuesser.php';

        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\ValidatorTypeGuesser.php';

        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DependencyInjection\\LazyLoadingFragmentHandler.php';

        return $this->privates['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true);
    }

    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\InlineFragmentRenderer.php';

        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.date_time_param_converter' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getFrameworkExtraBundle_DateTimeParamConverterService()
    {
        return $this->privates['framework_extra_bundle.date_time_param_converter'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'identity_translator' shared service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator
     */
    protected function getIdentityTranslatorService()
    {
        return $this->privates['identity_translator'] = new \Symfony\Component\Translation\IdentityTranslator();
    }

    /**
     * Gets the private 'knp_paginator.helper.processor' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Helper\Processor
     */
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->privates['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor(($this->services['router'] ?? $this->getRouterService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'knp_paginator.subscriber.filtration' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber
     */
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-components\\src\\Knp\\Component\\Pager\\Event\\Subscriber\\Filtration\\FiltrationSubscriber.php';

        return $this->privates['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }

    /**
     * Gets the private 'knp_paginator.subscriber.paginate' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-components\\src\\Knp\\Component\\Pager\\Event\\Subscriber\\Paginate\\PaginationSubscriber.php';

        return $this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }

    /**
     * Gets the private 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->privates['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(['defaultPaginationTemplate' => '@KnpPaginator/Pagination/sliding.html.twig', 'defaultSortableTemplate' => '@KnpPaginator/Pagination/sortable_link.html.twig', 'defaultFiltrationTemplate' => '@KnpPaginator/Pagination/filtration.html.twig', 'defaultPageRange' => 5]);
    }

    /**
     * Gets the private 'knp_paginator.subscriber.sortable' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber
     */
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-components\\src\\Knp\\Component\\Pager\\Event\\Subscriber\\Sortable\\SortableSubscriber.php';

        return $this->privates['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }

    /**
     * Gets the private 'knp_paginator.twig.extension.pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension
     */
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->privates['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(($this->privates['knp_paginator.helper.processor'] ?? $this->getKnpPaginator_Helper_ProcessorService()));
    }

    /**
     * Gets the private 'liip_test_fixtures.services_database_tools.mongodb_database_tool' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseTools\MongoDBDatabaseTool
     */
    protected function getLiipTestFixtures_ServicesDatabaseTools_MongodbDatabaseToolService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseTools\\AbstractDatabaseTool.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseTools\\MongoDBDatabaseTool.php';

        return $this->privates['liip_test_fixtures.services_database_tools.mongodb_database_tool'] = new \Liip\TestFixturesBundle\Services\DatabaseTools\MongoDBDatabaseTool($this, ($this->services['liip_test_fixtures.services.fixtures_loader_factory'] ?? $this->getLiipTestFixtures_Services_FixturesLoaderFactoryService()));
    }

    /**
     * Gets the private 'liip_test_fixtures.services_database_tools.orm_database_tool' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseTools\ORMDatabaseTool
     */
    protected function getLiipTestFixtures_ServicesDatabaseTools_OrmDatabaseToolService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseTools\\AbstractDatabaseTool.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseTools\\ORMDatabaseTool.php';

        return $this->privates['liip_test_fixtures.services_database_tools.orm_database_tool'] = new \Liip\TestFixturesBundle\Services\DatabaseTools\ORMDatabaseTool($this, ($this->services['liip_test_fixtures.services.fixtures_loader_factory'] ?? $this->getLiipTestFixtures_Services_FixturesLoaderFactoryService()));
    }

    /**
     * Gets the private 'liip_test_fixtures.services_database_tools.orm_sqlite_database_tool' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseTools\ORMSqliteDatabaseTool
     */
    protected function getLiipTestFixtures_ServicesDatabaseTools_OrmSqliteDatabaseToolService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseTools\\AbstractDatabaseTool.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseTools\\ORMDatabaseTool.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseTools\\ORMSqliteDatabaseTool.php';

        return $this->privates['liip_test_fixtures.services_database_tools.orm_sqlite_database_tool'] = new \Liip\TestFixturesBundle\Services\DatabaseTools\ORMSqliteDatabaseTool($this, ($this->services['liip_test_fixtures.services.fixtures_loader_factory'] ?? $this->getLiipTestFixtures_Services_FixturesLoaderFactoryService()));
    }

    /**
     * Gets the private 'liip_test_fixtures.services_database_tools.phpcr_database_tool' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseTools\PHPCRDatabaseTool
     */
    protected function getLiipTestFixtures_ServicesDatabaseTools_PhpcrDatabaseToolService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseTools\\AbstractDatabaseTool.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src\\Services\\DatabaseTools\\PHPCRDatabaseTool.php';

        return $this->privates['liip_test_fixtures.services_database_tools.phpcr_database_tool'] = new \Liip\TestFixturesBundle\Services\DatabaseTools\PHPCRDatabaseTool($this, ($this->services['liip_test_fixtures.services.fixtures_loader_factory'] ?? $this->getLiipTestFixtures_Services_FixturesLoaderFactoryService()));
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'mailer.data_collector' shared service.
     *
     * @return \Symfony\Component\Mailer\DataCollector\MessageDataCollector
     */
    protected function getMailer_DataCollectorService()
    {
        return $this->privates['mailer.data_collector'] = new \Symfony\Component\Mailer\DataCollector\MessageDataCollector(($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener())));
    }

    /**
     * Gets the private 'mailer.envelope_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\EnvelopeListener
     */
    protected function getMailer_EnvelopeListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\EventListener\\EnvelopeListener.php';

        return $this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL);
    }

    /**
     * Gets the private 'mailer.logger_message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageLoggerListener
     */
    protected function getMailer_LoggerMessageListenerService()
    {
        return $this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener();
    }

    /**
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypes.php';

        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.command.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Command\ServerLogCommand
     */
    protected function getMonolog_Command_ServerLogService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bridge\\Command\\ServerLogCommand.php';

        $this->privates['monolog.command.server_log'] = $instance = new \Symfony\Bridge\Monolog\Command\ServerLogCommand();

        $instance->setName('server:log');

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->privates['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler(($this->privates['monolog.handler.nested'] ?? $this->getMonolog_Handler_NestedService()), ($this->privates['monolog.handler.main.http_code_strategy'] ?? $this->getMonolog_Handler_Main_HttpCodeStrategyService()), 0, true, true, NULL);
    }

    /**
     * Gets the private 'monolog.handler.main.http_code_strategy' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy
     */
    protected function getMonolog_Handler_Main_HttpCodeStrategyService()
    {
        return $this->privates['monolog.handler.main.http_code_strategy'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), [0 => ['code' => 404, 'urls' => []], 1 => ['code' => 405, 'urls' => []]], 400);
    }

    /**
     * Gets the private 'monolog.handler.nested' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->privates['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'\\log/test.log'), 100, true, NULL, false);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->privates['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.debug' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DebugService()
    {
        $this->privates['monolog.logger.debug'] = $instance = new \Symfony\Bridge\Monolog\Logger('debug');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->privates['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->privates['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.null_internal'] ?? ($this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.http_client' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_HttpClientService()
    {
        $this->privates['monolog.logger.http_client'] = $instance = new \Symfony\Bridge\Monolog\Logger('http_client');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->privates['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->privates['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->privates['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'profiler.storage' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage
     */
    protected function getProfiler_StorageService()
    {
        return $this->privates['profiler.storage'] = new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler'));
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-access\\PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-access\\PropertyAccessor.php';

        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ($this->privates['cache.property_access'] ?? ($this->privates['cache.property_access'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false))), true);
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->getPropertyInfo_SerializerExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1));
    }

    /**
     * Gets the private 'property_info.php_doc_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor
     */
    protected function getPropertyInfo_PhpDocExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\Extractor\\PhpDocExtractor.php';

        return $this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor();
    }

    /**
     * Gets the private 'property_info.reflection_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor
     */
    protected function getPropertyInfo_ReflectionExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\Extractor\\ReflectionExtractor.php';

        return $this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor();
    }

    /**
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    protected function getPropertyInfo_SerializerExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\Extractor\\SerializerExtractor.php';

        return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'routing.loader.annotation' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader
     */
    protected function getRouting_Loader_AnnotationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\AnnotatedRouteControllerLoader.php';

        return $this->privates['routing.loader.annotation'] = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'routing.loader.annotation.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader
     */
    protected function getRouting_Loader_Annotation_DirectoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationDirectoryLoader.php';

        return $this->privates['routing.loader.annotation.directory'] = new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()), ($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
    }

    /**
     * Gets the private 'routing.loader.annotation.file' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationFileLoader
     */
    protected function getRouting_Loader_Annotation_FileService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php';

        return $this->privates['routing.loader.annotation.file'] = new \Symfony\Component\Routing\Loader\AnnotationFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()), ($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
    }

    /**
     * Gets the private 'routing.loader.container' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\ContainerLoader
     */
    protected function getRouting_Loader_ContainerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\LegacyRouteLoaderContainer.php';

        return $this->privates['routing.loader.container'] = new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ])));
    }

    /**
     * Gets the private 'routing.loader.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\DirectoryLoader
     */
    protected function getRouting_Loader_DirectoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\DirectoryLoader.php';

        return $this->privates['routing.loader.directory'] = new \Symfony\Component\Routing\Loader\DirectoryLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.glob' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\GlobFileLoader
     */
    protected function getRouting_Loader_GlobService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\GlobFileLoader.php';

        return $this->privates['routing.loader.glob'] = new \Symfony\Component\Routing\Loader\GlobFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.php' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\PhpFileLoader
     */
    protected function getRouting_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\PhpFileLoader.php';

        return $this->privates['routing.loader.php'] = new \Symfony\Component\Routing\Loader\PhpFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.xml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\XmlFileLoader
     */
    protected function getRouting_Loader_XmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\XmlFileLoader.php';

        return $this->privates['routing.loader.xml'] = new \Symfony\Component\Routing\Loader\XmlFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.yml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    protected function getRouting_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\YamlFileLoader.php';

        return $this->privates['routing.loader.yml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    protected function getRouting_ResolverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderResolver.php';

        $this->privates['routing.resolver'] = $instance = new \Symfony\Component\Config\Loader\LoaderResolver();

        $instance->addLoader(($this->privates['routing.loader.xml'] ?? $this->getRouting_Loader_XmlService()));
        $instance->addLoader(($this->privates['routing.loader.yml'] ?? $this->getRouting_Loader_YmlService()));
        $instance->addLoader(($this->privates['routing.loader.php'] ?? $this->getRouting_Loader_PhpService()));
        $instance->addLoader(($this->privates['routing.loader.glob'] ?? $this->getRouting_Loader_GlobService()));
        $instance->addLoader(($this->privates['routing.loader.directory'] ?? $this->getRouting_Loader_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.container'] ?? $this->getRouting_Loader_ContainerService()));
        $instance->addLoader(($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
        $instance->addLoader(($this->privates['routing.loader.annotation.directory'] ?? $this->getRouting_Loader_Annotation_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.annotation.file'] ?? $this->getRouting_Loader_Annotation_FileService()));

        return $instance;
    }

    /**
     * Gets the private 'secrets.local_vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault
     */
    protected function getSecrets_LocalVaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        return $this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local'));
    }

    /**
     * Gets the private 'secrets.vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault
     */
    protected function getSecrets_VaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';

        return $this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'));
    }

    /**
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\AuthenticatedVoter.php';

        return $this->privates['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))));
    }

    /**
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\ExpressionVoter.php';

        return $this->privates['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(($this->privates['security.expression_language'] ?? $this->getSecurity_ExpressionLanguageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))));
    }

    /**
     * Gets the private 'security.access.simple_role_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter
     */
    protected function getSecurity_Access_SimpleRoleVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\RoleVoter.php';

        return $this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter();
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AccessListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';

        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? ($this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';

        return $this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap();
    }

    /**
     * Gets the private 'security.authentication.failure_handler.main.form_login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler
     */
    protected function getSecurity_Authentication_FailureHandler_Main_FormLoginService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\DefaultAuthenticationFailureHandler.php';

        $this->privates['security.authentication.failure_handler.main.form_login'] = $instance = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), [], ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));

        $instance->setOptions(['login_path' => 'app_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.form_entry_point.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint
     */
    protected function getSecurity_Authentication_FormEntryPoint_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\FormAuthenticationEntryPoint.php';

        return $this->privates['security.authentication.form_entry_point.main'] = new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'app_login', true);
    }

    /**
     * Gets the private 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\GuardAuthenticatorHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';

        $this->privates['security.authentication.guard_handler'] = $instance = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), []);

        $instance->setSessionAuthenticationStrategy(($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.form.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Form_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\UsernamePasswordFormAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';

        return $this->privates['security.authentication.listener.form.main'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'main', ($this->privates['security.authentication.success_handler.main.form_login'] ?? $this->getSecurity_Authentication_SuccessHandler_Main_FormLoginService()), ($this->privates['security.authentication.failure_handler.main.form_login'] ?? $this->getSecurity_Authentication_FailureHandler_Main_FormLoginService()), ['check_path' => 'app_login', 'use_forward' => true, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL);
    }

    /**
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Firewall\\GuardAuthenticationListener.php';

        return $this->privates['security.authentication.listener.guard.main'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(($this->privates['security.authentication.guard_handler'] ?? $this->getSecurity_Authentication_GuardHandlerService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\LoginFormAuthenticator'] ?? $this->getLoginFormAuthenticatorService());
        }, 1), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->getSecurity_Authentication_Provider_Guard_MainService());
            yield 1 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->getSecurity_Authentication_Provider_Dao_MainService());
            yield 2 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 3), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AnonymousAuthenticationProvider.php';

        return $this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'));
    }

    /**
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\UserAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\DaoAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserChecker.php';

        return $this->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'main', ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), true);
    }

    /**
     * Gets the private 'security.authentication.provider.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Provider\\GuardAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserChecker.php';

        return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\LoginFormAuthenticator'] ?? $this->getLoginFormAuthenticatorService());
        }, 1), ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService()), 'main', ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'security.authentication.retry_entry_point' shared service.
     *
     * @return \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint
     */
    protected function getSecurity_Authentication_RetryEntryPointService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\RetryAuthenticationEntryPoint.php';

        return $this->privates['security.authentication.retry_entry_point'] = new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443);
    }

    /**
     * Gets the private 'security.authentication.session_strategy' shared service.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';

        return $this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the private 'security.authentication.success_handler.main.form_login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler
     */
    protected function getSecurity_Authentication_SuccessHandler_Main_FormLoginService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\DefaultAuthenticationSuccessHandler.php';

        $this->privates['security.authentication.success_handler.main.form_login'] = $instance = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler(($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), []);

        $instance->setOptions(['login_path' => 'app_login', 'use_referer' => true, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path']);
        $instance->setProviderKey('main');

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL);
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ChannelListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\RetryAuthenticationEntryPoint.php';

        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? ($this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($this->privates['security.authentication.retry_entry_point'] ?? ($this->privates['security.authentication.retry_entry_point'] = new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443))), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /**
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Command\\UserPasswordEncoderCommand.php';

        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'App\\Entity\\User']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /**
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ContextListener.php';

        return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService());
        }, 1), 'main', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /**
     * Gets the private 'security.csrf.token_generator' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator
     */
    protected function getSecurity_Csrf_TokenGeneratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\UriSafeTokenGenerator.php';

        return $this->privates['security.csrf.token_generator'] = new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator();
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\TokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\ClearableTokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\SessionTokenStorage.php';

        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /**
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\EncoderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\EncoderFactory.php';

        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\User' => ['algorithm' => 'auto', 'migrate_from' => [], 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'cost' => NULL, 'memory_cost' => NULL, 'time_cost' => NULL, 'threads' => NULL]]);
    }

    /**
     * Gets the private 'security.exception_listener.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ExceptionListener
     */
    protected function getSecurity_ExceptionListener_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ExceptionListener.php';

        return $this->privates['security.exception_listener.main'] = new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'main', ($this->privates['security.authentication.form_entry_point.main'] ?? $this->getSecurity_Authentication_FormEntryPoint_MainService()), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false);
    }

    /**
     * Gets the private 'security.expression_language' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\ExpressionLanguage
     */
    protected function getSecurity_ExpressionLanguageService()
    {
        return $this->privates['security.expression_language'] = new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.firewall.map.config.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
     */
    protected function getSecurity_Firewall_Map_Config_DevService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

        return $this->privates['security.firewall.map.config.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL);
    }

    /**
     * Gets the private 'security.firewall.map.config.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
     */
    protected function getSecurity_Firewall_Map_Config_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

        return $this->privates['security.firewall.map.config.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.app_user_provider', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, [0 => 'guard', 1 => 'form_login', 2 => 'anonymous'], NULL);
    }

    /**
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';

        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, ($this->privates['security.firewall.map.config.dev'] ?? $this->getSecurity_Firewall_Map_Config_DevService()));
    }

    /**
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\LazyFirewallContext.php';

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.guard.main'] ?? $this->getSecurity_Authentication_Listener_Guard_MainService());
            yield 3 => ($this->privates['security.authentication.listener.form.main'] ?? $this->getSecurity_Authentication_Listener_Form_MainService());
            yield 4 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 5 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 6), ($this->privates['security.exception_listener.main'] ?? $this->getSecurity_ExceptionListener_MainService()), ($this->privates['security.logout_listener.main'] ?? $this->getSecurity_LogoutListener_MainService()), ($this->privates['security.firewall.map.config.main'] ?? $this->getSecurity_Firewall_Map_Config_MainService()), ($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /**
     * Gets the private 'security.helper' shared service.
     *
     * @return \Symfony\Component\Security\Core\Security
     */
    protected function getSecurity_HelperService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Security.php';

        return $this->privates['security.helper'] = new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\HttpUtils.php';

        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /**
     * Gets the private 'security.logout.handler.csrf_token_clearing' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler
     */
    protected function getSecurity_Logout_Handler_CsrfTokenClearingService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\CsrfTokenClearingLogoutHandler.php';

        return $this->privates['security.logout.handler.csrf_token_clearing'] = new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()));
    }

    /**
     * Gets the private 'security.logout.handler.session' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\SessionLogoutHandler
     */
    protected function getSecurity_Logout_Handler_SessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\SessionLogoutHandler.php';

        return $this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }

    /**
     * Gets the private 'security.logout.success_handler.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler
     */
    protected function getSecurity_Logout_SuccessHandler_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\DefaultLogoutSuccessHandler.php';

        return $this->privates['security.logout.success_handler.main'] = new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler(($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), '/');
    }

    /**
     * Gets the private 'security.logout_listener.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\LogoutListener
     */
    protected function getSecurity_LogoutListener_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LogoutListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\SessionLogoutHandler.php';

        $this->privates['security.logout_listener.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\LogoutListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), ($this->privates['security.logout.success_handler.main'] ?? $this->getSecurity_Logout_SuccessHandler_MainService()), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'app_logout']);

        $instance->addHandler(($this->privates['security.logout.handler.csrf_token_clearing'] ?? $this->getSecurity_Logout_Handler_CsrfTokenClearingService()));
        $instance->addHandler(($this->privates['security.logout.handler.session'] ?? ($this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler())));

        return $instance;
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('main', 'app_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]);
    }

    /**
     * Gets the private 'security.untracked_token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_UntrackedTokenStorageService()
    {
        return $this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the private 'security.user.provider.concrete.app_user_provider' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_AppUserProviderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Security\\User\\EntityUserProvider.php';

        return $this->privates['security.user.provider.concrete.app_user_provider'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\User', 'email', NULL);
    }

    /**
     * Gets the private 'security.user_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserCheckerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserChecker.php';

        return $this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Validator\\Constraints\\UserPasswordValidator.php';

        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->privates['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['sensio_framework_extra.converter.doctrine.orm.expression_language.default'] ?? ($this->privates['sensio_framework_extra.converter.doctrine.orm.expression_language.default'] = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage())));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.doctrine.orm.expression_language.default' shared service.
     *
     * @return \Symfony\Component\ExpressionLanguage\ExpressionLanguage
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_Orm_ExpressionLanguage_DefaultService()
    {
        return $this->privates['sensio_framework_extra.converter.doctrine.orm.expression_language.default'] = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(($this->privates['sensio_framework_extra.converter.manager'] ?? $this->getSensioFrameworkExtra_Converter_ManagerService()), true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->privates['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(($this->privates['sensio_framework_extra.converter.doctrine.orm'] ?? $this->getSensioFrameworkExtra_Converter_Doctrine_OrmService()), 0, 'doctrine.orm');
        $instance->add(($this->privates['framework_extra_bundle.date_time_param_converter'] ?? ($this->privates['framework_extra_bundle.date_time_param_converter'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter())), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.security.expression_language.default' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage
     */
    protected function getSensioFrameworkExtra_Security_ExpressionLanguage_DefaultService()
    {
        return $this->privates['sensio_framework_extra.security.expression_language.default'] = new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage();
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->privates['sensio_framework_extra.security.expression_language.default'] ?? ($this->privates['sensio_framework_extra.security.expression_language.default'] = new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->privates['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(($this->privates['sensio_framework_extra.view.guesser'] ?? ($this->privates['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'serializer.denormalizer.array' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer
     */
    protected function getSerializer_Denormalizer_ArrayService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ArrayDenormalizer.php';

        return $this->privates['serializer.denormalizer.array'] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
    }

    /**
     * Gets the private 'serializer.encoder.csv' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\CsvEncoder
     */
    protected function getSerializer_Encoder_CsvService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\CsvEncoder.php';

        return $this->privates['serializer.encoder.csv'] = new \Symfony\Component\Serializer\Encoder\CsvEncoder();
    }

    /**
     * Gets the private 'serializer.encoder.json' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\JsonEncoder
     */
    protected function getSerializer_Encoder_JsonService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\JsonEncoder.php';

        return $this->privates['serializer.encoder.json'] = new \Symfony\Component\Serializer\Encoder\JsonEncoder();
    }

    /**
     * Gets the private 'serializer.encoder.xml' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\XmlEncoder
     */
    protected function getSerializer_Encoder_XmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\XmlEncoder.php';

        return $this->privates['serializer.encoder.xml'] = new \Symfony\Component\Serializer\Encoder\XmlEncoder();
    }

    /**
     * Gets the private 'serializer.encoder.yaml' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\YamlEncoder
     */
    protected function getSerializer_Encoder_YamlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\YamlEncoder.php';

        return $this->privates['serializer.encoder.yaml'] = new \Symfony\Component\Serializer\Encoder\YamlEncoder();
    }

    /**
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\SerializerCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\AnnotationLoader.php';

        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /**
     * Gets the private 'serializer.mapping.chain_loader' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Loader\LoaderChain
     */
    protected function getSerializer_Mapping_ChainLoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderChain.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\AnnotationLoader.php';

        return $this->privates['serializer.mapping.chain_loader'] = new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))]);
    }

    /**
     * Gets the private 'serializer.mapping.class_discriminator_resolver' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata
     */
    protected function getSerializer_Mapping_ClassDiscriminatorResolverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\ClassDiscriminatorResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\ClassDiscriminatorFromClassMetadata.php';

        return $this->privates['serializer.mapping.class_discriminator_resolver'] = new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassResolverTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassMetadataFactory.php';

        return $this->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(($this->privates['serializer.mapping.chain_loader'] ?? $this->getSerializer_Mapping_ChainLoaderService()), NULL);
    }

    /**
     * Gets the private 'serializer.name_converter.metadata_aware' shared service.
     *
     * @return \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter
     */
    protected function getSerializer_NameConverter_MetadataAwareService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\NameConverter\\NameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\NameConverter\\AdvancedNameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\NameConverter\\MetadataAwareNameConverter.php';

        return $this->privates['serializer.name_converter.metadata_aware'] = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'serializer.normalizer.constraint_violation_list' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer
     */
    protected function getSerializer_Normalizer_ConstraintViolationListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ConstraintViolationListNormalizer.php';

        return $this->privates['serializer.normalizer.constraint_violation_list'] = new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService()));
    }

    /**
     * Gets the private 'serializer.normalizer.data_uri' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DataUriNormalizer
     */
    protected function getSerializer_Normalizer_DataUriService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DataUriNormalizer.php';

        return $this->privates['serializer.normalizer.data_uri'] = new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService()));
    }

    /**
     * Gets the private 'serializer.normalizer.dateinterval' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer
     */
    protected function getSerializer_Normalizer_DateintervalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateIntervalNormalizer.php';

        return $this->privates['serializer.normalizer.dateinterval'] = new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.datetime' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer
     */
    protected function getSerializer_Normalizer_DatetimeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateTimeNormalizer.php';

        return $this->privates['serializer.normalizer.datetime'] = new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.datetimezone' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer
     */
    protected function getSerializer_Normalizer_DatetimezoneService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateTimeZoneNormalizer.php';

        return $this->privates['serializer.normalizer.datetimezone'] = new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.json_serializable' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer
     */
    protected function getSerializer_Normalizer_JsonSerializableService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\JsonSerializableNormalizer.php';

        return $this->privates['serializer.normalizer.json_serializable'] = new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.object' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ObjectNormalizer
     */
    protected function getSerializer_Normalizer_ObjectService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\AbstractObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ObjectNormalizer.php';

        return $this->privates['serializer.normalizer.object'] = new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()), ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService()), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['property_info'] ?? $this->getPropertyInfoService()), ($this->privates['serializer.mapping.class_discriminator_resolver'] ?? $this->getSerializer_Mapping_ClassDiscriminatorResolverService()), NULL, []);
    }

    /**
     * Gets the private 'serializer.normalizer.problem' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ProblemNormalizer
     */
    protected function getSerializer_Normalizer_ProblemService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ProblemNormalizer.php';

        return $this->privates['serializer.normalizer.problem'] = new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true);
    }

    /**
     * Gets the private 'session.attribute_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag
     */
    protected function getSession_AttributeBagService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBag.php';

        return $this->privates['session.attribute_bag'] = new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag();
    }

    /**
     * Gets the private 'session.flash_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Flash\FlashBag
     */
    protected function getSession_FlashBagService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBag.php';

        return $this->privates['session.flash_bag'] = new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag();
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php';

        return $this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0);
    }

    /**
     * Gets the private 'session.storage.mock_file' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_MockFileService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MockArraySessionStorage.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MockFileSessionStorage.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php';

        return $this->privates['session.storage.mock_file'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage(($this->targetDir.''.'/sessions'), 'MOCKSESSID', ($this->privates['session.storage.metadata_bag'] ?? ($this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0))));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'test.client.cookiejar' service.
     *
     * @return \Symfony\Component\BrowserKit\CookieJar
     */
    protected function getTest_Client_CookiejarService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\CookieJar.php';

        return new \Symfony\Component\BrowserKit\CookieJar();
    }

    /**
     * Gets the private 'test.client.history' service.
     *
     * @return \Symfony\Component\BrowserKit\History
     */
    protected function getTest_Client_HistoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\History.php';

        return new \Symfony\Component\BrowserKit\History();
    }

    /**
     * Gets the private 'test.session.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TestSessionListener
     */
    protected function getTest_Session_ListenerService()
    {
        return $this->privates['test.session.listener'] = new \Symfony\Component\HttpKernel\EventListener\TestSessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]), $this->parameters['session.storage.options']);
    }

    /**
     * Gets the private 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\CsvFileDumper.php';

        return $this->privates['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\IniFileDumper.php';

        return $this->privates['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\JsonFileDumper.php';

        return $this->privates['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\MoFileDumper.php';

        return $this->privates['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\PhpFileDumper.php';

        return $this->privates['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\PoFileDumper.php';

        return $this->privates['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\QtFileDumper.php';

        return $this->privates['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\IcuResFileDumper.php';

        return $this->privates['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\XliffFileDumper.php';

        return $this->privates['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.yaml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YamlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\YamlFileDumper.php';

        return $this->privates['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml');
    }

    /**
     * Gets the private 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\YamlFileDumper.php';

        return $this->privates['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\ChainExtractor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\PhpExtractor.php';

        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', ($this->privates['translation.extractor.php'] ?? ($this->privates['translation.extractor.php'] = new \Symfony\Component\Translation\Extractor\PhpExtractor())));
        $instance->addExtractor('twig', ($this->privates['twig.translation.extractor'] ?? $this->getTwig_Translation_ExtractorService()));

        return $instance;
    }

    /**
     * Gets the private 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\PhpExtractor.php';

        return $this->privates['translation.extractor.php'] = new \Symfony\Component\Translation\Extractor\PhpExtractor();
    }

    /**
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\CsvFileLoader.php';

        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IcuDatFileLoader.php';

        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IniFileLoader.php';

        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\JsonFileLoader.php';

        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\MoFileLoader.php';

        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\PhpFileLoader.php';

        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\PoFileLoader.php';

        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\QtFileLoader.php';

        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IcuResFileLoader.php';

        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\XliffFileLoader.php';

        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\YamlFileLoader.php';

        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Reader\\TranslationReaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Reader\\TranslationReader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\XliffFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\PoFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\MoFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\QtFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\CsvFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IcuDatFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IniFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\JsonFileLoader.php';

        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /**
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php';

        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /**
     * Gets the private 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Writer\\TranslationWriterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Writer\\TranslationWriter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\PhpFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\XliffFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\PoFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\MoFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\YamlFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\QtFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\CsvFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\IniFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\JsonFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\IcuResFileDumper.php';

        $this->privates['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', ($this->privates['translation.dumper.php'] ?? ($this->privates['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper())));
        $instance->addDumper('xlf', ($this->privates['translation.dumper.xliff'] ?? ($this->privates['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper())));
        $instance->addDumper('po', ($this->privates['translation.dumper.po'] ?? ($this->privates['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper())));
        $instance->addDumper('mo', ($this->privates['translation.dumper.mo'] ?? ($this->privates['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper())));
        $instance->addDumper('yml', ($this->privates['translation.dumper.yml'] ?? ($this->privates['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper())));
        $instance->addDumper('yaml', ($this->privates['translation.dumper.yaml'] ?? ($this->privates['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'))));
        $instance->addDumper('ts', ($this->privates['translation.dumper.qt'] ?? ($this->privates['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper())));
        $instance->addDumper('csv', ($this->privates['translation.dumper.csv'] ?? ($this->privates['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper())));
        $instance->addDumper('ini', ($this->privates['translation.dumper.ini'] ?? ($this->privates['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper())));
        $instance->addDumper('json', ($this->privates['translation.dumper.json'] ?? ($this->privates['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper())));
        $instance->addDumper('res', ($this->privates['translation.dumper.res'] ?? ($this->privates['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper())));

        return $instance;
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
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
        ]), ($this->privates['translator.formatter.default'] ?? $this->getTranslator_Formatter_DefaultService()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ar.xliff')], 'az' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.bg.xliff')], 'ca' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ca.xlf')], 'cs' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.cs.xliff')], 'cy' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.da.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.da.xliff')], 'de' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.de.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.de.xliff')], 'el' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.en.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.en.xliff')], 'es' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.es.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.es.xliff')], 'et' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.eu.xliff')], 'fa' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.fa.xliff')], 'fi' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fi.xlf')], 'fr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.fr.xliff')], 'gl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.hr.xlf')], 'hu' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.hu.xliff')], 'hy' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.id.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.id.xliff')], 'it' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.it.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.it.xliff')], 'ja' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ja.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ja.xliff')], 'lb' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.nl.xliff')], 'nn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.no.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.no.xliff')], 'pl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.pl.xliff')], 'pt' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pt.xlf')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ru.xliff')], 'sk' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sl.xlf')], 'sq' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sv.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.sv.xliff')], 'th' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.tr.xlf')], 'uk' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.uk.xliff')], 'vi' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.zh_CN.xlf')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_TW.xlf')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_PT.xlf')], 'ky' => [0 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ky.xliff')], 'sw' => [0 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.sw.xliff')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations'), 4 => (\dirname(__DIR__, 4).'/translations'), 5 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/translations'), 6 => (\dirname(__DIR__, 4).'\\src/Resources/FrameworkBundle/translations'), 7 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/translations'), 8 => (\dirname(__DIR__, 4).'\\src/Resources/TwigBundle/translations'), 9 => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src/translations'), 10 => (\dirname(__DIR__, 4).'\\src/Resources/TwigExtraBundle/translations'), 11 => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src/translations'), 12 => (\dirname(__DIR__, 4).'\\src/Resources/SensioFrameworkExtraBundle/translations'), 13 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/translations'), 14 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineBundle/translations'), 15 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle/translations'), 16 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineMigrationsBundle/translations'), 17 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/translations'), 18 => (\dirname(__DIR__, 4).'\\src/Resources/SecurityBundle/translations'), 19 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/translations'), 20 => (\dirname(__DIR__, 4).'\\src/Resources/WebProfilerBundle/translations'), 21 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bundle/translations'), 22 => (\dirname(__DIR__, 4).'\\src/Resources/MonologBundle/translations'), 23 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle/translations'), 24 => (\dirname(__DIR__, 4).'\\src/Resources/DebugBundle/translations'), 25 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle/translations'), 26 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineFixturesBundle/translations'), 27 => (\dirname(__DIR__, 4).'\\src/Resources/KnpPaginatorBundle/translations'), 28 => (\dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src/translations'), 29 => (\dirname(__DIR__, 4).'\\src/Resources/LiipTestFixturesBundle/translations'), 30 => (\dirname(__DIR__, 4).'\\src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations'), 4 => 'translations', 5 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/translations'), 6 => (\dirname(__DIR__, 4).'\\src/Resources/FrameworkBundle/translations'), 7 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/translations'), 8 => (\dirname(__DIR__, 4).'\\src/Resources/TwigBundle/translations'), 9 => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src/translations'), 10 => (\dirname(__DIR__, 4).'\\src/Resources/TwigExtraBundle/translations'), 11 => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src/translations'), 12 => (\dirname(__DIR__, 4).'\\src/Resources/SensioFrameworkExtraBundle/translations'), 13 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/translations'), 14 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineBundle/translations'), 15 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle/translations'), 16 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineMigrationsBundle/translations'), 17 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/translations'), 18 => (\dirname(__DIR__, 4).'\\src/Resources/SecurityBundle/translations'), 19 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/translations'), 20 => (\dirname(__DIR__, 4).'\\src/Resources/WebProfilerBundle/translations'), 21 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bundle/translations'), 22 => (\dirname(__DIR__, 4).'\\src/Resources/MonologBundle/translations'), 23 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle/translations'), 24 => (\dirname(__DIR__, 4).'\\src/Resources/DebugBundle/translations'), 25 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle/translations'), 26 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineFixturesBundle/translations'), 27 => (\dirname(__DIR__, 4).'\\src/Resources/KnpPaginatorBundle/translations'), 28 => (\dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src/translations'), 29 => (\dirname(__DIR__, 4).'\\src/Resources/LiipTestFixturesBundle/translations'), 30 => (\dirname(__DIR__, 4).'\\src/Resources/translations')]]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /**
     * Gets the private 'translator.formatter.default' shared service.
     *
     * @return \Symfony\Component\Translation\Formatter\MessageFormatter
     */
    protected function getTranslator_Formatter_DefaultService()
    {
        return $this->privates['translator.formatter.default'] = new \Symfony\Component\Translation\Formatter\MessageFormatter(($this->privates['identity_translator'] ?? ($this->privates['identity_translator'] = new \Symfony\Component\Translation\IdentityTranslator())));
    }

    /**
     * Gets the private 'twig.app_variable' shared service.
     *
     * @return \Symfony\Bridge\Twig\AppVariable
     */
    protected function getTwig_AppVariableService()
    {
        $this->privates['twig.app_variable'] = $instance = new \Symfony\Bridge\Twig\AppVariable();

        $instance->setEnvironment('test');
        $instance->setDebug(true);
        if ($this->has('security.token_storage')) {
            $instance->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $instance->setRequestStack(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        }

        return $instance;
    }

    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Command\\DebugCommand.php';

        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), (\dirname(__DIR__, 4).'\\src'));

        $instance->setName('debug:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Command\\LintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\Command\\LintCommand.php';

        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.configurator.environment' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator
     */
    protected function getTwig_Configurator_EnvironmentService()
    {
        return $this->privates['twig.configurator.environment'] = new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ',');
    }

    /**
     * Gets the private 'twig.error_renderer.html' shared service.
     *
     * @return \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer
     */
    protected function getTwig_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\ErrorRenderer\\TwigErrorRenderer.php';

        return $this->privates['twig.error_renderer.html'] = new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true));
    }

    /**
     * Gets the private 'twig.extension.assets' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\AssetExtension
     */
    protected function getTwig_Extension_AssetsService()
    {
        return $this->privates['twig.extension.assets'] = new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService()));
    }

    /**
     * Gets the private 'twig.extension.code' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CodeExtension
     */
    protected function getTwig_Extension_CodeService()
    {
        return $this->privates['twig.extension.code'] = new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), 'UTF-8');
    }

    /**
     * Gets the private 'twig.extension.debug.stopwatch' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\StopwatchExtension
     */
    protected function getTwig_Extension_Debug_StopwatchService()
    {
        return $this->privates['twig.extension.debug.stopwatch'] = new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), true);
    }

    /**
     * Gets the private 'twig.extension.dump' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\DumpExtension
     */
    protected function getTwig_Extension_DumpService()
    {
        return $this->privates['twig.extension.dump'] = new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()));
    }

    /**
     * Gets the private 'twig.extension.expression' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ExpressionExtension
     */
    protected function getTwig_Extension_ExpressionService()
    {
        return $this->privates['twig.extension.expression'] = new \Symfony\Bridge\Twig\Extension\ExpressionExtension();
    }

    /**
     * Gets the private 'twig.extension.form' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\FormExtension
     */
    protected function getTwig_Extension_FormService()
    {
        return $this->privates['twig.extension.form'] = new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']);
    }

    /**
     * Gets the private 'twig.extension.httpfoundation' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpFoundationExtension
     */
    protected function getTwig_Extension_HttpfoundationService()
    {
        return $this->privates['twig.extension.httpfoundation'] = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(($this->privates['url_helper'] ?? $this->getUrlHelperService()));
    }

    /**
     * Gets the private 'twig.extension.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelExtension
     */
    protected function getTwig_Extension_HttpkernelService()
    {
        return $this->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension();
    }

    /**
     * Gets the private 'twig.extension.logout_url' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\LogoutUrlExtension
     */
    protected function getTwig_Extension_LogoutUrlService()
    {
        return $this->privates['twig.extension.logout_url'] = new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'twig.extension.profiler' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ProfilerExtension
     */
    protected function getTwig_Extension_ProfilerService()
    {
        return $this->privates['twig.extension.profiler'] = new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'twig.extension.routing' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\RoutingExtension
     */
    protected function getTwig_Extension_RoutingService()
    {
        return $this->privates['twig.extension.routing'] = new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'twig.extension.security' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\SecurityExtension
     */
    protected function getTwig_Extension_SecurityService()
    {
        return $this->privates['twig.extension.security'] = new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'twig.extension.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfExtension
     */
    protected function getTwig_Extension_SecurityCsrfService()
    {
        return $this->privates['twig.extension.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfExtension();
    }

    /**
     * Gets the private 'twig.extension.trans' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\TranslationExtension
     */
    protected function getTwig_Extension_TransService()
    {
        return $this->privates['twig.extension.trans'] = new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'twig.extension.weblink' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\WebLinkExtension
     */
    protected function getTwig_Extension_WeblinkService()
    {
        return $this->privates['twig.extension.weblink'] = new \Symfony\Bridge\Twig\Extension\WebLinkExtension(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'twig.extension.webprofiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension
     */
    protected function getTwig_Extension_WebprofilerService()
    {
        $a = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $a->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $this->privates['twig.extension.webprofiler'] = new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($a);
    }

    /**
     * Gets the private 'twig.extension.yaml' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\YamlExtension
     */
    protected function getTwig_Extension_YamlService()
    {
        return $this->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension();
    }

    /**
     * Gets the private 'twig.form.engine' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRendererEngine
     */
    protected function getTwig_Form_EngineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRendererEngineInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractRendererEngine.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Form\\TwigRendererEngine.php';

        return $this->privates['twig.form.engine'] = new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRenderer.php';

        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(($this->privates['twig.form.engine'] ?? $this->getTwig_Form_EngineService()), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.loader.native_filesystem' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader
     */
    protected function getTwig_Loader_NativeFilesystemService()
    {
        $this->privates['twig.loader.native_filesystem'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader([], \dirname(__DIR__, 4));

        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/Resources/views'), 'Twig');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/Resources/views'), '!Twig');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/Resources/views'), 'Security');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/Resources/views'), '!Security');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), 'WebProfiler');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), '!WebProfiler');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle/Resources/views'), 'Debug');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle/Resources/views'), '!Debug');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/templates'), 'KnpPaginator');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/templates'), '!KnpPaginator');
        $instance->addPath((\dirname(__DIR__, 4).'/templates'));
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), 'email');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), '!email');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    protected function getTwig_Mailer_MessageListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\EventListener\\MessageListener.php';

        return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, ($this->privates['twig.mime_body_renderer'] ?? $this->getTwig_MimeBodyRendererService()));
    }

    /**
     * Gets the private 'twig.mime_body_renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Mime\BodyRenderer
     */
    protected function getTwig_MimeBodyRendererService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\BodyRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Mime\\BodyRenderer.php';

        return $this->privates['twig.mime_body_renderer'] = new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'twig.missing_extension_suggestor' shared service.
     *
     * @return \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor
     */
    protected function getTwig_MissingExtensionSuggestorService()
    {
        return $this->privates['twig.missing_extension_suggestor'] = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->privates['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelRuntime.php';

        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(($this->privates['fragment.handler'] ?? $this->getFragment_HandlerService()));
    }

    /**
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfRuntime.php';

        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.runtime_loader' shared service.
     *
     * @return \Twig\RuntimeLoader\ContainerRuntimeLoader
     */
    protected function getTwig_RuntimeLoaderService()
    {
        return $this->privates['twig.runtime_loader'] = new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ]));
    }

    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\CompatibilityServiceSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\CacheWarmer\\TemplateCacheWarmer.php';

        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $this), ($this->privates['twig.template_iterator'] ?? $this->getTwig_TemplateIteratorService()));
    }

    /**
     * Gets the private 'twig.template_iterator' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TemplateIterator
     */
    protected function getTwig_TemplateIteratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\TemplateIterator.php';

        return $this->privates['twig.template_iterator'] = new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'\\src'), [(\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates'));
    }

    /**
     * Gets the private 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Translation\\TwigExtractor.php';

        return $this->privates['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'url_helper' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\UrlHelper
     */
    protected function getUrlHelperService()
    {
        return $this->privates['url_helper'] = new \Symfony\Component\HttpFoundation\UrlHelper(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => ($this->privates['doctrine.orm.validator_initializer'] ?? $this->getDoctrine_Orm_ValidatorInitializerService())]);
        $instance->addLoader(($this->privates['validator.property_info_loader'] ?? $this->getValidator_PropertyInfoLoaderService()));
        $instance->addLoader(($this->privates['doctrine.orm.default_entity_manager.validator_loader'] ?? $this->getDoctrine_Orm_DefaultEntityManager_ValidatorLoaderService()));

        return $instance;
    }

    /**
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Constraints\\EmailValidator.php';

        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /**
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Constraints\\ExpressionValidator.php';

        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\ValidatorCacheWarmer.php';

        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /**
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Constraints\\NotCompromisedPasswordValidator.php';

        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), 'UTF-8', false, NULL);
    }

    /**
     * Gets the private 'validator.property_info_loader' shared service.
     *
     * @return \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader
     */
    protected function getValidator_PropertyInfoLoaderService()
    {
        $a = ($this->privates['property_info'] ?? $this->getPropertyInfoService());

        return $this->privates['validator.property_info_loader'] = new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL);
    }

    /**
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->privates['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ]));
    }

    /**
     * Gets the private 'var_dumper.command.server_dump' shared service.
     *
     * @return \Symfony\Bundle\DebugBundle\Command\ServerDumpPlaceholderCommand
     */
    protected function getVarDumper_Command_ServerDumpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle\\Command\\ServerDumpPlaceholderCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Command\\Descriptor\\DumpDescriptorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Command\\Descriptor\\CliDescriptor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Command\\Descriptor\\HtmlDescriptor.php';

        $this->privates['var_dumper.command.server_dump'] = $instance = new \Symfony\Bundle\DebugBundle\Command\ServerDumpPlaceholderCommand(($this->privates['var_dumper.dump_server'] ?? $this->getVarDumper_DumpServerService()), ['cli' => new \Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->getVarDumper_ContextualizedCliDumper_InnerService())), 'html' => new \Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor(($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()))]);

        $instance->setName('server:dump');

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.contextualized_cli_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\ContextualizedDumper
     */
    protected function getVarDumper_ContextualizedCliDumperService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\ContextualizedDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\ContextProvider\\ContextProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\ContextProvider\\SourceContextProvider.php';

        return $this->privates['var_dumper.contextualized_cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\ContextualizedDumper(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->getVarDumper_ContextualizedCliDumper_InnerService()), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()))]);
    }

    /**
     * Gets the private 'var_dumper.contextualized_cli_dumper.inner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_ContextualizedCliDumper_InnerService()
    {
        $this->privates['var_dumper.contextualized_cli_dumper.inner'] = $instance = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.dump_server' shared service.
     *
     * @return \Symfony\Component\VarDumper\Server\DumpServer
     */
    protected function getVarDumper_DumpServerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Server\\DumpServer.php';

        return $this->privates['var_dumper.dump_server'] = new \Symfony\Component\VarDumper\Server\DumpServer('', ($this->privates['monolog.logger.debug'] ?? $this->getMonolog_Logger_DebugService()));
    }

    /**
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'web_link.add_link_header_listener' shared service.
     *
     * @return \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener
     */
    protected function getWebLink_AddLinkHeaderListenerService()
    {
        return $this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener();
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Csp\\ContentSecurityPolicyHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Csp\\NonceGenerator.php';

        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
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

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
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
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/srcApp_KernelTestDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'\\src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'test',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'\\log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'LiipTestFixturesBundle' => 'Liip\\TestFixturesBundle\\LiipTestFixturesBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'DebugBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'DoctrineFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ],
                'KnpPaginatorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ],
                'LiipTestFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\liip\\test-fixtures-bundle\\src'),
                    'namespace' => 'Liip\\TestFixturesBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelTestDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'test.client.parameters' => [

            ],
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
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelTestDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
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
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
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
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'knp_paginator.template.pagination' => '@KnpPaginator/Pagination/sliding.html.twig',
            'knp_paginator.template.filtration' => '@KnpPaginator/Pagination/filtration.html.twig',
            'knp_paginator.template.sortable' => '@KnpPaginator/Pagination/sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'liip_test_fixtures.cache_db.sqlite' => NULL,
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.http_client' => [
                    0 => 'http_client',
                    1 => '@WebProfiler/Collector/http_client.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'mailer.data_collector' => [
                    0 => 'mailer',
                    1 => '@WebProfiler/Collector/mailer.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [

            ],
        ];
    }
}
