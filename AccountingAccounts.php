<?php

namespace Apps\Fintech\Packages\Accounting\Accounts;

use Apps\Fintech\Packages\Accounting\Accounts\Model\AppsFintechAccountingAccounts;
use System\Base\BasePackage;

class AccountingAccounts extends BasePackage
{
    protected $modelToUse = AppsFintechAccountingAccounts::class;

    protected $packageName = 'accountingaccounts';

    public $accountingaccounts;

    public function getAccountingAccountById($id)
    {
        $accountingaccounts = $this->getById($id);

        if ($accountingaccounts) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addAccountingAccount($data)
    {
        if ($this->add($data)) {
            $this->addResponse('Account Added successfully', 0, $this->packagesData->last);

            return true;
        }

        $this->addResponse('Error adding account', 1);

        return false;
    }

    public function updateAccountingAccount($data)
    {
        $accountingaccounts = $this->getById($id);

        if ($accountingaccounts) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeAccountingAccount($data)
    {
        $accountingaccounts = $this->getById($id);

        if ($accountingaccounts) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function getAvailableAccountTypes()
    {
        return
            [
                'placeholder'       => [
                    'id'            => 'placeholder',
                    'name'          => 'PLACEHOLDER',
                    'data'          =>
                        [
                            'description'   => 'Placeholder accounts are only to create account hierarchy. They cannot have any transactions in them.',
                        ]
                ],
                'payable'           => [
                    'id'            => 'payable',
                    'name'          => 'ACCOUNTS PAYABLE',
                    'data'          =>
                        [
                            'description'   => 'Accounts Payable are used by businesses to record amounts that must be paid. Example: The business has bought something, but the business has not paid the bill until later.',
                        ]
                ],
                'receivable'        => [
                    'id'            => 'receivable',
                    'name'          => 'ACCOUNTS RECEIVABLE',
                    'data'          =>
                        [
                            'description'   => 'Accounts Receivable records amounts for which money has not yet been received. Example: A business has sold something and issued a bill, but the client has not payed until later.',
                        ]
                ],
                'asset'             => [
                    'id'            => 'asset',
                    'name'          => 'ASSET',
                    'data'          =>
                        [
                            'description'   => 'Asset accounts are used for tracking things that are of value and can be used or sold to pay debts. (Normally a placeholder account)',
                        ]
                ],
                'bank'              => [
                    'id'            => 'bank',
                    'name'          => 'BANK',
                    'data'          =>
                        [
                            'description'   => 'The Bank account type denotes savings or checking accounts held at a bank or other financial institution. Some of these accounts may bear interest. This is also the appropriate account type for check (debit) cards, which directly withdraw payments from a checking account.',
                        ]
                ],
                'cash'              => [
                    'id'            => 'cash',
                    'name'          => 'CASH',
                    'data'          =>
                        [
                            'description'   => 'The Cash account type is used to denote the cash that you store in your wallet, shoe box, piggyback, or mattress.',
                        ]
                ],
                'credit'            => [
                    'id'            => 'credit',
                    'name'          => 'CREDIT CARD',
                    'data'          =>
                        [
                            'description'   => 'The Credit Card account type is used to denote credit card accounts, both for cards that allow floating lines of credit (e.g. VISA, MasterCard, or Discover) and with cards that do not permit continuing balances (e.g. American Express)',
                        ]
                ],
                'equity'            => [
                    'id'            => 'equity',
                    'name'          => 'EQUITY',
                    'data'          =>
                        [
                            'description'   => 'Equity accounts are used to store the opening balances when you first start a new book.',
                        ]
                ],
                'expense'           => [
                    'id'            => 'expense',
                    'name'          => 'EXPENSE',
                    'data'          =>
                        [
                            'description'   => 'Any expense such as food, clothing, taxes, etc.',
                        ]
                ],
                'income'           => [
                    'id'            => 'income',
                    'name'          => 'INCOME',
                    'data'          =>
                        [
                            'description'   => 'Any income received from sources such as salary, interest, dividends, etc.',
                        ]
                ],
                'liability'         => [
                    'id'            => 'liability',
                    'name'          => 'LIABILITY',
                    'data'          =>
                        [
                            'description'   => 'Liability accounts are used for tracking debts or financial obligations. (Normally a placeholder account)',
                        ]
                ],
                'mutual'            => [
                    'id'            => 'mutual',
                    'name'          => 'MUTUAL FUND',
                    'data'          =>
                        [
                            'description'   => 'A professionally managed portfolio of stocks and bonds or other investments divided up into shares.',
                        ]
                ],
                'stock'             => [
                    'id'            => 'stock',
                    'name'          => 'STOCK',
                    'data'          =>
                        [
                            'description'   => 'A share of ownership in a corporation, which entitles its owner to all the risks and rewards that go with it.',
                        ]
                ]
            ];
    }
}