<?php
/**
 * Needed to force any implementation to recognize it
 */
namespace Patterns\Observer;

interface SubjectInterface
{
    public function notify();

    public function getStatus();
}
