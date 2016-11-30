<?php

use EGALL\EloquentPHPUnit\EloquentTestCase;

class SettingsTest extends EloquentTestCase
{
    /**
     * The user model's full namespace.
     *
     * @var string
     */
    protected $model = 'App\Models\Settings';

    /**
     * Disable database seeding.
     *
     * @var bool
     */
    protected $seedDatabase = false;

    /** @test */
    public function the_database_table_has_all_of_the_correct_columns()
    {
        $this->table->column('id')->integer()->increments()->primary();
        $this->table->column('setting_name')->string()->index();
        $this->table->column('setting_value')->string()->nullable();
    }

    /** @test */
    public function it_has_the_correct_model_properties()
    {
        $this->hasFillable(['setting_name', 'setting_value']);
    }
}
