<?php

namespace App\Containers\User\Controllers\Api;

use App\Containers\User\Tasks\ApiLogoutTask;
use App\Engine\Controller\Abstracts\ApiController;
use App\Engine\Request\Manager\HttpRequest;

/**
 * Class LogoutController.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class LogoutController extends ApiController
{

    /**
     * @param \App\Engine\Request\Manager\HttpRequest $request
     * @param \App\Containers\User\Tasks\ApiLogoutTask             $logoutTask
     *
     * @return \Dingo\Api\Http\Response
     */
    public function handle(HttpRequest $request, ApiLogoutTask $logoutTask)
    {
        $logoutTask->run($request->header('authorization'));

        return $this->response->accepted(null, [
            'message' => 'User Logged Out Successfully.',
        ]);
    }
}
