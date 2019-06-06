<?php
/**
 * Created by PhpStorm.
 * User: dmitrypliusnin
 * Date: 6/5/19
 * Time: 10:27 AM
 */

namespace Taqat\Tazman\Symfony\Controller\Api\Auth;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Taqat\Tazman\Core\UserAccount\Application\Command\Login\Login;
use Taqat\Tazman\Core\UserAccount\Domain\Model\EmailAndPasswordCredentials;
use Taqat\Tazman\Core\UserAccount\Domain\Service\Authenticator\InvalidCredentialsException;

/**
 * Class LoginController
 * @package App\Controller\Api\Auth
 * @Route("/login")
 */
class LoginController
{
    /**
     * @Route("/email")
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function loginByEmail(Request $request)
    {
        $login = new Login();
        try {
            $userAccount = $login->login(new EmailAndPasswordCredentials($request->get('email'), $request->get('password')));
            $response = [
                'status' => true,
                'data' => [
                    'userAccount' => $userAccount
                ],
                'message' => 'Successfully logged in'
            ];
        } catch (InvalidCredentialsException $exception) {
            $response = ['status' => false, 'data' => null, 'message' => 'Invalid Credentials'];
        } catch (\Exception $e) {
            $response = ['status' => false, 'data' => null, 'message' => $e->getMessage()];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/facebook")
     * @return JsonResponse
     */
    public function loginByFacebook()
    {
        return new JsonResponse(['status' => true]);
    }
}
