<?php
/**
 * Created by PhpStorm.
 * User: isandre
 * Date: 08/10/18
 * Time: 21:31
 */
namespace Unite;

class Unit
{
    private $pv;
    private $position = array( 0, 0);
    private $speed = 1;

    /**
     * @return mixed
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * @param mixed $pv
     */
    public function setPv($pv): int
    {
        $this->pv = $pv;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        $posi = 'la position horizontale est '. $this->position[0] .' et verticale ' . $this->position[1];
        return $posi;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): array
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed): int
    {
        if ($speed == null){
            $this->speed += 1;
        }
        return $this->speed = $speed;
    }

    public function walk($walk, $speed = 1){
        if ($walk == 'right'){
            $this->position[0] = $this->position[0] + $speed;
        }
        elseif ($walk == 'left'){
            $this->position[0] = $this->position[0] - $speed;
        }
        elseif ($walk == 'top'){
            $this->position[1] = $this->position[1] + $speed;
        }
        elseif ($walk == 'down'){
            $this->position[1] = $this->position[1] - $speed;
        }
        return $this->position;
    }

}