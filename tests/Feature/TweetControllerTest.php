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

        $response->assertStatus(400);
    }

    public function testCheckIfUserSendATweetMoreThan120Characters()
    {
        $payload = [
            "message" => "orem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lacinia, mauris id molestie
            malesuada, elit neque rhoncus dui"]; // 127

        $response = $this->post('/send', $payload);

        $response->assertStatus(400);
    }

    public function testCheckIfUserIsSedingTheSameMessage()
    {
        $payload = ["message" => "hello world"]; // this message is already tweeted
        $response = $this->post('/send', $payload);

        $response->assertStatus(400);
    }

    public function testCheckIfUserSendMessage()
    {
        $payload = ["message" => time()];
        $response = $this->post('/send', $payload);

        $response->assertStatus(200);
    }

}
