<?php

require __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('Your Application Name');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');

$service = new Google_Service_Sheets($client);
$spreadsheetId = '11eyL4MI9ATISrnoMcR8z_ghhTEVrbCXEYETAf_0Td78';


//Operasi Read
// $range = '2020!A2:A5';
// $response = $service->spreadsheets_values->get($spreadsheetId, $range);
// $values = $response->getValues();
// print_r($values);


//Operasi Update 
// $range = '2020!A2:C2';
// $values = [
//     [
//         'Minil', 'Developer', 'Jakarta'
//     ],
// ];
// $body = new Google_Service_Sheets_ValueRange(
//     [
//         'values' => $values
//     ]
// );
// $params = [
//     'valueInputOption' => 'RAW'
// ];
// $result = $service->spreadsheets_values->update($spreadsheetId, $range, $body, $params);


//Operasi Create 
// $range = '2020';
// $values = [["Turtil", 'Dev', 'Trenggalek']];

// $body = new Google_Service_Sheets_ValueRange([
//     'values' => $values
// ]);
// $params = [
//     'valueInputOption' => 'RAW'
// ];

// $insert = [
//     'insertDataOption' => 'INSERT_ROWS'
// ];
// //executing the request
// $result = $service->spreadsheets_values->update(
//     $spreadsheetId,
//     $range,
//     $body,
//     $params,
//     $insert
// );
// printf("%d cells updated.", $result->getUpdatedCells());

//Proses Delete 
$batchUpdateRequest = new \Google_Service_Sheets_BatchUpdateSpreadsheetRequest(array(
    'requests' => array(
        'deleteDimension' => array(
            'range' => array(
                'sheetId' => 0, // the ID of the sheet/tab shown after 'gid=' in the URL
                'dimension' => "ROWS",
                'startIndex' => 4, // row number to delete
                'endIndex' => 4 + 1
            )
        )
    )
));

$result = $service->spreadsheets->batchUpdate($spreadsheetId, $batchUpdateRequest);
