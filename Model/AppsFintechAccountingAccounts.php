<?php

namespace Apps\Fintech\Packages\Accounting\Accounts\Model;

use System\Base\BaseModel;

class AppsFintechAccountingAccounts extends BaseModel
{
    public $id;

    public $book_id;

    public $uuid;

    public $name;

    public $type;

    public $description;

    public $balance;

    public $last_reconciled_date;

    public $last_reconciled_balance;
}