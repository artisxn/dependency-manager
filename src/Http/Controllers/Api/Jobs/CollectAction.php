<?php

/*
 * This file is part of Laravel Paket.
 *
 * (c) Anton Komarev <anton@komarev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Cog\Laravel\Paket\Http\Controllers\Api\Jobs;

use Cog\Contracts\Paket\Job\Repositories\Job as JobRepositoryContract;
use Illuminate\Contracts\Support\Responsable as ResponsableContract;

final class CollectAction
{
    public function __invoke(JobRepositoryContract $jobs): ResponsableContract
    {
        return new CollectResponse($jobs->all());
    }
}
