<?php
/**
 * We implement this as trait to make it more reusable.
 *
 * The original use is by subclasses but if we want to assure independent code we have to do this.
 */

namespace Patterns\Observer;

trait Subject
{
    protected $status           = 'stopped';
    protected $setOfStatus      = array(
        'stopped'   => 'stopped',
        'starting'  => 'starting',
        'running'   => 'running'
    );
    protected $setOfObservers    = array();

    public function notify()
    {
        foreach ($this->setOfObservers as $setOfTypeObservers) {
            foreach ($setOfTypeObservers as $observer) {
                $observer->update($this);
            }
        }
    }

    public function addObserver(ObserverInterface $observer)
    {
        $this->setOfObservers[get_class($observer)][] = $observer;

        return $this;
    }

    public function removeObserver(ObserverInterface $observer)
    {
        $observerType = get_class($observer);
        if (! empty($this->setOfObservers[$observerType])) {
            $observerIndex = array_search($observer, $this->setOfObservers[$observerType]);

            if (false !== $observerIndex) {
                unset($this->setOfObservers[$observerType][$observerIndex]);
            }
        }

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        if ( empty($this->setOfStatus[$status])) {
            throw new \InvalidArgumentException('That status does not exists');
        }

        $this->status   = $status;
        $this->notify();

        return $this;
    }

    public function setSetOfStatus(array $setOfStatus)
    {
        $this->setOfStatus  = $setOfStatus;

        return $this;
    }
}
