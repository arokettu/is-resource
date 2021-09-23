<?php

class TestAssertion extends Exception {}

function assert_equals($expected, $actual, $message = null)
{
    if ($expected !== $actual) {
        throw new TestAssertion($message ?: 'Failed to assert that expected is equal to actual');
    }
}

function assert_true($actual, $message = null)
{
    assert_equals(true, $actual, $message ?: 'Failed to assert that value is true');
}

function assert_false($actual, $message = null)
{
    assert_equals(false, $actual, $message ?: 'Failed to assert that value is false');
}

function assert_null($actual, $message = null)
{
    assert_equals(null, $actual, $message ?: 'Failed to assert that value is null');
}

function assert_exception(\Closure $callback, $exceptionClass, $exceptionMessage = null, $message = null)
{
    $message = $message ?: 'Failed to assert that the expected exception is thrown';

    try {
        $callback();
    } catch (Exception $e) {
        assert_equals($exceptionClass, get_class($e), $message);

        if ($exceptionMessage) {
            assert_equals($exceptionMessage, $e->getMessage(), $message);
        }
    } catch (Throwable $e) {
        assert_equals($exceptionClass, get_class($e), $message);

        if ($exceptionMessage) {
            assert_equals($exceptionMessage, $e->getMessage(), $message);
        }
    }
}
