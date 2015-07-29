<?php
namespace Wrangle\Contracts\Events;

interface EventsContainer
{
    /**
     * 为event绑定一个listener
     * @param array $evnet 事件,数组元素为字符串
     * @param string|callable $listener 监听器
     * @return mixed
     */
    public function on($evnet, $listener);

    /**
     * 触发一个事件
     * @param string $event
     * @param array $params
     * @return mixed
     */
    public function emit($event, $params);

    /**
     * 移除某一事件
     * @param string $event
     * @return mixed
     */
    public function removeListener($event);

}