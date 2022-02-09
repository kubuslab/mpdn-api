<?php

namespace MPDN\WebHook;

use MPDN\Data;

/**
 * WebHook Request data structure
 */
class Request
{
	
	/**
	 * Raw input array
	 * @var array
	 */
	private $input;

	/**
	 * Request event type
	 * @var string
	 */
	private $event;

	/**
	 * Request message info
	 * @var Message
	 */
	private $message;

	/**
	 * Request data
	 * @var Data
	 */
	private $data;

	/**
	 * @param array $input
	 *
	 * @return void
	 */
	function __construct($input)
	{
		if (isset($input['event']))
		{
			$this->event = $input['event'];
		}

		if (isset($input['message']))
		{
			$this->message = new Message($input['message']);
		}

		if (isset($input['data']))
		{
			$this->data = Data::factory($input['data'], $this->event);
		}
	}

	/**
	 * @return string
	 */
	public function getEvent()
    {
        return $this->event;
    }

    /*public function setEvent($event)
    {
        $this->event = $event;
    }*/

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /*public function setMessage($message)
    {
        $this->message = $message;
    }*/

    /**
     * @return Data
     */
    public function getData()
    {
        return $this->data;
    }

    /*public function setData($data)
    {
        $this->data = $data;
    }*/
}