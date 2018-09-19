<?php

namespace Qless\Workers;

use Psr\Log\LoggerInterface;
use Qless\Exceptions\RuntimeException;
use Qless\Jobs\Job;

/**
 * Qless\Workers\WorkerInterface
 *
 * @package Qless\Workers
 */
interface WorkerInterface
{
    /**
     * Sets the interval for checking for new jobs.
     *
     * @param  int $interval
     * @return void
     */
    public function setInterval(int $interval): void;

    /**
     * Sets the internal worker logger.
     *
     * @param  LoggerInterface $logger
     * @return void
     */
    public function setLogger(LoggerInterface $logger): void;

    /**
     * Sets the internal worker name.
     *
     * @param  string $name
     * @return void
     */
    public function setName(string $name): void;

    /**
     * Register the job perform handler.
     *
     * @param  string $jobPerformClass The fully qualified class name.
     * @return void
     *
     * @throws RuntimeException
     */
    public function registerJobPerformHandler(string $jobPerformClass): void;

    /**
     * Reserve a job to perform work.
     *
     * @return null|Job
     */
    public function reserve(): ?Job;

    /**
     * Starts the worker.
     *
     * @return void
     */
    public function run(): void;

    /**
     * Set the title of the process.
     *
     * @param  string $value
     * @param  array  $context
     * @return void
     */
    public function title(string $value, array $context = []): void;
}