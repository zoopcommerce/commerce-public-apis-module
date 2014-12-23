<?php

namespace Zoop\Common\DataModel;

interface SocialInterface
{
    /**
     * @return string
     */
    public function getFacebook();

    /**
     *
     * @param string $facebook
     */
    public function setFacebook($facebook);

    /**
     * @return string
     */
    public function getTwitter();

    /**
     *
     * @param string $twitter
     */
    public function setTwitter($twitter);

    /**
     * @return string
     */
    public function getYoutube();

    /**
     *
     * @param string $youtube
     */
    public function setYoutube($youtube);

    /**
     * @return string
     */
    public function getInstagram();

    /**
     *
     * @param string $instagram
     */
    public function setInstagram($instagram);

    /**
     * @return string
     */
    public function getGooglePlus();

    /**
     *
     * @param string $googlePlus
     */
    public function setGooglePlus($googlePlus);

    /**
     * @return string
     */
    public function getPinterest();

    /**
     *
     * @param string $pinterest
     */
    public function setPinterest($pinterest);
}
