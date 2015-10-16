<?php
/**
 * Needed to force any implementation to recognize it
 */

interface SubjectInterface
{
    public function notify();

    public function getStatus();
}