<?php
/**
 * Camelot Auth
 *
 * @author Timothy Seebus <timothyseebus@tools4schools.org>
 * @license http://opensource.org/licences/MIT
 * @package CamelotAuth
 */

namespace T4s\CamelotAuth\Auth\Saml2;

use T4s\CamelotAuth\Auth\AbstractAuth;

use T4s\CamelotAuth\Database\DatabaseInterface;
use T4s\CamelotAuth\Config\ConfigInterface;
use T4s\CamelotAuth\Session\SessionInterface;
use T4s\CamelotAuth\Cookie\CookieInterface;
use T4s\CamelotAuth\Messaging\MessagingInterface;
use T4s\CamelotAuth\Events\DispatcherInterface;

use T4s\CamelotAuth\Auth\Saml2\Metadata\MetadataDatabase;
use T4s\CamelotAuth\Auth\Saml2\Metadata\MetadataConfig;

class Saml2Auth extends AbstractAuth
{
    protected $metadataStore = null;

    public function __construct($provider,ConfigInterface $config,SessionInterface $session,CookieInterface $cookie,DatabaseInterface $database,$path)
    {


        parent::__construct($provider,$config,$session,$cookie,$database,$path);


        $this->database->setModels($this->config->get('saml2.models'));

        $this->metadataStore =  $this->loadMetadataStore();
    }

    protected function loadMetadataStore()
    {
        switch($this->config->get('saml2.metadataStore'))
        {
            case 'config':
                return new MetadataConfig($this->config);
                break;
            case 'database':
                return new MetadataDatabase($this->config,$this->database);
        }
    }


    public function metadata()
    {

        /*$xmlDoc = new \DOMDocument("1.0","UTF-8");
        $terms = $xmlDoc->createComment('TERMS OF USE
The contents of this file may only be used (with the two exceptions below) to establish SAML2 interoperability between sites partnered with this site.
Where the partner has published its metadata at the URL described by the members entityID,
then the terms of use described at that URL take precedence over these terms of use for that member only.
All email addresses and phone numbers contained within this metadata must not be used as part of any mass emailing campaign (SPAM) or cold-calling campaign.
Individual contact is acceptable provided the contact relates to the potential use of their service provider or identity provider service,
or where a vendor of a SAML product or services wishes to make contact with the operator of the service provider or identity provider');
        $xmlDoc->appendChild($terms);

        /// this should be a loaded metadata file from config or should be generated from teh database
        $metadata = new EntitiesDescriptor();
        $entity = new EntityDescriptor('https://app.onelogin.com/saml/metadata/343584');


        $roleDescriptor = new IDPSSODescriptor();

        $roleDescriptor->addSingleSignOnService(Saml2Constants::Binding_HTTP_Redirect,"https://app.onelogin.com/trust/saml2/http-post/sso/343584");
        $roleDescriptor->addSingleSignOnService(new EndpointType(Saml2Constants::Binding_HTTP_POST,"https://app.onelogin.com/trust/saml2/http-post/sso/343584"));
        $roleDescriptor->addSingleSignOnService(Saml2Constants::Binding_SOAP,"https://app.onelogin.com/trust/saml2/soap/sso/343584");

        $entity->addRoleDescriptor($roleDescriptor);

        $metadata->addDescriptor($entity);

        $metadata->toXML($xmlDoc);

        header('Content-Type: application/xml');
        flush();
        return $xmlDoc->saveXML();*/

       return $this->metadataStore->importMetadata();

       // return $this->metadataStore->getEntity($this->config->get('saml2.myEntityID'));
    }
} 