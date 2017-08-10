<?php
namespace Microsoft\Azure\Management\RecoveryServices\Backup;
final class JobOperationResults
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_Get_operation = $_client->createOperation('JobOperationResults_Get');
    }
    /**
     * Fetches the result of any operation.
            the operation.
     * @param string $vaultName
     * @param string $resourceGroupName
     * @param string $jobName
     * @param string $operationId
     */
    public function get(
        $vaultName,
        $resourceGroupName,
        $jobName,
        $operationId
    )
    {
        return $this->_Get_operation->call([
            'vaultName' => $vaultName,
            'resourceGroupName' => $resourceGroupName,
            'jobName' => $jobName,
            'operationId' => $operationId
        ]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_Get_operation;
}