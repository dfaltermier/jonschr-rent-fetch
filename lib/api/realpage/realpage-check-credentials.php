<?php

/**
 * Check if the credentials exist
 *
 * @return  bool  true if creds exist, false if not
 */
function rentfetch_check_creds_realpage() {
    
    $realpage_integration_creds = get_field( 'realpage_integration_creds', 'option' );
    $realpage_user = $realpage_integration_creds['realpage_user'];
    $realpage_pass = $realpage_integration_creds['realpage_pass'];
    $realpage_pmc_id = $realpage_integration_creds['realpage_pmc_id'];
    $realpage_site_ids = $realpage_integration_creds['realpage_site_ids'];
    
    // return false if there's no api key set
    if ( !$realpage_user || !$realpage_pass || !$realpage_pmc_id || !$realpage_site_ids )      
        return false;
    
    // return true if there's an api key
    return true;
    
}
