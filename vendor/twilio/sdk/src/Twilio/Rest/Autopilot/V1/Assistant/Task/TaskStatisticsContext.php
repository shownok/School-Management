<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1\Assistant\Task;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class TaskStatisticsContext extends InstanceContext {
    /**
     * Initialize the TaskStatisticsContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $assistantSid The SID of the Assistant that is the parent of
     *                             the resource to fetch
     * @param string $taskSid The SID of the Task that is associated with the
     *                        resource to fetch
     * @return \Twilio\Rest\Autopilot\V1\Assistant\Task\TaskStatisticsContext
     */
    public function __construct(Version $version, $assistantSid, $taskSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('assistantSid' => $assistantSid, 'taskSid' => $taskSid, );

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/Tasks/' . \rawurlencode($taskSid) . '/Statistics';
    }

    /**
     * Fetch a TaskStatisticsInstance
     *
     * @return TaskStatisticsInstance Fetched TaskStatisticsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new TaskStatisticsInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
            $this->solution['taskSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Autopilot.V1.TaskStatisticsContext ' . \implode(' ', $context) . ']';
    }
}