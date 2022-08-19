<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Register_PropApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function should_新しい小道具を追加して返却する()
    {
        $data = [
            'prop' => '手紙',
            'owner' => 1,
            'comment' => '捨ててOK',
        ];

        $response = $this->json('POST', route('register'), $data);

        $user = User::first();
        $this->assertEquals($data['name'], $user->name);

        $response
            ->assertStatus(201)
            ->assertJson(['name' => $user->name]);
    }
}
