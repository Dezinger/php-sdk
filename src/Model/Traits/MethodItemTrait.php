<?php


namespace KassaCom\SDK\Model\Traits;


use KassaCom\SDK\Model\Response\Item\CardItem;

trait MethodItemTrait
{
    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string
     */
    private $account;

    /**
     * @var CardItem|null
     */
    private $card;

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param string $account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @return CardItem|null
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param CardItem|null $card
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }
}
