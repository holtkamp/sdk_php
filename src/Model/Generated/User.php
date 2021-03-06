<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * Using this call you can retrieve information of the user you are logged
 * in as. This includes your user id, which is referred to in endpoints.
 *
 * @generated
 */
class User extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s';
    const ENDPOINT_URL_LISTING = 'user';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'User';

    /**
     * @var UserLight
     */
    protected $userLight;

    /**
     * @var UserPerson
     */
    protected $userPerson;

    /**
     * @var UserCompany
     */
    protected $userCompany;

    /**
     * Get a specific user.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<User>
     */
    public static function get(ApiContext $apiContext, $userId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId]
            ),
            [],
            $customHeaders
        );

        return static::fromJson($responseRaw);
    }

    /**
     * Get a collection of all available users.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqModel[]|User[]>
     */
    public static function listing(ApiContext $apiContext, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                []
            ),
            $params,
            $customHeaders
        );

        return static::fromJsonList($responseRaw);
    }

    /**
     * @return UserLight
     */
    public function getUserLight()
    {
        return $this->userLight;
    }

    /**
     * @param UserLight $userLight
     */
    public function setUserLight(UserLight $userLight)
    {
        $this->userLight = $userLight;
    }

    /**
     * @return UserPerson
     */
    public function getUserPerson()
    {
        return $this->userPerson;
    }

    /**
     * @param UserPerson $userPerson
     */
    public function setUserPerson(UserPerson $userPerson)
    {
        $this->userPerson = $userPerson;
    }

    /**
     * @return UserCompany
     */
    public function getUserCompany()
    {
        return $this->userCompany;
    }

    /**
     * @param UserCompany $userCompany
     */
    public function setUserCompany(UserCompany $userCompany)
    {
        $this->userCompany = $userCompany;
    }
}
