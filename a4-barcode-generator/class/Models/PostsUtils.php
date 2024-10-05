<?php

namespace UkrSolution\ProductLabelsPrinting\Models;

use Exception;

class PostsUtils
{
    public function getPostIdByField($fieldData)
    {
        $result = array();
        try {
            if (empty($fieldData['field']) || empty($fieldData['value'])) {
                $result = $fieldData;
                throw new Exception(__('Incorrect search field data.', 'wpbcu-barcode-generator'));
            }
            $fieldType = $fieldData['field'];
            $fieldValue = trim($fieldData['value']);
            $result[$fieldType] = $fieldValue;
            switch ($fieldType) {
                case '_sku':
                    $posts = $this->getPostsBySku($fieldValue);
                    break;
                case 'id':
                    $posts = $this->getPostsById($fieldValue);
                    break;
                default:
                    $posts = array();
            }

            if (!empty($posts)) {
                $result['ids'] = uswbg_a4bObjectsFieldToArray($posts, 'ID');
            } else {
                throw new Exception(__('Not found.', 'wpbcu-barcode-generator'));
            }
        } catch (Exception $e) {
            $result['error'] = $e->getMessage();
        }

        return $result;
    }

    protected function getPostsBySku($value)
    {
        return uswbg_a4bGetPosts(array(
            'meta_key' => '_sku',
            'meta_value' => $value,
            'post_type' => array('product', 'product_variation'),
        ));
    }
    protected function getPostsById($value)
    {
        $value = (int)$value;
        return uswbg_a4bGetPosts(array(
            'post__in' => empty($value) ? array(0) : array($value),
        ));
    }
}
