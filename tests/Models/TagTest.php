<?php

use App\Models\Post;
use EGALL\EloquentPHPUnit\EloquentTestCase;

class TagTest extends EloquentTestCase
{
    /**
     * The tag model's full namespace.
     *
     * @var string
     */
    protected $model = 'App\Models\Tag';

    /**
     * The user model.
     *
     * @var App\Models\User
     */
    private $user;

    /**
     * Create the user model test subject.
     *
     * @before
     * @return void
     */
    public function createUser()
    {
        $this->user = factory(App\Models\User::class)->create();
    }

    /** @test */
    public function the_database_table_has_all_of_the_correct_columns()
    {
        $this->table->column('id')->integer()->increments();
        $this->table->column('tag')->string()->unique();
        $this->table->column('title')->string()->notNullable();
        $this->table->column('subtitle')->string()->notNullable();
        $this->table->column('meta_description')->string();
        $this->table->column('layout')->string()->defaults(config('blog.tag_layout'));
        $this->table->column('reverse_direction')->boolean();
        $this->table->hasTimestamps();
    }

    /** @test */
    public function it_has_the_correct_model_properties()
    {
        $this->belongsToMany(Post::class)
            ->hasCasts(['reverse_direction' => 'boolean'])
            ->hasFillable('tag', 'title', 'subtitle', 'meta_description', 'reverse_direction', 'created_at', 'updated_at');
    }

    /** @test */
    public function it_validates_the_tag_create_form()
    {
        $this->actingAs($this->user)->post('admin/tag', ['title' => 'example']);
        $this->assertSessionHasErrors();
    }

    /** @test */
    public function it_can_create_a_tag_and_save_it_to_the_database()
    {
        $this->actingAs($this->user)->post('admin/tag', [
            'tag'               => 'example',
            'title'             => 'foo',
            'subtitle'          => 'bar',
            'meta_description'  => 'FooBar',
            'layout'            => config('blog.tag_layout'),
            'reverse_direction' => 0,
        ]);

        $this->seeInDatabase('tags', [
            'tag'               => 'example',
            'title'             => 'foo',
            'subtitle'          => 'bar',
            'meta_description'  => 'FooBar',
            'layout'            => config('blog.tag_layout'),
            'reverse_direction' => 0,
        ]);

        $this->assertSessionHas('_new-tag', trans('messages.create_success', ['entity' => 'tag']));
        $this->assertRedirectedTo('admin/tag');
    }

    /** @test */
    public function it_can_edit_tags()
    {
        $this->actingAs($this->user)
            ->visit(route('admin.tag.edit', 1))
            ->type('Foo', 'title')
            ->press('Save')
            ->see('Success! Tag has been updated.')
            ->see('Foo')
            ->seeInDatabase('tags', ['title' => 'Foo']);
    }

    /** @test */
    public function it_can_delete_a_tag_from_the_database()
    {
        $this->actingAs($this->user)
            ->visit(route('admin.tag.edit', 1))
            ->press('Delete')
            ->dontSee('Success! Tag has been deleted.')
            ->press('Delete Tag')
            ->see('Success! Tag has been deleted.')
            ->dontSeeInDatabase('tags', ['id' => 1]);
    }
}
