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
namespace JmapClient\Requests\Mail;

use JmapClient\Requests\RequestFilter;

class MailboxFilter extends RequestFilter
{

    public function __construct(object &$filter) {

        parent::__construct($filter);
        
    }

    public function in(string $value): self {

        // creates or updates parameter and assigns value
        $this->condition('parentId', $value);
        // return self for function chaining
        return $this;

    }

    public function name(string $value): self {

        // creates or updates parameter and assigns value
        $this->condition('name', $value);
        // return self for function chaining
        return $this;

    }

    public function role(string $value): self {

        // creates or updates parameter and assigns value
        $this->condition('role', $value);
        // return self for function chaining
        return $this;

    }

    public function hasRoles(bool $value): self {

        // creates or updates parameter and assigns value
        $this->condition('hasAnyRole', $value);
        // return self for function chaining
        return $this;

    }

    public function isSubscribed(bool $value): self {

        // creates or updates parameter and assigns value
        $this->condition('isSubscribed', $value);
        // return self for function chaining
        return $this;

    }

}
