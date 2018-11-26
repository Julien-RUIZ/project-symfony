<?php
/**
 * Created by PhpStorm.
 * User: lapiscine
 * Date: 20/11/2018
 * Time: 14:04
 */
//utilisation de la class actuelle
namespace AppBundle\Controller;

// namespace , chemin vers les classes que nous allons utiliser
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

//création de la class controleur
class PagesController extends Controller
{

    /** Cette partie va nous permettre de créer un tableau multidim avec lien image et texte.
     *  grace au composant rooting de symfony
     *
     * @Route("/", name="accueil")
     */
    public function AccueilAction(){
        $articles =
            [
                1 =>
                    [
                        'texte' => "blablablablablabla",
                        'image'=>'img/image1.jpeg'
                    ],
                2 =>
                    [
                        'texte' => "BLOBLOBLOBLO",
                        'image'=>'img/image2.jpeg'
                    ],
                3 =>
                    [
                        'texte' => "bliblibliblibli",
                        'image'=>'img/image3.jpeg'
                    ]
            ];
//la
        return $this->render("@App/pages/accueil.html.twig",
            [
                'articles'=>$articles
            ]
        );

    }

    /** Utilisation de la Route pour un envoi sur l adresse  se terminant pas article
     * @Route("/article", name="article")
     */
    public function articleAction(){

        //créer un tableau multidim avec lien image et texte pour l'afficher dans la pas accueil et articles

        $articles =
            [
                1 =>
                    [
                        'texte' => "blablablablablabla",
                        'image'=>'img/image1.jpeg',
                        'id' => 1
                    ],
                2 =>
                    [
                        'texte' => "BLOBLOBLOBLO",
                        'image'=>'img/image2.jpeg',
                        'id' => 2
                    ],
                3 =>
                    [
                        'texte' => "bliblibliblibli",
                        'image'=>'img/image3.jpeg',
                        'id' => 3
                    ],

                4 =>
                    [
                        'texte' => "bolorororrarara",
                        'image'=>'img/image4.jpeg',
                        'id' => 4
                    ],
                5 =>
                    [
                        'texte' => "prettrrraaaaiiieur",
                        'image'=>'img/image5.jpeg',
                        'id' => 5
                    ],
                6 =>
                    [
                        'texte' => "jeeuuuttreeurlriooeieu",
                        'image'=>'img/image6.jpeg',
                        'id' => 6
                    ]
            ];


        return $this->render("@App/pages/articles.html.twig",
            [
                'articles'=>$articles,

            ]
        );

    }

    /** Partie contact, cela va nous renvoyer vers le formulaire
     * @Route("/contact", name="contact")
     */
    public function contactAction(){
        //chargement de la page contact
        return $this->render("@App/pages/contact.html.twig");

    }

    /**
     * @Route("/article/{id}", name="info_article")
     */
    public function infoPlaceholderAction($id){

        $articles =
            [
                1 =>
                    [
                        'texte' => "blablablablablabla",
                        'image'=>'img/image1.jpeg',
                        'id' => 1
                    ],
                2 =>
                    [
                        'texte' => "BLOBLOBLOBLO",
                        'image'=>'img/image2.jpeg',
                        'id' => 2
                    ],
                3 =>
                    [
                        'texte' => "bliblibliblibli",
                        'image'=>'img/image3.jpeg',
                        'id' => 3
                    ],

                4 =>
                    [
                        'texte' => "bolorororrarara",
                        'image'=>'img/image4.jpeg',
                        'id' => 4
                    ],
                5 =>
                    [
                        'texte' => "prettrrraaaaiiieur",
                        'image'=>'img/image5.jpeg',
                        'id' => 5
                    ],
                6 =>
                    [
                        'texte' => "jeeuuuttreeurlriooeieu",
                        'image'=>'img/image6.jpeg',
                        'id' => 6
                    ]
            ];

        return $this->render("@App/pages/info.html.twig",
        [
            'article'=>$articles[$id]
        ]

        );




    }






}