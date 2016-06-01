<?php

$auth = \Auth\Auth::instance('Myauth');

$seeds = [
    [
        'owner_id'    => 1,
        'name'        => 'チームにんにん',
        'members'     => 8,
        'description' => 'あいこ',
        'icon'        => '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',
    ],
    [
        'owner_id'    => 2,
        'name'        => 'チーム隼伍',
        'members'     => 12,
        'description' => 'テスト',
        'icon'        => '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',
    ]
];

foreach ($seeds as $key => $seed) {
    $model = Model_Team::forge($seed);
    $model->save();
}
