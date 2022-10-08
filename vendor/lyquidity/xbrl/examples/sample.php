<?php

/**
 * These examples are taken from the XBRL Formula suite.
 *
 * @author Bill Seddon
 * @version 0.9
 * @Copyright (C) 2018 Lyquidity Solutions Limited
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Vendor\Lyquidity\Xbrl\Examples;

include "vendor\lyquidity\xbrl\examples\examples-single.php";
// The tests are organized to reference core schemas in the test suite hierarchy
// This function will adjust the paths to core schemas to use the ones in this package

class XBRLAPI {

	public function validateXBRLReport() {
		$result =  performTestcase( XBRL_Log::getInstance(), 'FMR', 'fmr/index.xml' );
		XBRL_Log::getInstance()->info("after calling performTestcase"."\n");
		XBRL_Log::getInstance()->info($result);
		return $result;
	}
}

//XBRLAPI::validateXBRLReport();
//performTestcase( $log, 'FMR', 'fmr/index.xml' );
//return;


