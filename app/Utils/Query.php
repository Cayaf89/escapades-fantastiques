<?php

namespace App\Utils;

class Query
{

    /**
     * @param $postIds
     * @param $metaFields
     * @return array
     */
    public static function getPostsMetas($postIds, $metaFields): array {
        if (!empty($postIds) && !empty($metaFields)) {
            global $wpdb;

            $query = "SELECT p.ID, pm.meta_key, pm.meta_value
                      FROM wp_posts AS p
                      INNER JOIN wp_postmeta AS pm ON p.ID = pm.post_id
                      WHERE 1=1
                      AND p.ID IN (" . implode(',', $postIds) . ")
                      AND pm.meta_key IN ('" . implode("','", $metaFields) . "')";
            $postsMetas = $wpdb->get_results($query);

            $sortedMetas = [];
            foreach ($postsMetas as $postMeta) {
                $sortedMetas[$postMeta->ID][$postMeta->meta_key] = maybe_unserialize($postMeta->meta_value);
            }
            return $sortedMetas;
        }
        else {
            return [];
        }
    }
}
