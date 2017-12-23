<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /*
     * @author: Mourad
     * Pour me faciliter la lecture des tests
     */
    protected static $OK           = 200;
    protected static $SERVER_ERROR = 500;
    protected static $NOT_FOUND    = 404;
}
