<?php
namespace Wrangle\Contracts\Events;

interface EventsContainer
{
    /**
     * Ϊevent��һ��listener
     * @param array $evnet �¼�,����Ԫ��Ϊ�ַ���
     * @param string|callable $listener ������
     * @return mixed
     */
    public function on($evnet, $listener);

    /**
     * ����һ���¼�
     * @param string $event
     * @param array $params
     * @return mixed
     */
    public function emit($event, $params);

    /**
     * �Ƴ�ĳһ�¼�
     * @param string $event
     * @return mixed
     */
    public function removeListener($event);

}