<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app = new Silex\Application();


$app->DELETE('/Yoon/Api/1.0.0/flag/Claim/{claimId}', function(Application $app, Request $request, $ClaimId) {
            return new Response('How about implementing deleteClaim as a DELETE method ?');
            });


$app->GET('/Yoon/Api/1.0.0/flag/Claim/{claimId}', function(Application $app, Request $request, $ClaimId) {
            return new Response('How about implementing getClaimById as a GET method ?');
            });


$app->GET('/Yoon/Api/1.0.0/flag/Claims', function(Application $app, Request $request) {
            return new Response('How about implementing getClaims as a GET method ?');
            });


$app->POST('/Yoon/Api/1.0.0/flag/Claim', function(Application $app, Request $request) {
            return new Response('How about implementing placeClaim as a POST method ?');
            });


$app->POST('/Yoon/Api/1.0.0/Upload', function(Application $app, Request $request) {
            return new Response('How about implementing addUpload as a POST method ?');
            });


$app->DELETE('/Yoon/Api/1.0.0/Upload/{uploadId}', function(Application $app, Request $request, $UploadId) {
            return new Response('How about implementing deleteUpload as a DELETE method ?');
            });


$app->GET('/Yoon/Api/1.0.0/Upload/findByStatus', function(Application $app, Request $request) {
            $status = $request->get('status');
            return new Response('How about implementing findUploadsByStatus as a GET method ?');
            });


$app->GET('/Yoon/Api/1.0.0/Upload/findByTags', function(Application $app, Request $request) {
            $tags = $request->get('tags');
            return new Response('How about implementing findUploadsByTags as a GET method ?');
            });


$app->GET('/Yoon/Api/1.0.0/Upload/{uploadId}', function(Application $app, Request $request, $UploadId) {
            return new Response('How about implementing getUploadById as a GET method ?');
            });


$app->PUT('/Yoon/Api/1.0.0/Upload', function(Application $app, Request $request) {
            return new Response('How about implementing updateUpload as a PUT method ?');
            });


$app->POST('/Yoon/Api/1.0.0/Upload/{uploadId}', function(Application $app, Request $request, $UploadId) {
            $name = $request->get('name');
            $status = $request->get('status');
            return new Response('How about implementing updateUploadWithForm as a POST method ?');
            });


$app->POST('/Yoon/Api/1.0.0/Upload/{uploadId}/UploadImage', function(Application $app, Request $request, $UploadId) {
            $additional_metadata = $request->get('additional_metadata');
            $file = $request->get('file');
            return new Response('How about implementing uploadFile as a POST method ?');
            });


$app->POST('/Yoon/Api/1.0.0/user', function(Application $app, Request $request) {
            return new Response('How about implementing createUser as a POST method ?');
            });


$app->GET('/Yoon/Api/1.0.0/user/{username}', function(Application $app, Request $request, $username) {
            return new Response('How about implementing getUserByName as a GET method ?');
            });


$app->GET('/Yoon/Api/1.0.0/user/login', function(Application $app, Request $request) {
            $username = $request->get('username');
            $password = $request->get('password');
            return new Response('How about implementing loginUser as a GET method ?');
            });


$app->GET('/Yoon/Api/1.0.0/user/logout', function(Application $app, Request $request) {
            return new Response('How about implementing logoutUser as a GET method ?');
            });


$app->PUT('/Yoon/Api/1.0.0/user/{username}', function(Application $app, Request $request, $username) {
            return new Response('How about implementing updateUser as a PUT method ?');
            });


$app->run();
