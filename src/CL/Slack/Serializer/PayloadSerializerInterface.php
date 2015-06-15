<?php

namespace CL\Slack\Serializer;
use CL\Slack\Payload\PayloadInterface;

/**
 * Interface CL\Slack\Serializer${NAME}
 * Date: 15/06/2015
 * @author Paolo Agostinetto <paul.ago@gmail.com>
 */
interface PayloadSerializerInterface {

    /**
     * @param PayloadInterface $payload
     * @return array The serialized payload data
     */
    public function serialize(PayloadInterface $payload);
}