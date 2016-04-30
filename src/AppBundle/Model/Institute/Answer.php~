<?php

namespace AppBundle\Model\Institute;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="answer")
 * @ORM\Entity
 */
class Answer {
    /**
     * @var int
     *
     * @ORM\Column(name="answer_id", type="integer", unique=true)
     * @ORM\Id
     */
    private $answerId;

    /**
     * @ORM\OneToOne(targetEntity="question")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="question_id")
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="script", type="text")
     */
    private $script;

    /**
     * Set answerId
     *
     * @param integer $answerId
     *
     * @return Answer
     */
    public function setAnswerId($answerId)
    {
        $this->answerId = $answerId;

        return $this;
    }

    /**
     * Get answerId
     *
     * @return integer
     */
    public function getAnswerId()
    {
        return $this->answerId;
    }

    /**
     * Set script
     *
     * @param string $script
     *
     * @return Answer
     */
    public function setScript($script)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Set question
     *
     * @param \AppBundle\Model\Institute\Question $question
     *
     * @return Answer
     */
    public function setQuestion(Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \AppBundle\Model\Institute\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
