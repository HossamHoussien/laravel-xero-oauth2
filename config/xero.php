<?php

return [

    'oauth' => [
        /************************************************************************
         * Client ID provided by Xero when registering your application
         ************************************************************************/
        'client_id'                  => env('XERO_CLIENT_ID'),

        /************************************************************************
         * Client Secret provided by Xero when registering your application
         ************************************************************************/
        'client_secret'              => env('XERO_CLIENT_SECRET'),

        /************************************************************************
         * Webhook signing key provided by Xero when registering webhooks
         ************************************************************************/
        'webhook_signing_key'        => env('XERO_WEBHOOK_KEY', ''),

        /************************************************************************
         * Then scopes you wish to request access to on your token
         * https://developer.xero.com/documentation/oauth2/scopes
         ************************************************************************/
        'scopes'                     => [
            'openid',
            'email',
            'profile',
            'offline_access',
        ],

        /************************************************************************
         * What to do if requesting an access token fails options are either
         * * 'throw' to throw an exception
         * * a url to redirect to.
         ************************************************************************/
        'on_failure'                 => 'throw',

        /************************************************************************
         * Where to redirect to on successful authorization
         ************************************************************************/
        'on_success'                 => route('home'),

        /************************************************************************
         * Url for Xero to redirect to upon granting access
         * Unless you wish to change the default behaviour you should not need to
         * change this
         ************************************************************************/
        'redirect_uri'               => route('xero.authenticate'),

        /************************************************************************
         * Urls for Xero's Oauth integration, you shouldn't need to change these
         ************************************************************************/
        'url_authorize'              => 'https://login.xero.com/identity/connect/authorize',
        'url_access_token'           => 'https://identity.xero.com/connect/token',
        'url_resource_owner_details' => 'https://api.xero.com/api.xro/2.0/Organisation',
    ],

];