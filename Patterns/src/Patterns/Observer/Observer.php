<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 16/10/2015
 * Time: 11:41
 */

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