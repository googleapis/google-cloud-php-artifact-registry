<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START artifactregistry_v1_generated_ArtifactRegistry_DeleteRule_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\ArtifactRegistry\V1\Client\ArtifactRegistryClient;
use Google\Cloud\ArtifactRegistry\V1\DeleteRuleRequest;

/**
 * Deletes a rule.
 *
 * @param string $formattedName The name of the rule to delete. Please see
 *                              {@see ArtifactRegistryClient::ruleName()} for help formatting this field.
 */
function delete_rule_sample(string $formattedName): void
{
    // Create a client.
    $artifactRegistryClient = new ArtifactRegistryClient();

    // Prepare the request message.
    $request = (new DeleteRuleRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        $artifactRegistryClient->deleteRule($request);
        printf('Call completed successfully.' . PHP_EOL);
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = ArtifactRegistryClient::ruleName(
        '[PROJECT]',
        '[LOCATION]',
        '[REPOSITORY]',
        '[RULE]'
    );

    delete_rule_sample($formattedName);
}
// [END artifactregistry_v1_generated_ArtifactRegistry_DeleteRule_sync]
