<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Namespaces;

use Elasticsearch\Namespaces\AbstractNamespace;

/**
 * Class SqlNamespace
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.13.0-SNAPSHOT (10b8c40a14fbb484cbc0664d0ad5d5b6e5be2ab5)
 */
class SqlNamespace extends AbstractNamespace
{

    /**
     * Clears the SQL cursor
     *
     * $params['body'] = (array) Specify the cursor value in the `cursor` element to clean the cursor. (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/sql-pagination.html
     */
    public function clearCursor(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Sql\ClearCursor');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * Executes a SQL request
     *
     * $params['format'] = (string) a short version of the Accept header, e.g. json, yaml
     * $params['body']   = (array) Use the `query` element to start a query. Use the `cursor` element to continue a query. (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/sql-rest-overview.html
     */
    public function query(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Sql\Query');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * Translates SQL into Elasticsearch queries
     *
     * $params['body'] = (array) Specify the query in the `query` element. (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/sql-translate.html
     */
    public function translate(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Sql\Translate');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
}
