<?php

/**
 * @apiGroup           RolePermission
 * @apiName            revokeRoleFromUser
 * @api                {post} /roles/revoke Revoke/Remove Roles from User
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiHeader          Accept application/json
 * @apiHeader          Authorization Bearer {User-Token}
 *
 * @apiParam           {Number} user_id the user ID
 * @apiParam           {Array-String} roles_names Name or Names of the Roles
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 200 OK
{
   "data":{
      "id":abcderf,
      "name":"Mrs. Genoveva Prosacco",
      "email":"abbigail.rolfson@hotmail.com",
      "confirmed":"0",
      "total_credits":0,
      "created_at":{
         "date":"2016-12-30 20:18:33.000000",
         "timezone_type":3,
         "timezone":"UTC"
      },
      "token":null,
      "updated_at":{
         "date":"2016-12-30 20:18:33.000000",
         "timezone_type":3,
         "timezone":"UTC"
      },
      "deleted_at":null,
      "roles":{
         "data":[
            {
               "name":"admin",
               "description":"Super Administrator",
               "display_name":""
            },
            {
               "name":"client",
               "description":"Normal Client",
               "display_name":""
            }
         ]
      }
   }
}
 */

$router->post('roles/revoke', [
    'uses'       => 'Controller@revokeRoleFromUser',
    'middleware' => [
        'api.auth',
    ],
]);
