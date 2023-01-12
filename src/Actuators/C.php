<?php

namespace App\Actuators;

/**
 * C.
 */
class C implements ActuatorInterface
{
    /**
     * Run.
     *
     * @param array $params
     *
     * @return string
     */
    public function run(array $params): array
    {
        return [
            'channel' => 'leo',
            'message' => 'peanut',
            'time' => $params['time'],
        ];
    }
}
