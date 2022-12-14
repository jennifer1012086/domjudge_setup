<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/SerializerInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/ArrayTransformerInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Serializer.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/GraphNavigator/Factory/GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/GraphNavigator/Factory/DeserializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Handler/HandlerRegistryInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer-bundle/Debug/TraceableHandlerRegistry.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Handler/HandlerRegistry.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Handler/LazyHandlerRegistry.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Construction/ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Construction/DoctrineObjectConstructor.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Construction/UnserializeObjectConstructor.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Accessor/AccessorStrategyInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Accessor/DefaultAccessorStrategy.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Expression/CompilableExpressionEvaluatorInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Expression/ExpressionEvaluatorInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Expression/ExpressionEvaluator.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer-bundle/ExpressionLanguage/BasicSerializerFunctionsProvider.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/EventDispatcher/EventDispatcherInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/EventDispatcher/EventDispatcher.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/EventDispatcher/LazyEventDispatcher.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer-bundle/Debug/TraceableEventDispatcher.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/GraphNavigator/Factory/SerializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Visitor/Factory/SerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Visitor/Factory/JsonSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Visitor/Factory/XmlSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Visitor/Factory/DeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Visitor/Factory/JsonDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Visitor/Factory/XmlDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/ContextFactory/SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/ContextFactory/DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Type/ParserInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Type/Parser.php';

        $a = ($container->privates['jms_serializer.metadata_factory'] ?? $container->load('getJmsSerializer_MetadataFactoryService'));
        $b = new \JMS\SerializerBundle\Debug\TraceableHandlerRegistry(new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fos_rest.serializer.flatten_exception_handler' => ['services', 'fos_rest.serializer.flatten_exception_handler', 'getFosRest_Serializer_FlattenExceptionHandlerService', true],
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService', true],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService', true],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService', true],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService', true],
            'fos_rest.serializer.form_error_handler' => ['privates', 'fos_rest.serializer.form_error_handler', 'getFosRest_Serializer_FormErrorHandlerService', true],
        ], [
            'fos_rest.serializer.flatten_exception_handler' => '?',
            'jms_serializer.array_collection_handler' => '?',
            'jms_serializer.constraint_violation_handler' => '?',
            'jms_serializer.datetime_handler' => '?',
            'jms_serializer.iterator_handler' => '?',
            'fos_rest.serializer.form_error_handler' => '?',
        ])));
        $b->registerHandler(1, 'Symfony\\Component\\ErrorHandler\\Exception\\FlattenException', 'json', [0 => 'fos_rest.serializer.flatten_exception_handler', 1 => 'serializeToJson']);
        $b->registerHandler(1, 'ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolationList', 'xml', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolationList', 'json', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolation', 'xml', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolation', 'json', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson']);
        $b->registerHandler(1, 'DateTime', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']);
        $b->registerHandler(1, 'DateTime', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']);
        $b->registerHandler(1, 'DateTimeImmutable', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']);
        $b->registerHandler(1, 'DateTimeImmutable', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']);
        $b->registerHandler(1, 'DateInterval', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']);
        $b->registerHandler(1, 'DateInterval', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']);
        $b->registerHandler(1, 'DateTimeInterface', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeInterface']);
        $b->registerHandler(1, 'DateTimeInterface', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeInterface']);
        $b->registerHandler(1, 'Iterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Iterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'ArrayIterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'ArrayIterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Generator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Generator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\Form', 'xml', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\Form', 'json', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormTojson']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormInterface', 'xml', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormInterfaceToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormInterface', 'json', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormInterfaceTojson']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormError', 'xml', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormError', 'json', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorTojson']);
        $b->registerHandler(2, 'ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'DateTime', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson']);
        $b->registerHandler(2, 'DateTime', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml']);
        $b->registerHandler(2, 'DateTimeImmutable', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson']);
        $b->registerHandler(2, 'DateTimeImmutable', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml']);
        $b->registerHandler(2, 'DateInterval', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson']);
        $b->registerHandler(2, 'DateInterval', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml']);
        $b->registerHandler(2, 'DateTimeInterface', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromJson']);
        $b->registerHandler(2, 'DateTimeInterface', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromXml']);
        $b->registerHandler(2, 'Iterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'Iterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'ArrayIterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'ArrayIterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'Generator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']);
        $b->registerHandler(2, 'Generator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']);
        $c = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $c->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        $d = new \JMS\Serializer\Expression\ExpressionEvaluator($c, ['container' => $container]);

        $e = new \JMS\Serializer\Accessor\DefaultAccessorStrategy($d);
        $f = new \JMS\SerializerBundle\Debug\TraceableEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jms_serializer.traceable_runs_listener' => ['privates', 'jms_serializer.traceable_runs_listener', 'getJmsSerializer_TraceableRunsListenerService', true],
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService', true],
            'App\\Serializer\\ContestProblemVisitor' => ['privates', 'App\\Serializer\\ContestProblemVisitor', 'getContestProblemVisitorService', true],
            'App\\Serializer\\ContestVisitor' => ['privates', 'App\\Serializer\\ContestVisitor', 'getContestVisitorService', true],
            'App\\Serializer\\SetExternalIdVisitor' => ['privates', 'App\\Serializer\\SetExternalIdVisitor', 'getSetExternalIdVisitorService', true],
            'App\\Serializer\\SubmissionVisitor' => ['privates', 'App\\Serializer\\SubmissionVisitor', 'getSubmissionVisitorService', true],
            'App\\Serializer\\TeamAffiliationVisitor' => ['privates', 'App\\Serializer\\TeamAffiliationVisitor', 'getTeamAffiliationVisitorService', true],
            'App\\Serializer\\TeamVisitor' => ['privates', 'App\\Serializer\\TeamVisitor', 'getTeamVisitorService', true],
        ], [
            'jms_serializer.traceable_runs_listener' => '?',
            'jms_serializer.doctrine_proxy_subscriber' => '?',
            'App\\Serializer\\ContestProblemVisitor' => '?',
            'App\\Serializer\\ContestVisitor' => '?',
            'App\\Serializer\\SetExternalIdVisitor' => '?',
            'App\\Serializer\\SubmissionVisitor' => '?',
            'App\\Serializer\\TeamAffiliationVisitor' => '?',
            'App\\Serializer\\TeamVisitor' => '?',
        ]));
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.traceable_runs_listener', 1 => 'saveRunInfo'], NULL, NULL, NULL);
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ORM\\PersistentCollection');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\MongoDB\\PersistentCollection');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\PHPCR\\PersistentCollection');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $f->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'ProxyManager\\Proxy\\LazyLoadingInterface');
        $f->addListener('serializer.post_serialize', [0 => 'App\\Serializer\\ContestProblemVisitor', 1 => 'onPostSerialize'], 'App\\Entity\\ContestProblem', 'json', NULL);
        $f->addListener('serializer.post_serialize', [0 => 'App\\Serializer\\ContestVisitor', 1 => 'onPostSerialize'], 'App\\Entity\\Contest', 'json', NULL);
        $f->addListener('serializer.post_serialize', [0 => 'App\\Serializer\\SetExternalIdVisitor', 1 => 'onPostSerialize'], NULL, 'json', NULL);
        $f->addListener('serializer.post_serialize', [0 => 'App\\Serializer\\SubmissionVisitor', 1 => 'onPostSerialize'], 'App\\Entity\\Submission', 'json', NULL);
        $f->addListener('serializer.post_serialize', [0 => 'App\\Serializer\\TeamAffiliationVisitor', 1 => 'onPostSerialize'], 'App\\Entity\\TeamAffiliation', 'json', NULL);
        $f->addListener('serializer.post_serialize', [0 => 'App\\Serializer\\TeamVisitor', 1 => 'onPostSerialize'], 'App\\Entity\\Team', 'json', NULL);
        $g = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
        $g->setOptions(1088);
        $h = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory();
        $h->setOptions(0);

        return $container->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, new \JMS\Serializer\Construction\DoctrineObjectConstructor(($container->services['doctrine'] ?? $container->getDoctrineService()), new \JMS\Serializer\Construction\UnserializeObjectConstructor(), 'null'), $e, $f, $d), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $e, $f, $d)], ['json' => $g, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory()], ['json' => $h, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($container->services['jms_serializer.serialization_context_factory'] ?? ($container->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->services['jms_serializer.deserialization_context_factory'] ?? ($container->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}
