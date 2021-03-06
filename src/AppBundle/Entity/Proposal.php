<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 10.03.17
 * Time: 18:27
 */

namespace AppBundle\Entity;


use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProposalRepository")
 * @ORM\Table(name="proposals")
 * */
class Proposal
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @var integer
     * @ORM\Column(name="loan_amount", type="integer")
     */
    private $loan_amount;
    /**
     * @var integer
     * @ORM\Column(name="loan_duration", type="integer")
     */
    private $loan_duration;
    /**
     * @var string
     * @ORM\Column(name="phone_number", type="string", length=9 )
     */
    private $phone_number;
    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=255 )
     */
    private $email;
    /**
     * @var DateTime
     * @ORM\Column(name="date_add", type="date")
     */
    private $date_add;

    /**
     * Proposal constructor.
     */
    public function __construct()
    {
        if (!$this->date_add) $this->date_add = new DateTime('now');
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return integer
     */
    public function getLoanAmount()
    {
        return $this->loan_amount;
    }

    /**
     * @param integer $loan_amount
     */
    public function setLoanAmount($loan_amount)
    {
        $this->loan_amount = $loan_amount;
    }

    /**
     * @return integer
     */
    public function getLoanDuration()
    {
        return $this->loan_duration;
    }

    /**
     * @param integer $loan_duration
     */
    public function setLoanDuration($loan_duration)
    {
        $this->loan_duration = $loan_duration;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param string $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return DateTime
     */
    public function getDateAdd()
    {
        return $this->date_add;
    }

    /**
     * @param DateTime $date_add
     */
    public function setDateAdd(DateTime $date_add)
    {
        $this->date_add = $date_add;
    }


}