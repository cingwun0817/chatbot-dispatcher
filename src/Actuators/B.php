<?php

namespace App\Actuators;

/**
 * B.
 */
class B implements ActuatorInterface
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
            'message' => 'leo',
            'time' => $params['time'],
        ];
    }
}
