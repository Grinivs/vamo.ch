<?php
require_once(__DIR__ . '/vendor/wallee/sdk/autoload.php');


// Setup API client
$client = new \Wallee\Sdk\ApiClient('2196', '0lL+yvS9KjLzd/hG2BJmJHU7ASUCghRC2pn9Ox8VUVs=');

// Create API service instance
$service = new \Wallee\Sdk\Service\AccountService($apiClient);
// The filter which restricts the entities which are used to calculate the count.
$filter = new \Wallee\Sdk\Model\EntityQueryFilter();

try {
    $result = $apiService->count($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountService->count: ', $e->getMessage(), PHP_EOL;
}

?>
