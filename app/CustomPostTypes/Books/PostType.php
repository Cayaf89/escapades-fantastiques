<?php

namespace App\CustomPostTypes\Books;

class PostType
{
    const POST_TYPE = 'books';
    const META_KEYS = [
        '_url_de_la_boutique_particuliers',
        '_url_de_la_boutique_professionels',
        '_url_google_map',
        '_urls_des_vidéos_youtube',
        '_fichier_pdf',
        '_partenaires_repeat',
    ];

    function __construct() {

        $labels = [
            'name'               => 'Livres',
            'singular_name'      => 'Livre',
            'menu_name'          => 'Livres',
            'all_items'          => 'Tous les livres',
            'view_item'          => 'Voir les livres',
            'add_new_item'       => 'Ajouter un nouveau livre',
            'add_new'            => 'Ajouter',
            'edit_item'          => 'Éditer le livres',
            'update_item'        => 'Modifier le livres',
            'search_items'       => 'Rechercher un livre',
            'not_found'          => 'Non trouvé',
            'not_found_in_trash' => 'Non trouvé dans la corbeille',
        ];

        $args = [
            'label'        => 'Livres',
            'description'  => 'Tous sur les livres',
            'menu_icon'    => 'dashicons-book-alt',
            'labels'       => $labels,
            'supports'     => ['title', 'excerpt', 'thumbnail', 'revisions', 'editor'],
            'show_in_rest' => true,
            'hierarchical' => false,
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => ['slug' => 'livres'],
        ];

        register_post_type(self::POST_TYPE, $args);
    }
}
