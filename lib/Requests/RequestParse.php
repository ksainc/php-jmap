<?php
declare(strict_types=1);

/**
* @copyright Copyright (c) 2023 Sebastian Krupinski <krupinski01@gmail.com>
*
* @author Sebastian Krupinski <krupinski01@gmail.com>
*
* @license AGPL-3.0-or-later
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as
* published by the Free Software Foundation, either version 3 of the
* License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*/
namespace JmapClient\Requests;

use JmapClient\Requests\Request;

class RequestParse extends Request
{

    public function __construct(string $space, string $class, string $account, string $identifier = '') {

        parent::__construct($space, $class, 'parse', $account, $identifier);
        
    }

    public function target(string ...$id): self {

        // creates or updates parameter and assigns new value
        $this->_command['blobIds'] = $id;
        // return self for function chaining 
        return $this;

    }

    public function property(string ...$id): self {

        // creates or updates parameter and assigns new value
        $this->_command['properties'] = $id;
        // return self for function chaining 
        return $this;

    }

}
