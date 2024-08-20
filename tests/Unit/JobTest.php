<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // AAA
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act
    expect($job->employer->is($employer))->toBeTrue();
    // Asert
});
wit('can have tag', function () {
    $job = Job::factory()->create();

    $job->tag('FrontEnd');

    expect($job->tags)->toHaveCount(1);
});
