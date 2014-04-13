<?php namespace T4s\CamelotAuth\Auth\Saml2;

class Saml2Constants{
	/**
	 * Consent Types
	 */
	
	const Consent_Unspecified 				= 'urn:oasis:names:tc:SAML:2.0:consent:unspecified';

	const Consent_Obtained 					= 'urn:oasis:names:tc:SAML:2.0:consent:obtained';

	const Consent_Prior 					= 'urn:oasis:names:tc:SAML:2.0:consent:prior';

	const Consent_Implicit 					= 'urn:oasis:names:tc:SAML:2.0:consent:implicit';

	const Consent_Explicit 					= 'urn:oasis:names:tc:SAML:2.0:consent:explicit';

	const Consent_Unavailable 				= 'urn:oasis:names:tc:SAML:2.0:consent:unavialable';

	const Consent_Inapplicable 				= 'urn:oasis:names:tc:SAML:2.0:consent:inapplicable';

	/**
	 * Namespaces 
	 */
	
	const Namespace_SAMLProtocol			= 'urn:oasis:names:tc:SAML:2.0:protocol';

	const Namespace_SAML 					= 'urn:oasis:names:tc:SAML:2.0:assertion';

	/**
	 * Name Formats
	 */

	const NameFormat_Unspecified 			= 'urn:oasis:names:tc:SAML:2.0:attrname-format:unspecified';
	/**
	 * Name ID Formats
	 */

	const NameID_Unspecified 				= 'urn:oasis:names:tc:SAML:2.0:nameid-format:unspecified';

	const NameID_Persistent					= 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent';

	const NameID_Transient					= 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient';
	
	const NameID_Encrypted					= 'urn:oasis:names:tc:SAML:2.0:nameid-format:encrypted';

	/**
	 * Binding Options
	 */

	const Binding_HTTP_POST					= 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST';

	const Binding_HTTP_Artifact				= 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact';

	const Binding_HTTP_Redirect				= 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect';

	const Binding_SOAP						= 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP';

	const Binding_HOK_SSO					= 'urn:oasis:names:tc:SAML:2.0:profiles:holder-of-key:SSO:browser';

	const Binding_Encoding_DEFLATE			= 'urn:oasis:names:tc:SAML:2.0:bindings:URL-Encoding:DEFLATE';

	/**
	 * StatusCodes
	 */

	const Status_Success					= 'urn:oasis:names:tc:SAML:2.0:status:Success';

	const Status_Requester					= 'urn:oasis:names:tc:SAML:2.0:status:Requester';
	
	const Status_Responder					= 'urn:oasis:names:tc:SAML:2.0:status:Responder';

	const Status_VersionMismatch			= 'urn:oasis:names:tc:SAML:2.0:status:VersionMismatch';

	const Status_AuthnFailed				= 'urn:oasis:names:tc:SAML:2.0:status:AuthnFailed';

	const Status_InvalidAttrNameOrValue		= 'urn:oasis:names:tc:SAML:2.0:status:InvalidAttrNameOrValue';

	const Status_InvalidNameIDPolicy		= 'urn:oasis:names:tc:SAML:2.0:status:InvalidNameIDPolicy';

	const Status_NoAuthnContext				= 'urn:oasis:names:tc:SAML:2.0:status:NoAuthnContext';

	const Status_NoAvailableIDP				= 'urn:oasis:names:tc:SAML:2.0:status:NoAvailableIDP';

	const Status_NoPassive					= 'urn:oasis:names:tc:SAML:2.0:status:NoPassive';

	const Status_NoSupportedIDP				= 'urn:oasis:names:tc:SAML:2.0:status:NoSupportedIDP';

	const Status_PartialLogout				= 'urn:oasis:names:tc:SAML:2.0:status:PartialLogout';

	const Status_ProxyCountExceeded			= 'urn:oasis:names:tc:SAML:2.0:status:ProxyCountExceeded';

	const Status_RequestDenied				= 'urn:oasis:names:tc:SAML:2.0:status:RequestDenied';

	const Status_RequestUnsupported			= 'urn:oasis:names:tc:SAML:2.0:status:RequestUnsupported';

	const Status_RequestVersionDeprecated	= 'urn:oasis:names:tc:SAML:2.0:status:RequestVersionDeprecated';

	const Status_RequestVersionTooHigh		= 'urn:oasis:names:tc:SAML:2.0:status:RequestVersionTooHigh';

	const Status_RequestVersionTooLow		= 'urn:oasis:names:tc:SAML:2.0:status:RequestVersionTooLow';

	const Status_ResourceNotRecognized		= 'urn:oasis:names:tc:SAML:2.0:status:ResourceNotRecognized';

	const Status_TooManyResponses			= 'urn:oasis:names:tc:SAML:2.0:status:TooManyResponses';

	const Status_UnknownAttrProfile			= 'urn:oasis:names:tc:SAML:2.0:status:UnknownAttrProfile';

	const Status_UnknownPrincipal			= 'urn:oasis:names:tc:SAML:2.0:status:UnknownPrincipal';

	const Status_UnsupportedBinding			= 'urn:oasis:names:tc:SAML:2.0:status:UnsupportedBinding';


}