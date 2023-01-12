<?php

namespace App\Actuators;

/**
 * A.
 */
class A implements ActuatorInterface
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
            'channel' => 'facebook',
            'message' => 'willy',
            'time' => $params['time'],
        ];
    }
}
