<?php
/*
Plajer's Lair wikis for providing information about projects.
Copyright (C) 2018 Plajer

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function readLanguages($projectId) {
    $apiKey = file_get_contents(__DIR__ . "/POEditorAPIKey.txt");

    $curl = curl_init("https://api.poeditor.com/v2/languages/list");
    curl_setopt($curl, CURLOPT_POST, true);

    curl_setopt($curl, CURLOPT_POSTFIELDS, "api_token=" . $apiKey . "&id=" . $projectId);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    $json = json_decode($response);
    return $json;
}
