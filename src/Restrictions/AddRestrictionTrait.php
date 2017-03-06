<?php

namespace CashbackApi\Restrictions;


trait AddRestrictionTrait
{

    public $addRestrictionPath;

    /**
     * @param bool $withDescription
     * @return bool|object
     */
    public function getRestrictionTypes($withDescription = false)
    {
        $data = new \stdClass();
        $data->with_description = $withDescription;
        return $this->doRequest($this->addRestrictionPath . '/restrictions/get-types', $data);
    }


    public function addRestrictionToRetailer($retailerId = null, $restriction = null)
    {
        $data = new \stdClass();
        $data->retailer_id = $retailerId;

        return $this->doRequest($this->addRestrictionPath . '/restrictions/retailer/add', $data);
    }

    public function addRestrictionToOffer($offerId = null, $restriction = null)
    {
        $data = new \stdClass();
        $data->offer_id = $offerId;

        return $this->doRequest($this->addRestrictionPath . '/restrictions/offer/add', $data);
    }

    public function addRestrictionToCategory($categoryId = null, $restriction = null)
    {
        $data = new \stdClass();
        $data->category_id = $categoryId;

        return $this->doRequest($this->addRestrictionPath . '/restrictions/category/add', $data);
    }

    public function addRestrictionToWhitelabel($whitelabelId = null, $restriction = null)
    {
        $data = new \stdClass();
        $data->whitelabel_id = $whitelabelId;

        return $this->doRequest($this->addRestrictionPath . '/restrictions/whitelabel/add', $data);
    }

    public function addMinAgeRestrictionToRetailer()
    {
        /**
         * TODO make this shit make sense!
         */
    }
}