<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TweetControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserIsNotSendingMessage()
    {
        $response = $this->post('/send');

        $response->assertStatus(302);
    }

    public function testCheckIfUserSendATweetMoreThan120Characters()
    {
        $payload = [
            "message" => "orem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lacinia, mauris id molestie
            malesuada, elit neque rhoncus dui"]; // 127

        $response = $this->post('/send', $payload);

        $response->assertStatus(302);
    }

    public function testCheckIfUserSendMessage()
    {
        $payload = ["message" => "hello world"];
        $response = $this->post('/send', $payload);

        $response->assertStatus(200);
    }

}
