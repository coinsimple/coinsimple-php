<?php

namespace CoinSimple;

class Invoice {
    protected $options;

    public function __construct($opts = array()) {
        $this->options = $opts;
    }

    public function setName($name) {
        $this->options['name'] = $name;
        return $this;
    }

    public function setEmail($email) {
        $this->options['email'] = $email;
        return $this;
    }

    public function addItem($item) {
        if (!array_key_exists('items', $this->options)) {
            $this->options['items'] = array();
        }

        array_push($this->options['items'], $item);
        return $this;
    }

    public function setProcessor($processor) {
        $this->options['processor'] = $processor;
        return $this;
    }

    public function setRate($rate) {
        $this->options['rate'] = $rate;
        return $this;
    }

    public function setCurrency($currency) {
        $this->options['currency'] = $currency;
        return $this;
    }

    public function setNotes($notes) {
        $this->options['notes'] = $notes;
        return $this;
    }

    public function setPercent($percent) {
        $this->options['percent'] = $percent;
        return $this;
    }

    public function setDiscount($percent) {
        $this->options['percent'] = $percent;
        return $this;
    }

    public function setCustom($data) {
        $this->options['custom'] = $data;
        return $this;
    }

    public function setCallbackUrl($url) {
        $this->options['callback_url'] = $url;
        return $this;
    }

    public function setRedirectUrl($url) {
        $this->options['redirect_url'] = $url;
        return $this;
    }

    public function setRecurringTimes($times) {
        $this->options['recurring_times'] = $times;
        return $this;
    }

    public function stopAfter($times) {
        $this->options['recurring_times'] = $times;
        return $this;
    }

    public function recurByDays($num_days) {
        $this->options['invoice_type'] = 'days';
        $this->options['interval'] = $num_days;
        return $this;
    }

    public function recurByDate($day_of_month) {
        $this->options['invoice_type'] = 'date';
        $this->options['interval'] = $day_of_month;
        return $this;
    }

    public function data() {
        return $this->options;
    }
}