<?php


namespace DocBoard\Domain;


class Comment 

{

    /**

     * Comment id.

     *

     * @var integer

     */

    private $id;


    /**
     * Comment author.
     *
     * @var \DocBoard\Domain\User
     */
    private $author;


    /**

     * Comment content.

     *

     * @var integer

     */

    private $content;


    /**

     * Associated article.

     *

     * @var \DocBoard\Domain\Article

     */

    private $article;


    public function getId() {

        return $this->id;

    }


    public function setId($id) {

        $this->id = $id;

    }


    public function getAuthor() {

        return $this->author;

    }


    public function setAuthor(User $author) {

        $this->author = $author;

        return $this;

    }


    public function getContent() {

        return $this->content;

    }


    public function setContent($content) {

        $this->content = $content;

    }


    public function getArticle() {

        return $this->article;

    }


    public function setArticle(Article $article) {

        $this->article = $article;

    }

}