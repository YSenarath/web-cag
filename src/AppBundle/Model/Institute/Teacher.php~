<?php

namespace AppBundle\Model\Institute;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="teacher")
 */
class Teacher extends Person {
    /**
     * Returns the roles granted to the user.
     * @return array (Role|string)[] The user roles
     */
    public function getRole()
    {
        return ['ROLE_TEACHER'];
    }
}
