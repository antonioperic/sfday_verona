<?php

namespace App\Handler;

use App\Entity\PasswordResetRequest;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class PasswordResetRequestHandler implements MessageHandlerInterface
{
    public function __invoke(PasswordResetRequest $forgotPassword)
    {
        dump($forgotPassword);
    }
}
