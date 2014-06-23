<?php
/**
 * Camelot Auth
  *
 * @author Timothy Seebus <timothyseebus@tools4schools.org>
 * @license http://opensource.org/licences/MIT
 * @package CamelotAuth
 */

namespace T4s\CamelotAuth\Auth\Saml2\Core\Elements;


use T4s\CamelotAuth\Auth\Saml2\Metadata\Elements\SAMLElementInterface;

class EncryptedAttribute implements SAMLElementInterface
{
    /**
     * elements
     */

    protected $encryptedData;

    /**
     * @var null|array
     */
    protected $encryptedKey = null;
} 