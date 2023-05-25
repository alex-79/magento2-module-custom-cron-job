<?php

namespace Noon\CustomCronJob\Cron;

class CronJob
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function execute()
    {
        $this->logger->info('Custom Cron Job');
        return $this;
    }
}
