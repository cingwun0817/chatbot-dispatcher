<?php

namespace App\Actuators;

/**
 * Actuator interface.
 */
interface ActuatorInterface
{
    /**
     * Run.
     *
     * @param array $params
     *
     * @return array
     */
    public function run(array $params): array;
}
