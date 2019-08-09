<?php

use Faker\Generator as Faker;
use ProcessMaker\Models\ProcessVersion;
use ProcessMaker\Models\Process;
use ProcessMaker\Models\ProcessCategory;
use ProcessMaker\Models\User;

/**
 * Model factory for a ProcessVersion
 */
$factory->define(ProcessVersion::class, function (Faker $faker) {
    $emptyProcess = array_random(glob(Process::getProcessTemplatesPath() . '/*.bpmn'));
    return [
        'bpmn' => file_get_contents($emptyProcess),
        'name' => $faker->sentence(3),
        'status' => $faker->randomElement(['ACTIVE', 'INACTIVE']),
        'user_id' => function () {
            return factory(User::class)->create()->getKey();
        },
        'description' => $faker->sentence,
        'process_category_id' => function () {
            return factory(ProcessCategory::class)->create()->getKey();
        },
        'process_id' => function () {
                return factory(Process::class)->create()->getKey();
        }
    ];
});
