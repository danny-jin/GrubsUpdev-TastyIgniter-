<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace SquareConnect\Api;

use \SquareConnect\Configuration;
use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\ObjectSerializer;

/**
 * BankAccountsApi Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class BankAccountsApi
{

    /**
     * API Client
     * @var \SquareConnect\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \SquareConnect\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://connect.squareup.com');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \SquareConnect\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \SquareConnect\ApiClient $apiClient set the API client
     * @return BankAccountsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    /**
     * getBankAccount
     *
     * GetBankAccount
     *
     * @param string $bank_account_id Square-issued ID of the desired &#x60;BankAccount&#x60;. (required)
     * @return \SquareConnect\Model\GetBankAccountResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function getBankAccount($bank_account_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getBankAccountWithHttpInfo ($bank_account_id);
        return $response; 
    }


    /**
     * getBankAccountWithHttpInfo
     *
     * GetBankAccount
     *
     * @param string $bank_account_id Square-issued ID of the desired &#x60;BankAccount&#x60;. (required)
     * @return Array of \SquareConnect\Model\GetBankAccountResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function getBankAccountWithHttpInfo($bank_account_id)
    {
        
        // verify the required parameter 'bank_account_id' is set
        if ($bank_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bank_account_id when calling getBankAccount');
        }
  
        // parse inputs
        $resourcePath = "/v2/bank-accounts/{bank_account_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2020-03-25";

        
        
        // path params
        if ($bank_account_id !== null) {
            $resourcePath = str_replace(
                "{" . "bank_account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($bank_account_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\GetBankAccountResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\GetBankAccountResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\GetBankAccountResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    /**
     * getBankAccountByV1Id
     *
     * GetBankAccountByV1Id
     *
     * @param string $v1_bank_account_id Connect V1 ID of the desired &#x60;BankAccount&#x60;. For more information, see  [Retrieve a bank account by using an ID issued by V1 Bank Accounts API](https://developer.squareup.com/docs/docs/bank-accounts-api#retrieve-a-bank-account-by-using-an-id-issued-by-v1-bank-accounts-api). (required)
     * @return \SquareConnect\Model\GetBankAccountByV1IdResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function getBankAccountByV1Id($v1_bank_account_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getBankAccountByV1IdWithHttpInfo ($v1_bank_account_id);
        return $response; 
    }


    /**
     * getBankAccountByV1IdWithHttpInfo
     *
     * GetBankAccountByV1Id
     *
     * @param string $v1_bank_account_id Connect V1 ID of the desired &#x60;BankAccount&#x60;. For more information, see  [Retrieve a bank account by using an ID issued by V1 Bank Accounts API](https://developer.squareup.com/docs/docs/bank-accounts-api#retrieve-a-bank-account-by-using-an-id-issued-by-v1-bank-accounts-api). (required)
     * @return Array of \SquareConnect\Model\GetBankAccountByV1IdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function getBankAccountByV1IdWithHttpInfo($v1_bank_account_id)
    {
        
        // verify the required parameter 'v1_bank_account_id' is set
        if ($v1_bank_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $v1_bank_account_id when calling getBankAccountByV1Id');
        }
  
        // parse inputs
        $resourcePath = "/v2/bank-accounts/by-v1-id/{v1_bank_account_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2020-03-25";

        
        
        // path params
        if ($v1_bank_account_id !== null) {
            $resourcePath = str_replace(
                "{" . "v1_bank_account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($v1_bank_account_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\GetBankAccountByV1IdResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\GetBankAccountByV1IdResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\GetBankAccountByV1IdResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    /**
     * listBankAccounts
     *
     * ListBankAccounts
     *
     * @param string $cursor The pagination cursor returned by a previous call to this endpoint. Use it in the next &#x60;ListBankAccounts&#x60; request to retrieve the next set  of results.  See the [Pagination](https://developer.squareup.com/docs/docs/working-with-apis/pagination) guide for more information. (optional)
     * @param int $limit Upper limit on the number of bank accounts to return in the response.  Currently, 1000 is the largest supported limit. You can specify a limit  of up to 1000 bank accounts. This is also the default limit. (optional)
     * @param string $location_id Location ID. You can specify this optional filter  to retrieve only the linked bank accounts belonging to a specific location. (optional)
     * @return \SquareConnect\Model\ListBankAccountsResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function listBankAccounts($cursor = null, $limit = null, $location_id = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listBankAccountsWithHttpInfo ($cursor, $limit, $location_id);
        return $response; 
    }


    /**
     * listBankAccountsWithHttpInfo
     *
     * ListBankAccounts
     *
     * @param string $cursor The pagination cursor returned by a previous call to this endpoint. Use it in the next &#x60;ListBankAccounts&#x60; request to retrieve the next set  of results.  See the [Pagination](https://developer.squareup.com/docs/docs/working-with-apis/pagination) guide for more information. (optional)
     * @param int $limit Upper limit on the number of bank accounts to return in the response.  Currently, 1000 is the largest supported limit. You can specify a limit  of up to 1000 bank accounts. This is also the default limit. (optional)
     * @param string $location_id Location ID. You can specify this optional filter  to retrieve only the linked bank accounts belonging to a specific location. (optional)
     * @return Array of \SquareConnect\Model\ListBankAccountsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function listBankAccountsWithHttpInfo($cursor = null, $limit = null, $location_id = null)
    {
        
  
        // parse inputs
        $resourcePath = "/v2/bank-accounts";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2020-03-25";

        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = $this->apiClient->getSerializer()->toQueryValue($cursor);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($location_id !== null) {
            $queryParams['location_id'] = $this->apiClient->getSerializer()->toQueryValue($location_id);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\ListBankAccountsResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\ListBankAccountsResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\ListBankAccountsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
}
