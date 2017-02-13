<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
$metadata['https://uat.signin.bisaccount.mycas.org.uk/biz-idp/shibboleth'] = array (
  'entityid' => 'https://uat.signin.bisaccount.mycas.org.uk/biz-idp/shibboleth',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' => 'https://uat.signin.bisaccount.mycas.org.uk/biz-idp/profile/Shibboleth/SSO',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://uat.signin.bisaccount.mycas.org.uk/biz-idp/profile/SAML2/POST/SSO',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://uat.signin.bisaccount.mycas.org.uk/biz-idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://uat.signin.bisaccount.mycas.org.uk/biz-idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://uat.signin.bisaccount.mycas.org.uk/biz-idp/profile/Logout?SPRedirectUrl=https://bizsp1.localhost.macbook',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://uat.signin.bisaccount.mycas.org.uk/biz-idp/profile/Logout?SPRedirectUrl=https://bizsp1.localhost.macbook',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://uat.signin.bisaccount.mycas.org.uk/biz-idp/profile/Logout?SPRedirectUrl=https://bizsp1.localhost.macbook',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' => 'https://uat.signin.bisaccount.mycas.org.uk:8443/biz-idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' => 1,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://uat.signin.bisaccount.mycas.org.uk:8443/biz-idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' => 2,
    ),
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:mace:shibboleth:1.0:nameIdentifier',
    1 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => true,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '
MIIG4TCCBcmgAwIBAgIIbwXHVm9NCpwwDQYJKoZIhvcNAQELBQAwQzELMAkGA1UE BhMCVVMxGDAWBgNVBAoMD1RyZW5kIE1pY3JvIEluYzEaMBgGA1UEAwwRVHJlbmQg TWljcm8gUzIgQ0EwHhcNMTcwMTA1MTIyMjM0WhcNMTkwMTA2MTIyMjM0WjCB0zEd MBsGA1UEDwwUUHJpdmF0ZSBPcmdhbml6YXRpb24xEzARBgsrBgEEAYI3PAIBAxMC R0IxETAPBgNVBAUTCFNDMjg3OTc4MQswCQYDVQQGEwJHQjEVMBMGA1UECAwMV2Vz dCBMb3RoaWFuMRMwEQYDVQQHDApMaXZpbmdzdG9uMSQwIgYDVQQKDBtJbXByb3Zl bWVudCBTZXJ2aWNlIENvbXBhbnkxKzApBgNVBAMMInVhdC5zaWduaW4uYmlzYWNj b3VudC5teWNhcy5vcmcudWswggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIB AQCnVGuXmzBaO4cgxPHAexMg0n5Lcojr3iEIqhY0p/ZhQ+45Q+kTpGLggAVupE3T b3Y7sOlXaHGfp/rWfu4fMMpO1mQsX4y0mWRemtXq8e2lWQUV7I7//UlS6afuFB8b zlwQKm/DKAjv/KacDqwlx3ruITQ3V1GYYMn5WwMLw+mAlPI4L2bufmrZxgz2VG4l EUCouHvjIeftaCPtcwd/jwijIggVUm8aI0FGUURcghah9aVovBbvzU6WEnsKBH8k Aq0XqKRe6we+0UEN93NC5soI/J2QVCpuWPtIssNXTDpPKqw2ADqFfYqMMOHPt3ez vTYqjXJEaHYdC6EKRrnWuYBtAgMBAAGjggNGMIIDQjBwBggrBgEFBQcBAQRkMGIw MQYIKwYBBQUHMAKGJWh0dHA6Ly9vY3NwLnRyZW5kbWljcm8uY29tL3RtczJjYS5j cnQwLQYIKwYBBQUHMAGGIWh0dHA6Ly9vY3NwLnRyZW5kbWljcm8uY29tL3RtczJj YTAdBgNVHQ4EFgQUAf4SSlGTEsERBWQmqI0VABeZdsMwDAYDVR0TAQH/BAIwADAf BgNVHSMEGDAWgBSwmeGQTvNlYyicEj94VrqEwMc6PTBmBgNVHSAEXzBdMAwGCisG AQQBgo8JAgEwCwYJYIV0AVkBAgEBMEAGCisGAQQBgo8JAQEwMjAwBggrBgEFBQcC ARYkaHR0cDovL3NzbC50cmVuZG1pY3JvLmNvbS9yZXNvdXJjZXMvMDkGA1UdHwQy MDAwLqAsoCqGKGh0dHA6Ly9jcmwudHJlbmRtaWNyby5jb20vY3JsL3RtczJjYS5j cmwwDgYDVR0PAQH/BAQDAgWgMB0GA1UdJQQWMBQGCCsGAQUFBwMBBggrBgEFBQcD AjAtBgNVHREEJjAkgiJ1YXQuc2lnbmluLmJpc2FjY291bnQubXljYXMub3JnLnVr MIIBfQYKKwYBBAHWeQIEAgSCAW0EggFpAWcAdQCkuQmQtBhYFIe7E6LMZ3AKPDWY BPkb37jjd80OyA3cEAAAAVlunde+AAAEAwBGMEQCICHgGQREZunG9pqX7Au1zJVH oVxwi+5Q/sw/P+WkF+W2AiAsKsn9IaVKAig1TdOWvGaOVRmr++H1ViBNv43TvAVu JQB1AFYUBpov18Ls0/XhvUSyPsdGdrm8mRFcwO+UmFXWidDdAAABWW6d30gAAAQD AEYwRAIgPYIlhzjM3SLnu7G21SgWgApfRmugWhtIPIR1L1MQZhoCIGnTFOQcEdx+ GRsVJp3RIuMZt3PpDCFZt9Nn6bmGr2c1AHcA3esdK3oNT6Ygi4GtgWhwfi6OnQHV XIiNPRHEzbbsvswAAAFZbp4xvQAABAMASDBGAiEA3f3j3jgDTwqUU60mKcCHe+7b Q1JD9yoknUIgK+j3sCsCIQC1nngEpsNOTPuPMXj+VPQ4Y3luBR+Jn7XsbVzonpNb azANBgkqhkiG9w0BAQsFAAOCAQEAVewU9j0nL3Jf+cDi2BKcQrMBuul/AactLz6P OL83oi1I1pQOBvEAa59gGXZMZJ9BMgULIgSYecYPGnHsKW8keiPhUg5jI9ku5QzO auwRdfOUg//dxniDkeRmNZo7K7NieYvdNfkUsu4MRQuQ/+Ry1BTeUDfV07w4l5Rp 7vFTnkgZIt14HHpdv00whm0ZrDk3ZkZkLdG/dqIhibJh/kJg63+yQ0Cumpvx1IvW W7clr9s7p3TO3v0OoPSXalUFkXy3ge3Ow7RQ5uJvzZpGlb4Rzhca3IsT1DZB8Qob UfCEVQgd352GzyJoHA5heB4BnncgsPVSlQJeURH4XKnRN0JOmg==
',
    ),
  ),
  'scope' => 
  array (
    0 => 'org.uk',
  ),
);



$metadata['https://uat.signin.mycas.org.uk/idp/shibboleth'] = array (
  'entityid' => 'https://uat.signin.mycas.org.uk/idp/shibboleth',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' => 'https://uat.signin.mycas.org.uk/idp/profile/Shibboleth/SSO',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://uat.signin.mycas.org.uk/idp/profile/SAML2/POST/SSO',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://uat.signin.mycas.org.uk/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://uat.signin.mycas.org.uk/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://uat.signin.mycas.org.uk/idp/profile/Logout?SPRedirectUrl=https://bizsp1.localhost.macbook',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://uat.signin.mycas.org.uk/idp/profile/Logout?SPRedirectUrl=https://bizsp1.localhost.macbook',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://uat.signin.mycas.org.uk/idp/profile/Logout?SPRedirectUrl=https://bizsp1.localhost.macbook',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' => 'https://uat.signin.mycas.org.uk/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' => 1,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://uat.signin.mycas.org.uk/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' => 2,
    ),
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:mace:shibboleth:1.0:nameIdentifier',
    1 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => true,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '
MIIGzzCCBbegAwIBAgIIUyPO8kTle14wDQYJKoZIhvcNAQELBQAwQzELMAkGA1UEBhMCVVMxGDAW BgNVBAoMD1RyZW5kIE1pY3JvIEluYzEaMBgGA1UEAwwRVHJlbmQgTWljcm8gUzIgQ0EwHhcNMTYx MDAzMjAxODA0WhcNMTgxMDMxMTYzNjAxWjCByDEdMBsGA1UEDwwUUHJpdmF0ZSBPcmdhbml6YXRp b24xEzARBgsrBgEEAYI3PAIBAxMCR0IxETAPBgNVBAUTCFNDMjg3OTc4MQswCQYDVQQGEwJHQjEV MBMGA1UECAwMV2VzdCBMb3RoaWFuMRMwEQYDVQQHDApMaXZpbmdzdG9uMSQwIgYDVQQKDBtJbXBy b3ZlbWVudCBTZXJ2aWNlIENvbXBhbnkxIDAeBgNVBAMMF3VhdC5zaWduaW4ubXljYXMub3JnLnVr MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAj2RAJ9S0wHat+J2RX7/5kwVq9JRQnnXV JLSMSfBMon+W+UBkQHLNXnj9ZJdUSsMbd/DpezFAIT8HyYgUJlEswG+2Dv8e4CAlBgWpoI/+qxlk 06W9+EkXNVIhS9iFbdJROFwdINdYUCHVoihOEB4R1aH6WhQffE1hOm1FdTAaSAOjfWMAsSxxPiMK PmPaiIBRKCP5ntll7/VnfHf406f7duRUrjXmoXlyMohdBJzAOx8YBn2QwJGSoW86sFSSDzEEk1Kp rTYEhGKlvDpDdjQ+CIRhYzdSDmVFZzYxd8OAIBg4+mDT6BkbVGFz7v4mvmVanKOUyqIydRWnbTjV Qv7KnwIDAQABo4IDPzCCAzswcAYIKwYBBQUHAQEEZDBiMDEGCCsGAQUFBzAChiVodHRwOi8vb2Nz cC50cmVuZG1pY3JvLmNvbS90bXMyY2EuY3J0MC0GCCsGAQUFBzABhiFodHRwOi8vb2NzcC50cmVu ZG1pY3JvLmNvbS90bXMyY2EwHQYDVR0OBBYEFBmAbz/TkVJEbbgxqh1mCrYfsWHfMAwGA1UdEwEB /wQCMAAwHwYDVR0jBBgwFoAUsJnhkE7zZWMonBI/eFa6hMDHOj0wZgYDVR0gBF8wXTAMBgorBgEE AYKPCQIBMAsGCWCFdAFZAQIBATBABgorBgEEAYKPCQEBMDIwMAYIKwYBBQUHAgEWJGh0dHA6Ly9z c2wudHJlbmRtaWNyby5jb20vcmVzb3VyY2VzLzA5BgNVHR8EMjAwMC6gLKAqhihodHRwOi8vY3Js LnRyZW5kbWljcm8uY29tL2NybC90bXMyY2EuY3JsMA4GA1UdDwEB/wQEAwIFoDAdBgNVHSUEFjAU BggrBgEFBQcDAQYIKwYBBQUHAwIwIgYDVR0RBBswGYIXdWF0LnNpZ25pbi5teWNhcy5vcmcudWsw ggGBBgorBgEEAdZ5AgQCBIIBcQSCAW0BawB3AKS5CZC0GFgUh7sTosxncAo8NZgE+RvfuON3zQ7I DdwQAAABV4w7ZfoAAAQDAEgwRgIhALIdomCCTrF5Iyk5l69cwyfE/SN/2YRPjyp+DhgttxV6AiEA wBd/L/e96bNvmyrSQvx7AjzBm5p6Zr7FRJAMfdDGAQgAdwBo9pj4H2SCvjqM7rkoHUz8cVFdZ5PU RNEKZ6y7T0/7xAAAAVeMO2g1AAAEAwBIMEYCIQDsPhj6M6Pxcc7zCK+tpGGQy31mO+6v6AQzCX8j XwsGcQIhAPDJZBmrMApSJpBGNPGOlJm9G3Ao3+n6TsTH5Rtg0hGwAHcAVhQGmi/XwuzT9eG9RLI+ x0Z2ubyZEVzA75SYVdaJ0N0AAAFXjDtqVgAABAMASDBGAiEAsJnXRzdszgUtII0yLA9K9FJ7jyUA ox3znGdACS6SbOMCIQC0K9FgBBsYq6jyh4YxezmQNm+ZZbkrOlF6n8eiy+Y82TANBgkqhkiG9w0B AQsFAAOCAQEAIAfcviangS/wO5J5rrPp1Y5WDbvuAjRDXywRu6i/oI/o40Vst2/5vaQrKJTUnFKJ 1M3NpmyuBualdS6ntopG41+0po1GsDQctvjtFuIsZ/2kgNmW80wrJhvhQC2UjQb458F8eBZFitbv EXDjG2iRbdOJce0ZOOWYkVkgdkPoRAK9J8dMgLwQUVynECcVOdqKcN9BnzgF2522N3FvNboE++Ha ersj3GDDC7I2x9WZV2WMAYMOUgTa0BASTxlQIIlmMxKhJiyxBo69P2D/9heOD09piTojWTGEijXT sYqjrsHtV9tClOK8d2L1mBfotVj9dnNW6HHrwiIVVUspe5l05g==
',
    ),
  ),
  'scope' => 
  array (
    0 => '252.6',
  ),
);

