<?php

namespace App;

use App\Actuators\ActuatorInterface;
use Exception;

/**
 * Bot dispatcher.
 */
class BotDispatcher
{
    /**
     * @var array $map
     */
    private $map = [
        'a' => [
            'actuator' => 'App\\Actuators\\A',
        ],
        'b' => [
            'actuator' => 'App\\Actuators\\B',
        ],
        'c' => [
            'actuator' => 'App\\Actuators\\C',
        ],
        'd' => [
            'actuator' => 'App\\Actuators\\D',
        ],
    ];

    /**
     * Run.
     *
     * @param array $params
     *
     * @return array
     */
    public function run(array $params): array
    {
        $condition = $params['condition'];

        if (!array_key_exists($condition, $this->map)) {
            throw new Exception("The condition is not match.", 400);
        }

        $namespace = $this->map[$condition]['actuator'];

        if (!class_exists($namespace)) {
            throw new Exception("The $namespace class is undefined.", 400);
        }

        $class = new $namespace();

        if (!$class instanceof ActuatorInterface) {
            throw new Exception("The $namespace class is implement ActuatorInterface.", 500);
        }

        $result = $class->run($params);

        return $result;
    }
}
