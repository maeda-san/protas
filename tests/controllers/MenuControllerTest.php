<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MenuControllerTest extends TestCase
{
    /**
     * indexにルートが通っているか確認します。
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/menu')
                ->assertResponseOk();
    }
}
