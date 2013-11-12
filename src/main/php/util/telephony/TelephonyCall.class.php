<?php namespace util\telephony;

/**
 * Represents a call
 *
 */
class TelephonyCall extends \lang\Object {
  public 
    $origin       = null,
    $destination  = null;
    
  /**
   * Constructor
   *
   * @param   util.telephony.TelephonyAddress origin
   * @param   util.telephony.TelephonyAddress destination
   */
  public function __construct($origin, $destination) {
    $this->origin= $origin;
    $this->destination= $destination;
    
  }
  
  /**
   * Retrieve the origin's phone number
   *
   * @return  string number
   */
  public function getOriginNumber() {
    return $this->origin->toString();
  }

  /**
   * Retrieve the destination's phone number
   *
   * @return  string number
   */
  public function getDestinationNumber() {
    return $this->destination->toString();
  }
}
