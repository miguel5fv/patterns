<?php
namespace Patterns\Observer;

trait Observer
{
    protected $status   = null;

    public function update(SubjectInterface $subject)
    {
        $this->status   = $subject->getStatus();

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
