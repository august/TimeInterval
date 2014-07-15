<?php namespace August\TimeInterval;

class TimeInterval {

    private $_seconds;

    public function seconds($seconds) {
        $this->_seconds = 0;
        return $this->addSeconds($seconds);
    }

    public function minutes($minutes) {
        $this->_seconds = 0;
        return $this->addMinutes(60);
    }

    public function hours($hours) {
        $this->_seconds = 0;
        return $this->addHours($hours);
    }

    public function days($days) {
        $this->_seconds = 0;
        return $this->addDays($days);
    }

    public function weeks($weeks) {
        $this->_seconds = 0;
        return $this->addWeeks($weeks);
    }

    public function months($months) {
        $this->_seconds = 0;
        return $this->addMonths($months);
    }

    public function years($years) {
        $this->_seconds = 0;
        return $this->addYears($years);
    }



    public function addSeconds($seconds) {
        $this->_seconds = $this->_seconds + $seconds;
        return $this;
    }

    public function addMinutes($minutes) {
        return $this->addSeconds($minutes * 60);
    }

    public function addHours($hours) {
        return $this->addMinutes($hours * 60);
    }

    public function addDays($days) {
        return $this->addHours($days * 24);
    }

    public function addWeeks($weeks) {
        return $this->addDays($weeks * 7);
    }

    public function addMonths($months) {
        return $this->addDays($months * 29.530588853);
    }

    public function addYears($years) {
        return $this->addDays($years * 365.256363051);
    }



    public function subtractSeconds($seconds) {
        $this->_seconds = $this->_seconds - $seconds;
        return $this;
    }

    public function subtractMinutes($minutes) {
        return $this->subtractSeconds($minutes * 60);
    }

    public function subtractHours($hours) {
        return $this->subtractMinutes($hours * 60);
    }

    public function subtractDays($days) {
        return $this->subtractHours($days * 24);
    }

    public function subtractWeeks($weeks) {
        return $this->subtractDays($weeks * 7);
    }

    public function subtractMonths($months) {
        return $this->subtractDays($months * 29.530588853);
    }

    public function subtractYears($years) {
        return $this->subtractDays($years * 365.256363051);
    }



    public function toSeconds() {
        return $this->_seconds;
    }

    public function toMinutes() {
        return $this->toSeconds() / 60;
    }

    public function toHours() {
        return $this->toMinutes() / 60;
    }

    public function toDays() {
        return $this->toHours() / 24;
    }

    public function toWeeks() {
        return $this->toDays() / 7;
    }

    public function toMonths() {
        return $this->toDays() / 29.530588853;
    }

    public function toYears() {
        return $this->toDays() / 365.256363051;
    }

}
