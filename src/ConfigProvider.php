<?php

declare(strict_types=1);
namespace Lijinhua\HyperfMailer;

use Lijinhua\HyperfMailer\Command\GenMailCommand;
use Lijinhua\HyperfMailer\Contract\MailManagerInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                MailManagerInterface::class => MailManager::class,
            ],
            'commands' => [
                GenMailCommand::class,
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'listeners' => [
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for lijinhua/hyperf-mailer.',
                    'source' => __DIR__ . '/../publish/mail.php',
                    'destination' => BASE_PATH . '/config/autoload/mail.php',
                ],
            ],
        ];
    }
}
