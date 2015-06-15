<?php

namespace CL\Slack\Serializer;

use CL\Slack\Payload\PayloadResponseInterface;

/**
 * Interface CL\Slack\Serializer\PayloadResponseSerializerInterface
 * Date: 15/06/2015
 * @author Paolo Agostinetto <paul.ago@gmail.com>
 */
interface PayloadResponseSerializerInterface {

    /**
     * @param array  $payloadResponse
     * @param string $payloadResponseClass
     * @return PayloadResponseInterface
     */
    public function deserialize(array $payloadResponse, $payloadResponseClass);
}