<?php

declare(strict_types=1);

namespace Lijinhua\HyperfMailer;

use Hyperf\AsyncQueue\Job;
use Hyperf\Context\ApplicationContext;
use Lijinhua\HyperfMailer\Contract\MailableInterface;
use Lijinhua\HyperfMailer\Contract\MailManagerInterface;

class QueuedMailableJob extends Job
{
    public function __construct(public MailableInterface $mailable)
    {
    }

    public function handle()
    {
        $this->mailable->send(ApplicationContext::getContainer()->get(MailManagerInterface::class));
    }
}
