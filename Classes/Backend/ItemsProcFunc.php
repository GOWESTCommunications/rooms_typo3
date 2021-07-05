<?php

namespace GoWest\RoomsTypo3\Backend;

use Psr\Http\Message\RequestFactoryInterface;

class ItemsProcFunc {

	public function handle($url) {
		$additionalOptions = [
			'headers' => ['Cache-Control' => 'no-cache'],
			'allow_redirects' => false,
			'exceptions' => false
		];
		$requestFactory = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Http\RequestFactory::class);
		
		$response = $requestFactory->request($url, 'GET', $additionalOptions);
		if ($response->getStatusCode() === 200) {
			if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === 0) {
				return $response->getBody()->getContents();
			}
		} else {
			return false;
		}
	}

	public function getRooms(&$fConfig, $fObj) {
		\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump('test');
		$hotel_id = $fConfig['flexParentDatabaseRow']['pi_flexform']['data']['hotel']['lDEF']['hotel_id']['vDEF'];
		if (strlen($hotel_id) > 1) {
			if($request = $this->handle('https://kognitiv.go-stage.at/items/rooms?filter[hotel_id][hotel_code][_eq]=' . $hotel_id . '&fields[]=code,name')) {
				$json = json_decode($request, true);
				//debug($json);
				
				foreach($json['data'] as $room) {
					$fConfig['items'][$room['code']] = [
						$room['name'],
						$room['code'], // VALUE
					];
				}
				ksort($fConfig['items']);
			}
		}
	}
	
	public function getPackages(&$fConfig, $fObj) {
		$hotel_id = $fConfig['flexParentDatabaseRow']['pi_flexform']['data']['hotel']['lDEF']['hotel_id']['vDEF'];
		if (strlen($hotel_id) > 1) {
			if($request = $this->handle('https://kognitiv.go-stage.at/items/packages?filter[hotel][hotel_code][_eq]=' . $hotel_id . '&fields[]=code,name')) {
				$json = json_decode($request, true);
				//debug($json);
				
				foreach($json['data'] as $package) {
					$fConfig['items'][$package['code']] = [
						$package['code'], // name not there yet
						$package['code'], // VALUE
					];
				}
				ksort($fConfig['items']);
			}
		}
	}
	
	public function getServices(&$fConfig, $fObj) {
		$hotel_id = $fConfig['flexParentDatabaseRow']['pi_flexform']['data']['hotel']['lDEF']['hotel_id']['vDEF'];
		if (strlen($hotel_id) > 1) {
			if($request = $this->handle('https://switch.seekda.com/switch/latest/json/services.json?skd-property-code=' . $hotel_id . '&skd-start-date=' . (date("Y")+1) . '-01-01&skd-end-date=' . (date("Y")+1) . '-12-31&token=42')) {
				$json = json_decode($request, true);
				//debug($json);
				
				foreach($json['result']['services'] as $service) {
					$fConfig['items'][$service['code']] = [
						$service['title'],
						$service['code'], // VALUE
					];
				}
				ksort($fConfig['items']);
			}
		}
	}
}