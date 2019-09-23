<?php


namespace yiicod\socketio\events;

/**
 * Interface ControlInterface
 * @package yiicod\socketio\events
 */
interface ControlInterface
{
	/**
	 * Does stuff after client disconnects
	 *
	 * @param string $id
	 *
	 * @return mixed
	 */
	public function onDisconnect(string $id);
}
