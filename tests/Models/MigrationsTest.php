<?php

use EGALL\EloquentPHPUnit\EloquentTestCase;

class MigrationsTest extends EloquentTestCase
{
    /**
     * The user model's full namespace.
     *
     * @var string
     */
    protected $model = 'App\Models\Migrations';

    /**
     * Disable database seeding.
     *
     * @var bool
     */
    protected $seedDatabase = false;

    /** @test */
    public function it_has_the_correct_model_properties()
    {
        $this->hasFillable(['migration', 'batch']);
    }

    /** @test */
    public function the_database_table_has_all_of_the_correct_columns()
    {
        $this->table->column('id')->integer()->increments();
        $this->table->column('migration')->string();
        $this->table->column('batch')->integer();
    }
}
