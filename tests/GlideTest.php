<?php

declare(strict_types=1);

use AvatarPHP\Glide;
use Glide\Exception\InvalidException;
use PHPUnit\Framework\TestCase;

final class GlideTest extends TestCase
{
    protected $Glide;
    protected $key = 'glide__';

    public function setup(): void
    {
        $this->Glide = new Glide();
    }

    public function testVerifyToken()
    {
        $token = $this->Glide->token();

        $this->assertNotEmpty($token);
    }

    public function testValidationException()
    {
        $this->expectException(InvalidException::class);

        $this->Glide->validate(1231);
    }

    public function testValidateToken()
    {
        $token = $this->Glide->token();

        $validation = $this->Glide->validate($token);

        $this->assertEquals(true, $validation);
    }
    
    public function testPutToken()
    {
        $token = $this->Glide->token();

        $this->assertTrue($this->Glide->put($this->key,$token));
    }

    public function testGetToken()
    {
        $token = $this->Glide->token();

        $this->assertEquals($token, $this->Glide->get($this->key));
    }

    public function testDestroyToken()
    {
        $token = $this->Glide->token();

        $this->assertTrue($this->Glide->destroy());
    }
}
