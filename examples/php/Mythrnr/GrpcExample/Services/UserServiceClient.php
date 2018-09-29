<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Mythrnr\GrpcExample\Services;

/**
 */
class UserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Mythrnr\GrpcExample\Messages\User $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Mythrnr\GrpcExample\Messages\User $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/mythrnr.grpc_example.services.UserService/Get',
        $argument,
        ['\Mythrnr\GrpcExample\Messages\User', 'decode'],
        $metadata, $options);
    }

}