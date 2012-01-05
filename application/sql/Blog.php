<?php
namespace models;
/**
 * @Entity @Table(name="blog")
 */
class Blog
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
    protected $id;
 
    /**
     * @Column(type="string")
     * @var string
     */
    public $title;
 
    /**
     * @Column(type="string")
     * @var string
     */
    public $content;
 
    public function getId()
    {
        return $this->id;
    }
 
    public function getContent()
    {
        return $this->content;
    }
 
    public function setContent($content)
    {
        $this->content = $content;
    }
 
    public function getTitle() {
        return $this->title;
    }
 
    public function setTitle($title) {
        $this->title = $title;
    }
}