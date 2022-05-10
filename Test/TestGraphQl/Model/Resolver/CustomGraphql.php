<?php
namespace Test\TestGraphQl\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;

class CustomGraphql implements ResolverInterface
{
    /**
     * @param Field $field
     * @param \Magento\Framework\GraphQl\Query\Resolver\ContextInterface $context
     * @param ResolveInfo $info
     * @param array|null $value
     * @param array|null $args
     * @return array|\Magento\Framework\GraphQl\Query\Resolver\Value|mixed
     * @throws GraphQlInputException
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null)
    {
        if (!isset($args['username']) || !isset($args['password']) || !isset($args['fieldtype'])||
            empty($args['username']) || empty($args['password']) || empty($args['fieldtype']))
        {
            throw new GraphQlInputException(__('Invalid parameter list.'));
        }
        $output = [];
        $output['username'] = $args['username'];
        $output['password'] = $args['password'];
        $output['fieldtype'] = $args['fieldtype'];
      
        return $output ;
    }
}