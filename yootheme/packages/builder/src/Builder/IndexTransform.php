<?php

namespace YOOtheme\Builder;

class IndexTransform
{
    /**
     * @var int
     */
    protected $index = 0;

    /**
     * Transform callback.
     *
     * @param object $node
     * @param array  $params
     */
    public function __invoke($node, array $params)
    {
        if ($params['context'] !== 'render') {
            return;
        }

        if (empty($params['prefix'])) {
            return;
        }

        if (empty($params['parent'])) {
            $this->index = 0;
        }

        if ($params['type']->element || $params['type']->container) {
            $node->attrs = $node->attrs ?? [];
            $node->attrs['data-id'] = $params['prefix'] . '#' . $this->index++;
        }
    }
}
