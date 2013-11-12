<?php namespace util\telephony;

/**
 * Represents a terminal
 *
 */
class TelephonyTerminal extends \lang\Object {
  public 
    $address  = null,
    $observed = false;
    
  /**
   * Constructor
   *
   * @param   util.telephony.TelephonyAddress address
   */
  public function __construct($address) {
    
    $this->address= $address;
  }
  
  /**
   * Retrieve the terminal's phone number
   *
   * @return  string number
   */
  public function getAttachedNumber() {
    return $this->address->getNumber();
  }

  /**
   * Set Observed
   *
   * @param   bool observed
   */
  public function setObserved($observed) {
    $this->observed= $observed;
  }

  /**
   * Get Observed state
   *
   * @return  bool
   */
  public function isObserved() {
    return $this->observed;
  }
}
