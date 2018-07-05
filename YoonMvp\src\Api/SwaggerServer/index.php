<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app = new Silex\Application();


$app->DELETE('/Yoon/Api/1.0.0/flag/claim/{claimId}', function(Application $app, Request $request, $claimId) {
            return new Response('How about implementing deleteclaim as a DELETE method ?');
            });


$app->GET('/Yoon/Api/1.0.0/flag/claim/{claimId}', function(Application $app, Request $request, $claimId) {
            return new Response('How about implementing getclaimById as a GET method ?');
            });


$app->GET('/Yoon/Api/1.0.0/flag/claims', function(Application $app, Request $request) {
            return new Response('How about implementing getclaims as a GET method ?');
            });


$app->POST('/Yoon/Api/1.0.0/flag/claim', function(Application $app, Request $request) {
            return new Response('How about implementing placeclaim as a POST method ?');
            });


$app->POST('/Yoon/Api/1.0.0/upload', function(Application $app, Request $request) {
            return new Response('How about implementing addupload as a POST method ?');
            });


$app->DELETE('/Yoon/Api/1.0.0/upload/{uploadId}', function(Application $app, Request $request, $uploadId) {
            return new Response('How about implementing deleteupload as a DELETE method ?');
            });


$app->GET('/Yoon/Api/1.0.0/upload/findByStatus', function(Application $app, Request $request) {
            $status = $request->get('status');
            return new Response('How about implementing finduploadsByStatus as a GET method ?');
            });


$app->GET('/Yoon/Api/1.0.0/upload/findByTags', function(Application $app, Request $request) {
            $tags = $request->get('tags');
            return new Response('How about implementing finduploadsByTags as a GET method ?');
            });


$app->GET('/Yoon/Api/1.0.0/upload/{uploadId}', function(Application $app, Request $request, $uploadId) {
            return new Response('How about implementing getuploadById as a GET method ?');
            });


$app->PUT('/Yoon/Api/1.0.0/upload', function(Application $app, Request $request) {
            return new Response('How about implementing updateupload as a PUT method ?');
            });


$app->POST('/Yoon/Api/1.0.0/upload/{uploadId}', function(Application $app, Request $request, $uploadId) {
            $name = $request->get('name');
            $status = $request->get('status');
            return new Response('How about implementing updateuploadWithForm as a POST method ?');
            });


$app->POST('/Yoon/Api/1.0.0/upload/{uploadId}/uploadImage', function(Application $app, Request $request, $uploadId) {
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
