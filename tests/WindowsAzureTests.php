<?php
require dirname(__DIR__) . '/src/WindowsAzure.php';

spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'invalidargumenttypeexceptiontest' => '/unit/WindowsAzure/Core/InvalidArgumentTypeExceptionTest.php',
            'serviceexceptiontest' => '/unit/WindowsAzure/Core/ServiceExceptionTest.php',
            'sharedkeyfiltertest' => '/unit/WindowsAzure/Core/Filters/SharedKeyFilterTest.php',
            'tests\\framework\\blobservicerestproxytestbase' => '/framework/BlobServiceRestProxyTestBase.php',
            'tests\\framework\\fiddlerfilter' => '/framework/FiddlerFilter.php',
            'tests\\framework\\queueservicerestproxytestbase' => '/framework/QueueServiceRestProxyTestBase.php',
            'tests\\framework\\restproxytestbase' => '/framework/RestProxyTestBase.php',
            'tests\\framework\\servicebusrestproxytestbase' => '/framework/ServiceBusRestProxyTestBase.php',
            'tests\\framework\\servicemanagementrestproxytestbase' => '/framework/ServiceManagementRestProxyTestBase.php',
            'tests\\framework\\servicerestproxytestbase' => '/framework/ServiceRestProxyTestBase.php',
            'tests\\framework\\tableservicerestproxytestbase' => '/framework/TableServiceRestProxyTestBase.php',
            'tests\\framework\\testresources' => '/framework/TestResources.php',
            'tests\\framework\\virtualfilesystem' => '/framework/VirtualFileSystem.php',
            'tests\\framework\\wraprestproxytestbase' => '/framework/WrapRestProxyTestBase.php',
            'tests\\functional\\windowsazure\\services\\queue\\functionaltestbase' => '/functional/WindowsAzure/Services/Queue/FunctionalTestBase.php',
            'tests\\functional\\windowsazure\\services\\queue\\integrationtestbase' => '/functional/WindowsAzure/Services/Queue/IntegrationTestBase.php',
            'tests\\functional\\windowsazure\\services\\queue\\queueservicefunctionaloptionstest' => '/functional/WindowsAzure/Services/Queue/QueueServiceFunctionalOptionsTest.php',
            'tests\\functional\\windowsazure\\services\\queue\\queueservicefunctionalparametertest' => '/functional/WindowsAzure/Services/Queue/QueueServiceFunctionalParameterTest.php',
            'tests\\functional\\windowsazure\\services\\queue\\queueservicefunctionaltest' => '/functional/WindowsAzure/Services/Queue/QueueServiceFunctionalTest.php',
            'tests\\functional\\windowsazure\\services\\queue\\queueservicefunctionaltestdata' => '/functional/WindowsAzure/Services/Queue/QueueServiceFunctionalTestData.php',
            'tests\\functional\\windowsazure\\services\\queue\\queueserviceintegrationtest' => '/functional/WindowsAzure/Services/Queue/QueueServiceIntegrationTest.php',
            'tests\\functional\\windowsazure\\services\\table\\batchworkerconfig' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalTest.php',
            'tests\\functional\\windowsazure\\services\\table\\concurtype' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalTest.php',
            'tests\\functional\\windowsazure\\services\\table\\faketableinfoentry' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalTestData.php',
            'tests\\functional\\windowsazure\\services\\table\\faketentityentry' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalTestData.php',
            'tests\\functional\\windowsazure\\services\\table\\functionaltestbase' => '/functional/WindowsAzure/Services/Table/FunctionalTestBase.php',
            'tests\\functional\\windowsazure\\services\\table\\integrationtestbase' => '/functional/WindowsAzure/Services/Table/IntegrationTestBase.php',
            'tests\\functional\\windowsazure\\services\\table\\mutatepivot' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalTestUtils.php',
            'tests\\functional\\windowsazure\\services\\table\\optype' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalTest.php',
            'tests\\functional\\windowsazure\\services\\table\\tableservicefunctionaloptionstest' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalOptionsTest.php',
            'tests\\functional\\windowsazure\\services\\table\\tableservicefunctionalparameterstest' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalParametersTest.php',
            'tests\\functional\\windowsazure\\services\\table\\tableservicefunctionalquerytest' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalQueryTest.php',
            'tests\\functional\\windowsazure\\services\\table\\tableservicefunctionaltest' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalTest.php',
            'tests\\functional\\windowsazure\\services\\table\\tableservicefunctionaltestdata' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalTestData.php',
            'tests\\functional\\windowsazure\\services\\table\\tableservicefunctionaltestutils' => '/functional/WindowsAzure/Services/Table/TableServiceFunctionalTestUtils.php',
            'tests\\functional\\windowsazure\\services\\table\\tableserviceintegrationtest' => '/functional/WindowsAzure/Services/Table/TableServiceIntegrationTest.php',
            'tests\\mock\\windowsazure\\core\\authentication\\sharedkeyauthschememock' => '/mock/WindowsAzure/Services/Core/Authentication/SharedKeyAuthSchemeMock.php',
            'tests\\mock\\windowsazure\\core\\authentication\\storageauthschememock' => '/mock/WindowsAzure/Services/Core/Authentication/StorageAuthSchemeMock.php',
            'tests\\mock\\windowsazure\\core\\authentication\\tablesharedkeyliteauthschememock' => '/mock/WindowsAzure/Services/Core/Authentication/TableSharedKeyLiteAuthSchemeMock.php',
            'tests\\mock\\windowsazure\\core\\filters\\simplefiltermock' => '/mock/WindowsAzure/Services/Core/Filters/SimpleFilterMock.php',
            'tests\\unit\\windowsazure\\core\\authentication\\sharedkeyauthschemetest' => '/unit/WindowsAzure/Core/Authentication/SharedKeyAuthSchemeTest.php',
            'tests\\unit\\windowsazure\\core\\authentication\\storageauthschemetest' => '/unit/WindowsAzure/Core/Authentication/StorageAuthSchemeTest.php',
            'tests\\unit\\windowsazure\\core\\authentication\\tablesharedkeyliteauthschemetest' => '/unit/WindowsAzure/Core/Authentication/TableSharedKeyLiteAuthSchemeTest.php',
            'tests\\unit\\windowsazure\\core\\configurationtest' => '/unit/WindowsAzure/Core/ConfigurationTest.php',
            'tests\\unit\\windowsazure\\core\\filters\\datefiltertest' => '/unit/WindowsAzure/Core/Filters/DateFilterTest.php',
            'tests\\unit\\windowsazure\\core\\filters\\exponentialretrypolicytest' => '/unit/WindowsAzure/Core/Filters/ExponentialRetryPolicyTest.php',
            'tests\\unit\\windowsazure\\core\\filters\\headersfiltertest' => '/unit/WindowsAzure/Core/Filters/HeadersFilterTest.php',
            'tests\\unit\\windowsazure\\core\\http\\httpcallcontexttest' => '/unit/WindowsAzure/Core/Http/HttpCallContextTest.php',
            'tests\\unit\\windowsazure\\core\\http\\httpclienttest' => '/unit/WindowsAzure/Core/Http/HttpClientTest.php',
            'tests\\unit\\windowsazure\\core\\http\\urltest' => '/unit/WindowsAzure/Core/Http/UrlTest.php',
            'tests\\unit\\windowsazure\\core\\serialization\\xmlserializertest' => '/unit/WindowsAzure/Core/Serialization/XmlSerializerTest.php',
            'tests\\unit\\windowsazure\\core\\servicerestproxytest' => '/unit/WindowsAzure/Core/ServiceRestProxyTest.php',
            'tests\\unit\\windowsazure\\core\\servicesbuildertest' => '/unit/WindowsAzure/Core/ServicesBuilderTest.php',
            'tests\\unit\\windowsazure\\createstorageserviceoptionsmanagement\\models\\createstorageserviceoptionstest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/CreateStorageServiceOptionsTest.php',
            'tests\\unit\\windowsazure\\loggertest' => '/unit/WindowsAzure/LoggerTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\acquirecurrentstatetest' => '/unit/WindowsAzure/ServiceRuntime/AcquireCurrentStateTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\chunkedgoalstatedeserializertest' => '/unit/WindowsAzure/ServiceRuntime/ChunkedGoalStateDeserializerTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\currentstatetest' => '/unit/WindowsAzure/ServiceRuntime/CurrentStateTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\fileinputchanneltest' => '/unit/WindowsAzure/ServiceRuntime/FileInputChannelTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\fileoutputchanneltest' => '/unit/WindowsAzure/ServiceRuntime/FileOutputChannelTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\goalstatetest' => '/unit/WindowsAzure/ServiceRuntime/GoalStateTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\localresourcetest' => '/unit/WindowsAzure/ServiceRuntime/LocalResourceTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\myclass' => '/unit/WindowsAzure/ServiceRuntime/RoleEnvironmentTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\protocol1runtimeclientfactorytest' => '/unit/WindowsAzure/ServiceRuntime/Protocol1RuntimeClientFactoryTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\protocol1runtimeclienttest' => '/unit/WindowsAzure/ServiceRuntime/Protocol1RuntimeClientTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\protocol1runtimecurrentstateclienttest' => '/unit/WindowsAzure/ServiceRuntime/Protocol1RuntimeCurrentStateClientTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\protocol1runtimegoalstateclienttest' => '/unit/WindowsAzure/ServiceRuntime/Protocol1RuntimeGoalStateClientTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\releasecurrentstatetest' => '/unit/WindowsAzure/ServiceRuntime/ReleaseCurrentStateTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\roleenvironmentconfigurationsettingchangetest' => '/unit/WindowsAzure/ServiceRuntime/RoleEnvironmentConfigurationSettingChangeTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\roleenvironmentdatatest' => '/unit/WindowsAzure/ServiceRuntime/RoleEnvironmentDataTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\roleenvironmenttest' => '/unit/WindowsAzure/ServiceRuntime/RoleEnvironmentTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\roleenvironmenttopologychangetest' => '/unit/WindowsAzure/ServiceRuntime/RoleEnvironmentTopologyChangeTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\roleinstanceendpointtest' => '/unit/WindowsAzure/ServiceRuntime/RoleInstanceEndpointTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\roleinstancetest' => '/unit/WindowsAzure/ServiceRuntime/RoleInstanceTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\roletest' => '/unit/WindowsAzure/ServiceRuntime/RoleTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\runtimekerneltest' => '/unit/WindowsAzure/ServiceRuntime/RuntimeKernelTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\runtimeversionmanagertest' => '/unit/WindowsAzure/ServiceRuntime/RuntimeVersionManagerTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\runtimeversionprotocolclienttest' => '/unit/WindowsAzure/ServiceRuntime/RuntimeVersionProtocolClientTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\xmlcurrentstateserializertest' => '/unit/WindowsAzure/ServiceRuntime/XmlCurrentStateSerializerTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\xmlgoalstatedeserializertest' => '/unit/WindowsAzure/ServiceRuntime/XmlGoalStateDeserializerTest.php',
            'tests\\unit\\windowsazure\\serviceruntime\\xmlroleenvironmentdatadeserializertest' => '/unit/WindowsAzure/ServiceRuntime/XmlRoleEnvironmentDataDeserializerTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\blobrestproxytest' => '/unit/WindowsAzure/Services/Blob/BlobRestProxyTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\blobservicetest' => '/unit/WindowsAzure/Services/Blob/BlobServiceTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\accessconditiontest' => '/unit/WindowsAzure/Services/Blob/Models/AccessConditionTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\accesspolicytest' => '/unit/WindowsAzure/Services/Blob/Models/AccessPolicyTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\acquireleaseoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/AcquireLeaseOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\acquireleaseresulttest' => '/unit/WindowsAzure/Services/Blob/Models/AcquireLeaseResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\blobblocktypetest' => '/unit/WindowsAzure/Services/Blob/Models/BlobBlockTypeTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\blobprefixtest' => '/unit/WindowsAzure/Services/Blob/Models/BlobPrefixTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\blobpropertiestest' => '/unit/WindowsAzure/Services/Blob/Models/BlobPropertiesTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\blobserviceoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/BlobServiceOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\blobtest' => '/unit/WindowsAzure/Services/Blob/Models/BlobTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\blobtypetest' => '/unit/WindowsAzure/Services/Blob/Models/BlobTypeTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\blocklisttest' => '/unit/WindowsAzure/Services/Blob/Models/BlockListTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\blocktest' => '/unit/WindowsAzure/Services/Blob/Models/BlockTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\commitblobblocksoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CommitBlobBlocksOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\containeracltest' => '/unit/WindowsAzure/Services/Blob/Models/ContainerACLTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\containerpropertiestest' => '/unit/WindowsAzure/Services/Blob/Models/ContainerPropertiesTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\containertest' => '/unit/WindowsAzure/Services/Blob/Models/ContainerTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\copybloboptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CopyBlobOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\createblobblockoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CreateBlobBlockOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\createbloboptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CreateBlobOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\createblobpagesoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CreateBlobPagesOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\createblobpagesresulttest' => '/unit/WindowsAzure/Services/Blob/Models/CreateBlobPagesResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\createblobsnapshotoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CreateBlobSnapshotOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\createblobsnapshotresulttest' => '/unit/WindowsAzure/Services/Blob/Models/CreateBlobSnapshotResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\createcontaineroptionstest' => '/unit/WindowsAzure/Services/Blob/Models/CreateContainerOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\deletebloboptionstest' => '/unit/WindowsAzure/Services/Blob/Models/DeleteBlobOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\deletecontaineroptionstest' => '/unit/WindowsAzure/Services/Blob/Models/DeleteContainerOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\getblobmetadataoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobMetadataOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\getblobmetadataresulttest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobMetadataResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\getbloboptionstest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\getblobpropertiesoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobPropertiesOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\getblobpropertiesresulttest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobPropertiesResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\getblobresulttest' => '/unit/WindowsAzure/Services/Blob/Models/GetBlobResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\getcontaineraclresulttest' => '/unit/WindowsAzure/Services/Blob/Models/GetContainerACLResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\getcontainerpropertiesresulttest' => '/unit/WindowsAzure/Services/Blob/Models/GetContainerPropertiesResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\leasemodetest' => '/unit/WindowsAzure/Services/Blob/Models/LeaseModeTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\listblobblocksoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/ListBlobBlocksOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\listblobblocksresulttest' => '/unit/WindowsAzure/Services/Blob/Models/ListBlobBlocksResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\listblobsoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/ListBlobsOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\listblobsresulttest' => '/unit/WindowsAzure/Services/Blob/Models/ListBlobsResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\listcontainersoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/ListContainersOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\listcontainersresulttest' => '/unit/WindowsAzure/Services/Blob/Models/ListContainersResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\listpageblobrangesoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/ListPageBlobRangesOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\listpageblobrangesresulttest' => '/unit/WindowsAzure/Services/Blob/Models/ListPageBlobRangesResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\pagerangetest' => '/unit/WindowsAzure/Services/Blob/Models/PageRangeTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\publicaccesstypetest' => '/unit/WindowsAzure/Services/Blob/Models/PublicAccessTypeTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\setblobmetadataoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/SetBlobMetadataOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\setblobmetadataresulttest' => '/unit/WindowsAzure/Services/Blob/Models/SetBlobMetadataResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\setblobpropertiesoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/SetBlobPropertiesOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\setblobpropertiesresulttest' => '/unit/WindowsAzure/Services/Blob/Models/SetBlobPropertiesResultTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\setcontainermetadataoptionstest' => '/unit/WindowsAzure/Services/Blob/Models/SetContainerMetadataOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\blob\\models\\signedidentifiertest' => '/unit/WindowsAzure/Services/Blob/Models/SignedIdentifierTest.php',
            'tests\\unit\\windowsazure\\services\\core\\models\\getservicepropertiesresulttest' => '/unit/WindowsAzure/Services/Core/Models/GetServicePropertiesResultTest.php',
            'tests\\unit\\windowsazure\\services\\core\\models\\loggingtest' => '/unit/WindowsAzure/Services/Core/Models/LoggingTest.php',
            'tests\\unit\\windowsazure\\services\\core\\models\\metricstest' => '/unit/WindowsAzure/Services/Core/Models/MetricsTest.php',
            'tests\\unit\\windowsazure\\services\\core\\models\\retentionpolicytest' => '/unit/WindowsAzure/Services/Core/Models/RetentionPolicyTest.php',
            'tests\\unit\\windowsazure\\services\\core\\models\\servicepropertiestest' => '/unit/WindowsAzure/Services/Core/Models/ServicePropertiesTest.php',
            'tests\\unit\\windowsazure\\services\\core\\servicesrestproxytest' => '/unit/WindowsAzure/Services/Core/ServicesRestProxyTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\createmessageoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/CreateMessageOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\createqueueoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/CreateQueueOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\getqueuemetadataresulttest' => '/unit/WindowsAzure/Services/Queue/Models/GetQueueMetadataResultTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\listmessagesoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/ListMessagesOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\listmessagesresulttest' => '/unit/WindowsAzure/Services/Queue/Models/ListMessagesResultTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\listqueuesoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/ListQueuesOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\listqueuesresulttest' => '/unit/WindowsAzure/Services/Queue/Models/ListQueuesResultTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\peekmessagesoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/PeekMessagesOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\peekmessagesresulttest' => '/unit/WindowsAzure/Services/Queue/Models/PeekMessagesResultTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\queuemessagetest' => '/unit/WindowsAzure/Services/Queue/Models/QueueMessageTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\queueserviceoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/QueueServiceOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\queuetest' => '/unit/WindowsAzure/Services/Queue/Models/QueueTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\updatemessageresulttest' => '/unit/WindowsAzure/Services/Queue/Models/UpdateMessageResultTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\models\\windowsazurequeuemessagetest' => '/unit/WindowsAzure/Services/Queue/Models/WindowsAzureQueueMessageTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\queuerestproxytest' => '/unit/WindowsAzure/Services/Queue/QueueRestProxyTest.php',
            'tests\\unit\\windowsazure\\services\\queue\\queueservicetest' => '/unit/WindowsAzure/Services/Queue/QueueServiceTest.php',
            'tests\\unit\\windowsazure\\services\\servicebus\\models\\activetokentest' => '/unit/WindowsAzure/Services/ServiceBus/models/ActiveTokenTest.php',
            'tests\\unit\\windowsazure\\services\\servicebus\\models\\wrapaccesstokenresulttest' => '/unit/WindowsAzure/Services/ServiceBus/models/WrapAccessTokenResultTest.php',
            'tests\\unit\\windowsazure\\services\\servicebus\\servicebusrestproxytest' => '/unit/WindowsAzure/Services/ServiceBus/ServiceBusRestProxyTest.php',
            'tests\\unit\\windowsazure\\services\\servicebus\\servicebusservicetest' => '/unit/WindowsAzure/Services/ServiceBus/ServiceBusServiceTest.php',
            'tests\\unit\\windowsazure\\services\\servicebus\\servicebussettingstest' => '/unit/WindowsAzure/Services/ServiceBus/ServiceBusSettingsTest.php',
            'tests\\unit\\windowsazure\\services\\servicebus\\wraprestproxytest' => '/unit/WindowsAzure/Services/ServiceBus/WrapRestProxyTest.php',
            'tests\\unit\\windowsazure\\services\\servicebus\\wrapservicetest' => '/unit/WindowsAzure/Services/ServiceBus/WrapServiceTest.php',
            'tests\\unit\\windowsazure\\services\\servicebus\\wraptokenmanagertest' => '/unit/WindowsAzure/Services/ServiceBus/WrapTokenManagerTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\affinitygrouptest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/AffinityGroupTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\asynchronousoperationresulttest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/AsynchronousOperationResultTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\createaffinitygroupoptionstest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/CreateAffinityGroupOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\getaffinitygrouppropertiesresulttest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/GetAffinityGroupPropertiesResultTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\getoperationstatusresulttest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/GetOperationStatusResultTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\getstorageservicekeysresulttest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/GetStorageServiceKeysResultTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\getstorageservicepropertiesresulttest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/GetStorageServicePropertiesResultTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\listaffinitygroupsresulttest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/ListAffinityGroupsResultTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\listlocationsresulttest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/ListLocationsResultTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\liststorageservicesresulttest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/ListStorageServicesResultTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\locationtest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/LocationTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\servicepropertiestest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/ServicePropertiesTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\servicetest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/ServiceTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\storageservicetest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/StorageServiceTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\models\\updatestorageserviceoptionstest' => '/unit/WindowsAzure/Services/ServiceManagement/Models/UpdateStorageServiceOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\servicemanagementrestproxytest' => '/unit/WindowsAzure/Services/ServiceManagement/ServiceManagementRestProxyTest.php',
            'tests\\unit\\windowsazure\\services\\servicemanagement\\servicemanagementservicetest' => '/unit/WindowsAzure/Services/ServiceManagement/ServiceManagementServiceTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\batcherrortest' => '/unit/WindowsAzure/Services/Table/Models/BatchErrorTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\batchoperationparameternametest' => '/unit/WindowsAzure/Services/Table/Models/BatchOperationParameterNameTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\batchoperationstest' => '/unit/WindowsAzure/Services/Table/Models/BatchOperationsTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\batchoperationtest' => '/unit/WindowsAzure/Services/Table/Models/BatchOperationTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\batchoperationtypetest' => '/unit/WindowsAzure/Services/Table/Models/BatchOperationTypeTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\batchresulttest' => '/unit/WindowsAzure/Services/Table/Models/BatchResultTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\deleteentityoptionstest' => '/unit/WindowsAzure/Services/Table/Models/DeleteEntityOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\edmtypetest' => '/unit/WindowsAzure/Services/Table/Models/EdmTypeTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\entitytest' => '/unit/WindowsAzure/Services/Table/Models/EntityTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\filters\\binaryfiltertest' => '/unit/WindowsAzure/Services/Table/Models/Filters/BinaryFilterTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\filters\\constantfiltertest' => '/unit/WindowsAzure/Services/Table/Models/Filters/ConstantFilterTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\filters\\filtertest' => '/unit/WindowsAzure/Services/Table/Models/Filters/FilterTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\filters\\propertynamefiltertest' => '/unit/WindowsAzure/Services/Table/Models/Filters/PropertyNameFilterTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\filters\\querystringfiltertest' => '/unit/WindowsAzure/Services/Table/Models/Filters/QueryStringFilterTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\filters\\unaryfiltertest' => '/unit/WindowsAzure/Services/Table/Models/Filters/UnaryFilterTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\getentityresulttest' => '/unit/WindowsAzure/Services/Table/Models/GetEntityResultTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\gettableresulttest' => '/unit/WindowsAzure/Services/Table/Models/GetTableResultTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\insertentityresulttest' => '/unit/WindowsAzure/Services/Table/Models/InsertEntityResultTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\propertytest' => '/unit/WindowsAzure/Services/Table/Models/PropertyTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\queryentitiesoptionstest' => '/unit/WindowsAzure/Services/Table/Models/QueryEntitiesOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\queryentitiesresulttest' => '/unit/WindowsAzure/Services/Table/Models/QueryEntitiesResultTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\querytablesoptionstest' => '/unit/WindowsAzure/Services/Table/Models/QueryTablesOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\querytablesresulttest' => '/unit/WindowsAzure/Services/Table/Models/QueryTablesResultTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\querytest' => '/unit/WindowsAzure/Services/Table/Models/QueryTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\tableserviceoptionstest' => '/unit/WindowsAzure/Services/Table/Models/TableServiceOptionsTest.php',
            'tests\\unit\\windowsazure\\services\\table\\models\\updateentityresulttest' => '/unit/WindowsAzure/Services/Table/Models/UpdateEntityResultTest.php',
            'tests\\unit\\windowsazure\\services\\table\\tablerestproxytest' => '/unit/WindowsAzure/Services/Table/TableRestProxyTest.php',
            'tests\\unit\\windowsazure\\services\\table\\tableservicetest' => '/unit/WindowsAzure/Services/Table/TableServiceTest.php',
            'tests\\unit\\windowsazure\\utilitiestest' => '/unit/WindowsAzure/UtilitiesTest.php',
            'tests\\unit\\windowsazure\\validatetest' => '/unit/WindowsAzure/ValidateTest.php',
            'wrapfiltertest' => '/unit/WindowsAzure/Core/Filters/WrapFilterTest.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
