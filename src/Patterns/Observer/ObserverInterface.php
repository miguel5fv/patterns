<?php
namespace Patterns\Observer;

interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}
