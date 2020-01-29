<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

final class AdherentTest extends TestCase
{
    public function testShouldCreateAnInstanceOfUser(): void
    {
        $this->assertInstanceOf(
            Adherant::class,
            new Adherant("Dumortier", "Tristan", new DateTime())
        );
    }
}
