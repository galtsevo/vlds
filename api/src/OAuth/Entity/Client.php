<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace App\Oauth\Entity;

use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\Traits\ClientTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;

class Client implements ClientEntityInterface
{
    use EntityTrait, ClientTrait;

    public function __construct(string $identifier, string $name, string $redirectUri){
        Assert::notEmpty($identifier);
        Assert::notEmpty($name);
        Assert::notEmpty($redirectUri);

        $this->setIdentifier($identifier);
        $this->name = $name;
        $this->redirectUri = $redirectUri;
    }
}
